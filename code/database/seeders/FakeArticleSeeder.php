<?php

namespace Database\Seeders;

use App\Enums\ArticleStatus;
use App\Models\Article;
use App\Models\ArticleAdditionalFile;
use App\Models\ArticleAuthor;
use App\Models\Keyword;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class FakeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            // Create and save the article
            $article = new Article();
            $article->journal_id = mt_rand(1, 15); // Replace with the actual journal ID
            $article->title = $faker->sentence; // Generate a random title
            $article->abstract = $faker->paragraph; // Generate a random abstract
            $article->reference = $faker->sentence; // Generate a random reference
            $article->author_comments = $faker->paragraph; // Generate random comments
            $article->file_with_author_info = "asd";
            $article->file_without_author_info = "asf";

            // Attach keywords to the article
            $keywordsArray = $faker->words(mt_rand(3,8));
            $keywordsString = implode(';', $keywordsArray);


            $article->keywords = $keywordsString;
            $article->status = ArticleStatus::MANUSCRIPT_SUBMITTED;

            $article->save();

            $uniqueKeywords = [];
            foreach ($keywordsArray as $keyword) {
                $keyword = strtolower($keyword);

                if ($keyword === '') {
                    continue;
                }

                if (!in_array($keyword, $uniqueKeywords)) {
                    $existingKeyword = Keyword::where('name', $keyword)->first();

                    if ($existingKeyword) {
                        $article->keywords()->attach($existingKeyword->id);
                    } else {
                        $newKeyword = Keyword::create(['name' => $keyword]);
                        $article->keywords()->attach($newKeyword->id);
                    }

                    $uniqueKeywords[] = $keyword;
                }
            }

            // Create and save article authors
            $authorsData = [
                [
                    'first_name' => $faker->firstName,
                    'middle_name' => $faker->lastName,
                    'last_name' => $faker->lastName,
                    'email' => 'john@john.com',
                    'url' => $faker->url,
                    'affiliation' => $faker->company,
                    'bio_statement' => $faker->paragraph,
                    'corresponding' => true,
                ],
                [
                    'first_name' => $faker->firstName,
                    'middle_name' => $faker->lastName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'url' => $faker->url,
                    'affiliation' => $faker->company,
                    'bio_statement' => $faker->paragraph,
                    'corresponding' => false,
                ],
            ];

            $authors = [];
            foreach ($authorsData as $authorData) {
                $author = new ArticleAuthor();
                $author->article_id = $article->id;
                $author->first_name = $authorData['first_name'];
                $author->middle_name = $authorData['middle_name'];
                $author->last_name = $authorData['last_name'];
                $author->email = $authorData['email'];
                $author->url = $authorData['url'];
                $author->affiliation = $authorData['affiliation'];
                $author->bio_statement = $authorData['bio_statement'];
                $author->save();

                $authors[] = $author;

                if ($authorData['corresponding']) {
                    $user = User::where('email', $author->email)->first();

                    if ($user) {
                        $article->correspondingAuthors()->sync([$user->id]);
                    }
                }
            }

            $article->authors()->saveMany($authors);

            // Upload and save supplementary files
            $supplementaryFilesData = [
                getenv('HOME') . '/test.jpeg', // Replace with the actual file path
                getenv('HOME') . '/test.jpeg', // Replace with the actual file path
            ];

            $supplementaryFiles = [];
            foreach ($supplementaryFilesData as $fileData) {
                $file = new ArticleAdditionalFile();
                $file->article_id = $article->id;
                $filename = time() . $article->title . '_supplementary_' . basename($fileData);
                $path = Storage::putFileAs('public/article_submissions/supplementary_files', $fileData, $filename);
                $file->additional_file_name = $path;
                $file->save();

                $supplementaryFiles[] = $file;
            }

            $article->additionalFiles()->saveMany($supplementaryFiles);

            // Upload and save files

            $article->save();
        }
    }
}