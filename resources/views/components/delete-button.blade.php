<form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-light rounded-0">
        <i class="fa-solid fa-trash"></i> Delete
    </button>
</form>