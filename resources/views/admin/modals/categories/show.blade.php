<div class="modal fade" id="modal-category-{{ $category->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">{{ $category->title }} ({{ $category->id }})</h5>
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
                            <td>{{ __('admin.pages.categories.index.parent') }}</td>
                            <td>@if(!empty($category->parent)) {{ $category->parent->title }} ({{ $category->parent->id }})@else {{ __('global.none') }}@endif</td>
                        </tr>
                        <tr>
                            <td>{{ __('admin.pages.categories.index.slug') }}</td>
                            <td>{{ $category->slug }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('admin.pages.categories.index.description') }}</td>
                            <td>{{ $category->description }}</td>
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
