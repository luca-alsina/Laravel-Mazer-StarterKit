<div class="modal fade text-left w-100" id="modal-category-create" tabindex="-1" role="dialog"
     aria-labelledby="modal-user-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-user-create">{{ __('admin.pages.categories.create') }} </h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form method="post" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">{{ __('admin.pages.categories.index.name') }}</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('admin.pages.categories.index.name') }}">
                    </div>
{{--                    <div class="form-group">
                        <label for="slug">{{ __('admin.pages.categories.index.slug') }}</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="{{ __('admin.pages.categories.index.slug') }}">
                    </div>--}}
                    <div class="form-group">
                        <label for="parent_id">{{ __('global.none') }}</label>
                        <select class="form-control form-select" name="parent_id" id="parent_id">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('admin.pages.categories.index.description') }}</label>
                        <textarea rows="5" class="form-control" name="description" id="description" placeholder="{{ __('admin.pages.categories.index.description') }}"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">{{ __('global.actions.close') }}</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1"
                            data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">{{ __('admin.pages.categories.create') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
