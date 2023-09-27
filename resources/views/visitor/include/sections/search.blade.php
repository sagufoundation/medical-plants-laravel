<section>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">

                <form action="{{ url('the-plants') }}" method="get">

                    <div class="input-group">
                        <input type="search" name="s" class="form-control p-4" placeholder="Search plant name" value="{{ request()->s ?? '' }}">
                        <button class="btn btn-success fw-bold px-5" type="submit" id="button-addon2">
                            <i class="fa-solid fa-search me-2"></i> Search
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
