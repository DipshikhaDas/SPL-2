<div class="card">
    <div class="card-header">
        <h4 class="card-title text-center"><b>View Submitted Articles</b></h4>
    </div>

    <div class="card-body p-4">

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="min-width: 100px">Sl no.</th>
                        <th style="min-width: 150px">Journal Name</th>
                        <th style="min-width: 150px">Title of Article</th>
                        <th style="min-width: 150px">Author's Name</th>
                        <th style="min-width: 150px">Action</th>
                    </tr>
                </thead>

                {{-- @foreach ($articles as $index => $article) --}}
                <tbody>
                    <tr>
                        <td>
                            Serial No
                        </td>
                        <td>
                            Journal Name
                        </td>

                        <td>
                            Article's Title
                        </td>

                        <td>
                            Author's Name
                        </td>

                        <td>
                            <a class="btn btn-primary" href="">
                                <span class="material-symbols-outlined">preview</span>
                                View
                            </a>
                        </td>
                    </tr>
                </tbody>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>
</div>
