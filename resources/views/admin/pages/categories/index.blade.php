@extends('admin.layouts.main')

@section('title', __('admin.pages.categories.title'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/extensions/simple-datatables/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/pages/simple-datatables.css') }}"/>
@endpush

@section('content')

    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-category-create">
                    {{ __('admin.pages.categories.create') }}
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="categories">
                    <thead>
                    <tr>
                        <th>{{ __('admin.pages.categories.index.id') }}</th>
                        <th>{{ __('admin.pages.categories.index.title') }}</th>
                        <th>{{ __('admin.pages.categories.index.parent') }}</th>
                        <th>{{ __('admin.pages.categories.index.slug') }}</th>
                        <th>{{ __('admin.pages.categories.index.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr id="{{ $category->slug }}">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>@if(!empty($category->parent)) <a href="#{{ $category->parent->slug }}">{{ $category->parent->title }} ({{ $category->parent->id }})</a>@else{{ __('global.none') }}@endif</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#modal-category-{{ $category->id }}">
                                    <i data-feather="eye"></i>
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-category-delete-{{ $category->id }}">
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

    @foreach($categories as $category)
        @include('admin.modals.categories.show', compact('category'))
        @include('admin.modals.categories.delete', compact('category'))
    @endforeach

    @include('admin.modals.categories.create', compact('categories'))

@endsection

@push('scripts')
    <script src="{{ asset('admin/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable("#categories", {
            searchable: true,
            fixedHeight: false,
        });
    </script>
@endpush
