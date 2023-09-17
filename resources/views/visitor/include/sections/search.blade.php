<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <form action="{{ url('/the-plants') }}">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Write the keywords here" aria-label="Write the keywords here" aria-describedby="button-addon2">
                        <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                    </div>

                    <div class="d-flex justify-content-start gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="plantName" checked>
                            <label class="form-check-label" for="plantName">
                              Plant Name
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="contributorName">
                            <label class="form-check-label" for="contributorName">
                              Contributor Name
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="tribeName">
                            <label class="form-check-label" for="tribeName">
                              Tribe Name
                            </label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>