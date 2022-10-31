<div class="modal fade text-left" id="modal-user-create" tabindex="-1" role="dialog"
     aria-labelledby="modal-user-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-user-create">{{ __('admin.pages.user.create') }} </h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form method="post" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>
                            Email :
                            <input type="text" placeholder="Email Address"
                                   class="form-control" name="email">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Username :
                            <input type="text" placeholder="Username"
                                   class="form-control" name="username">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            First name :
                            <input type="text" placeholder="First name"
                                   class="form-control" name="first_name">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Last name :
                            <input type="text" placeholder="Last name"
                                   class="form-control" name="last_name">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Password :
                            <input type="password" placeholder="Password"
                                   class="form-control" name="password">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            Password confirmation :
                            <input type="password" placeholder="Password"
                                   class="form-control" name="password_confirmation">
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1"
                            data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Create user</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
