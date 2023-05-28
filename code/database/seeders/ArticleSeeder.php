<?php

namespace Database\Seeders;

use App\Enums\ArticleStatus;
use App\Models\Article;
use App\Models\ArticleAdditionalFile;
use App\Models\ArticleAuthor;
use App\Models\ArticleRevision;
use App\Models\Keyword;
use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Create and save the article
        $article = new Article();
        $article->journal_id = 1; // Replace with the actual journal ID
        $article->title = 'Sample Article'; // Replace with the article title
        $article->abstract = 'Sample abstract'; // Replace with the article abstract
        $article->reference = 'Sample reference'; // Replace with the article reference
        $article->author_comments = 'Sample comments for editor'; // Replace with the article comments
        $article->file_with_author_info = "asd";
        $article->file_without_author_info = "asf";
        // Attach keywords to the article


        $keywordsString = 'keyword1; keyword2; keyword3'; // Replace with the actual keywords string
        $keywordsString = strtolower($keywordsString);
        $keywordsArray = explode(';', $keywordsString);
        $keywordsArray = array_map('trim', $keywordsArray);

        $article->keywords = $keywordsString;
        $article->status = ArticleStatus::MANUSCRIPT_SUBMITTED;

        $article->save();

        $articleRevision0 = new ArticleRevision();
        $articleRevision0->article_id = $article->id;
        $articleRevision0->file_without_author_info = $article->file_without_author_info;
        $articleRevision0->revision_status = ArticleStatus::MANUSCRIPT_SUBMITTED;
        $articleRevision0->save();

        $article->revisions()->save($articleRevision0);

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
                'first_name' => 'John',
                'middle_name' => 'Doe',
                'last_name' => 'Smith',
                'email' => 'john@john.com',
                'url' => 'https://example.com/john',
                'affiliation' => 'Example University',
                'bio_statement' => 'Sample bio statement for John Smith',
                'corresponding' => true,
            ],
            [
                'first_name' => 'Jane',
                'middle_name' => 'D.',
                'last_name' => 'Doe',
                'email' => 'jane@example.com',
                'url' => 'https://example.com/jane',
                'affiliation' => 'Another University',
                'bio_statement' => 'Sample bio statement for Jane Doe',
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
                    $author->is_corresponding = true;
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