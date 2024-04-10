<form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.delete', $id) }}" method="POST">
@csrf
@method('DELETE')
    <button type="submit" class="btn btn-sm btn-outline-danger rounded-0 mx-1 show_confirm">
        <i class="fa-solid fa-times-square" data-toggle="tooltip" title='Delete'></i> Delete Permanently
    </button>
</form>