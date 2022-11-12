<div class="modal fade" id="modal-category-delete-{{ $category->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Delete {{ $category->title }} ({{ $category->id }})</h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the category {{ $category->title }} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <form method="post" action="{{ route('admin.categories.destroy', [ $category->id ]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Delete</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
