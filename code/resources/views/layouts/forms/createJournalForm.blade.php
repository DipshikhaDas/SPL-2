 <div class="card">
     <div class="card-header">
         <h4 class="card-title text-center">Create a Journal For the {{ $faculty->name }}</h4>
     </div>
     <div class="card-body">
         <div class="basic-form">

             <form class="p-4" action="{{route('storeJournal')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="title">Title:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="title" id="title" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="description">Description:</label>
                     <div class="col-sm-10">
                         <textarea class="form-control" name="description" id="description" required></textarea>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="volume_no">Volume Number:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="volume_no" id="volume_no" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="issue_no">Issue Number:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="text" name="issue_no" id="issue_no" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="faculty_name">Faculty Name:</label>
                     <div class="col-sm-10">
                         <select class="form-control" required disabled>
                        <option selected >{{ $faculty->name }}</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="deadline_date">Deadline Date:</label>
                     <div class="col-sm-10">
                         <input class="form-control" type="datetime-local" name="deadline_date" id="deadline_date"
                             required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-sm-2 col-form-label" for="cover_photo">Cover Photo:</label>
                     <div class="col-sm-10">
                         <input class="form-control-file" type="file" name="cover_photo" id="cover_photo">
                         <p>(jpeg,jpg,png,gif - max filesize = 2048 KB)</p>
                     </div>
                 </div>

                 <div class="form-group row">
                     <div class="col-sm-10 text-right">
                         <button type="submit" class="btn btn-primary">Save</button>
                     </div>
             </form>
         </div>
     </div>
     @if (session('success'))
         <div class="alert alert-success alert-dismissible fade show text-dark text-center" role="alert">

             {{ session('success') }}

                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
     @endif

 </div>
