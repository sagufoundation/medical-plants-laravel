<section>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('visitor.thePlants') }}" method="GET">

                    <div class="input-group mb-3">
                        <input type="text" name="s" class="form-control form-control-lg" placeholder="Write the keywords here" aria-label="Write the keywords here" aria-describedby="button-addon2">
                        <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                    </div>

                    <div class="d-flex justify-content-start gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="s" id="local_name" checked>
                            <label class="form-check-label" for="local_name">
                                Plant Name
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="s" id="contributorName">
                            <label class="form-check-label" for="contributorName">
                                Contributor Name
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="s" id="taxonomists">
                            <label class="form-check-label" for="taxonomists">
                                Province
                            </label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
