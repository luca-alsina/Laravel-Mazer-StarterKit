@extends('admin.layouts.main')

@section('title', __('admin.pages.user.title'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/extensions/simple-datatables/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/pages/simple-datatables.css') }}"/>
@endpush

@section('content')

    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modal-user-create">
                    {{ __('admin.pages.user.create') }}
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped dataTable-table" id="users">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#modal-user-{{ $user->id }}">
                                    <i data-feather="eye"></i>
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-user-delete-{{ $user->id }}">
                                    <i data-feather="trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

@endsection

@section('modals')

    @include('admin.modals.users.create')

    @foreach($users as $user)
        @include('admin.modals.users.show', compact('user'))
        @include('admin.modals.users.delete', compact('user'))
    @endforeach
@endsection

@push('scripts')
    <script src="{{ asset('admin/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable("#users", {
            searchable: true,
            fixedHeight: true
        });
    </script>
@endpush
