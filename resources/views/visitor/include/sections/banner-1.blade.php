    {{-- BANNER START --}}
    <section id="banner" class="mt-5 mb-5">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="text-success">
                        <h1 class="fw-bolder font-satu"> {!! $settings->site_title !!} </h1>
                    </div>
                    <div>
                        <p class="text-muted " style="text-align: justify">
                            {!! $settings->welcome_text !!}
                        </p>
                        <a href="{{route('visitor.thePlants')}}" class="btn btn-success btn-lg">Explore the Plants <i class="fa-solid fa-arrow-right ms-2"></i>          </a>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{!! $settings->logo !!}" class="w-50"  alt="Logo" />
                </div>
            </div>
        </div>
   </section>
    {{-- BANNER END --}}
