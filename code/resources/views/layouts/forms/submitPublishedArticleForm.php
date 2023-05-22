<div class="card">
     <div class="card-header">
         <h4 class="card-title text-center">Submit Published Article</h4>
     </div>
     <div class="card-body">
         <div class="basic-form">

             <form class="p-4" action="{{route('storeJournal')}}" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="title">Journal Name:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="journal_name" id="journal_name" required>
                     </div>
                 </div>

                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="title">Article Title:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="article_title" id="article_title" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="description">Abstract:</label>
                     <div class="col-sm-10">
                         <textarea class="form-control" name="abstract" id="abstract" required></textarea>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="volume_no">Keywords:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="keywords" id="keywords" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="issue_no">Author's Information:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="author_info" id="author_info" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="deadline_date">Published Date:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="datetime-local" name="publish_date" id="publish_date"
                             required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="article_pdf">Upload File: </label>
                     <div class="col-sm-10">
                         <input class="form-control-file" type="file" name="article_pdf" id="article_pdf" required>
                         <p>Must be in PDF format</p>
                     </div>
                 </div>

                 <div class="form-group row">
                     <div class="col-sm-10 text-right">
                         <button type="submit" class="btn btn-primary">Save</button>
                     </div>
             </form>
         </div>
     </div>
 </div>
