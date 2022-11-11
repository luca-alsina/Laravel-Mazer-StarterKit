<div class="modal fade" id="modal-user-{{ $user->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">{{ $user->first_name }} {{ $user->last_name }} ({{ $user->username }})</h5>
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
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Is admin</td>
                            <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                        </tr>
                        <tr>
                            <td>First name</td>
                            <td>{{ $user->first_name }}</td>
                        </tr>
                        <tr>
                            <td>Last name</td>
                            <td>{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Created at</td>
                            <td>{{ $user->created_at->format(__('global.date.datetime')) }}</td>
                        </tr>
                        <tr>
                            <td>Updated at</td>
                            <td>{{ $user->updated_at->format(__('global.date.datetime')) }}</td>
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
