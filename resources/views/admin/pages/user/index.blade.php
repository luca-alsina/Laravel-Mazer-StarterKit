@extends('admin.layouts.main')

@section('title', __('admin.pages.user.title'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/simple-datatables.css') }}" />
@endpush

@section('content')

    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="users">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>First name</th>
                        <th>Last name</th>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

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
