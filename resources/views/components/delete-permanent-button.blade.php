<form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.delete', $id) }}" method="POST">
@csrf
@method('DELETE')
    <button type="submit" class="btn btn-outline-danger border-0 rounded-0 show_confirm">
        <i class="fa-solid fa-times-square" data-toggle="tooltip" title='Delete'></i> Delete Permanently
    </button>
</form>