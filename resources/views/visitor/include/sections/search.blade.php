<section>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">

                <form action="{{ url('plants') }}" method="get">

                    <div class="input-group">
                        <input type="search" name="s" class="form-control p-4" placeholder="Search plant name" value="{{ request()->s ?? '' }}">
                        <button class="btn btn-success fw-bold px-5" type="submit" id="button-addon2">
                            <i class="fa-solid fa-search me-2"></i> Search
                        </button>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="parameter" value="latin_name" id="latin_name" @if(request()->parameter != null AND request()->parameter === 'latin_name') checked @endif>
                            <label class="form-check-label" for="latin_name">
                              Latin Name
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="parameter"  value="local_name" id="local_name" @if(request()->parameter != null AND request()->parameter === 'local_name') checked @endif>
                            <label class="form-check-label" for="local_name">
                              Local Name
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="parameter"  value="treatments" id="treatments" @if(request()->parameter != null AND request()->parameter === 'treatments') checked @endif>
                            <label class="form-check-label" for="treatments">
                              Treatment
                            </label>
                          </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
