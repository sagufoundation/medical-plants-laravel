<form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.restore', $id) }}" method="POST">
@csrf
    <button type="submit" class="btn btn-success border-0 rounded-0">
        <i class="fa-solid fa-reply"></i> Restore
    </button>
</form>