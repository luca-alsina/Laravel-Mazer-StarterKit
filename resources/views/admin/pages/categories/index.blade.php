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
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modal-category-update-{{ $category->id }}">
                                    <i data-feather="edit"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Scrollspy --}}
{{--
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('admin.pages.categories.list') }}</h4>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-4">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link" href="#item-1">Item 1</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                            </nav>
                            <a class="nav-link" href="#item-2">Item 2</a>
                            <a class="nav-link" href="#item-3">Item 3</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                            </nav>
                        </nav>
                    </div>
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example-2" tabindex="0">
                            <h4 id="item-1">Item 1</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h5 id="item-1-1">Item 1-1</h5>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h5 id="item-1-2">Item 1-2</h5>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="item-2">Item 2</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="item-3">Item 3</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h5 id="item-3-1">Item 3-1</h5>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h5 id="item-3-2">Item 3-2</h5>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
--}}

        {{-- Nav Pills --}}
        {{--<div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-3">
                        <h5 class="align-center text-center mb-2">{{ __('admin.pages.categories.title') }}</h5>
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            @foreach($hierarchy as $category)
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-xl nav-link mb-1" id="category-{{ $category['slug'] }}-{{ $category['id'] }}-tab" data-bs-toggle="tab" data-bs-target="#category-{{ $category['slug'] }}-{{ $category['id'] }}" type="button" role="tab">{{ $category['title'] }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-1 d-flex vh-auto">
                        <div class="vr mt-6"> >>>>>> </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="tab-categories-1">
                            @foreach($hierarchy as $category)
                                <div class="tab-pane fade" id="category-{{ $category['slug'] }}-{{ $category['id'] }}" role="tabpanel" aria-labelledby="category-{{ $category['slug'] }}-{{ $category['id'] }}-tab">
                                    <div class="row">
                                        <div class="row">
                                            <h5>{{ __('admin.pages.categories.title') }} "{{ $category['title'] }}"</h5>
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                                    data-bs-target="#modal-category-{{ $category['id'] }}">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modal-category-delete-{{ $category['id'] }}">
                                                <i data-feather="trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modal-category-update-{{ $category['id'] }}">
                                                <i data-feather="edit"></i>
                                            </button>
                                        </div>

                                        @if(!empty($category['children']))
                                            @foreach($category['children'] as $category2)
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-xl nav-link mb-1" id="category-{{ $category2['slug'] }}-{{ $category2['id'] }}-tab" data-bs-toggle="tab" data-bs-target="#category-{{ $category2['slug'] }}-{{ $category2['id'] }}" type="button" role="tab">{{ $category2['title'] }}</button>
                                                </li>
                                            @endforeach
                                        @else

                                        @endif

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>--}}

    </section>

@endsection

@section('modals')

    @foreach($categories as $category)
        @include('admin.modals.categories.show', compact('category'))
        @include('admin.modals.categories.update', compact('category'))
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
