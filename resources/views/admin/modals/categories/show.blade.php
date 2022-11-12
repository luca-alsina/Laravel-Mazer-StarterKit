<div class="modal fade" id="modal-user-{{ $category->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">{{ $category->first_name }} {{ $category->last_name }} ({{ $category->username }})</h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-striped dataTable-table" id="users">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{ $category->username }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $category->email }}</td>
                        </tr>
                        <tr>
                            <td>Is admin</td>
                            <td>{{ $category->is_admin ? 'Yes' : 'No' }}</td>
                        </tr>
                        <tr>
                            <td>First name</td>
                            <td>{{ $category->first_name }}</td>
                        </tr>
                        <tr>
                            <td>Last name</td>
                            <td>{{ $category->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Created at</td>
                            <td>{{ $category->created_at->format(__('global.date.datetime')) }}</td>
                        </tr>
                        <tr>
                            <td>Updated at</td>
                            <td>{{ $category->updated_at->format(__('global.date.datetime')) }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>
