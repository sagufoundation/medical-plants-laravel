<form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.restore', $id) }}" method="POST">
@csrf
    <button type="submit" class="btn btn-sm btn-outline-success rounded-0 mx-1">
        <i class="fa-solid fa-reply"></i> Restore
    </button>
</form>