
    {{-- FOOTER START --}}
    <footer class="bg-light">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 mt-4">
              <a class="text-decoration-none" href="#">
                      <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="ml-3" width="30" alt="Flowbite Logo" />
                       <span class="text-success fw-bold ">Traditional Medicinal Plants in Papua</span>
                  </a>
                  <p class="p-3" style="text-align: justify">
                      Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.
                  </p>

                  <div class="row mt-3">

                        @if($settings->instagram) 
                        <div class="col-1">
                            <a href="{{ $settings->instagram }}" target="_blank" class="text-decoration-none text-secondary">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>                        
                        @endif

                        @if($settings->linkedin) 
                        <div class="col-1">
                            <a href="{{ $settings->linkedin }}" target="_blank" class="text-decoration-none text-secondary">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>                        
                        @endif

                        @if($settings->facebook) 
                        <div class="col-1">
                            <a href="{{ $settings->facebook }}" target="_blank" class="text-decoration-none text-secondary">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>                        
                        @endif

                        @if($settings->twitter) 
                        <div class="col-1">
                            <a href="{{ $settings->twitter }}" target="_blank" class="text-decoration-none text-secondary">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>                        
                        @endif

                        @if($settings->youtube) 
                        <div class="col-1">
                            <a href="{{ $settings->youtube }}" target="_blank" class="text-decoration-none text-secondary">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>                        
                        @endif
                  </div>
            </div>
            <div class="col-xl-2 mt-4">
                  <p class="fw-bolder text-success">OUR TEAM</p>
                  <p> <a href="{{ url('/our-team/developer') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'developer') link-success fw-bold @else text-secondary @endif">Developer Team</a> </p>
                  <p> <a href="{{ url('/our-team/taxonomy') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'taxonomy') link-success fw-bold @else text-secondary @endif">Taxonomy Team</a> </p>
                  <p>  <a href="{{ url('/our-team/ethnobotany') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'ethnobotany') link-success fw-bold @else text-secondary @endif">Ethnobotany Team</a> </p>
                  <p> <a href="{{ url('/our-team/phytochemistry') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'phytochemistry') link-success fw-bold @else text-secondary @endif">Phytochemistry Team</a> </p>
            </div>
            <div class="col-xl-2 mt-4">
              <p class="fw-bolder text-success">WHAT WE DO</p>
              <p> <a href="{{ url('/what-we-do/discover') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'discover') link-success fw-bold @else text-secondary @endif">Discover</a> </p>
              <p> <a href="{{ url('/what-we-do/research') }}" class="text-decoration-none mb-3 @if(Request::segment(2) == 'research') link-success fw-bold @else text-secondary @endif">Research</a> </p>
            </div>
            <div class="col-xl-2 mt-4">
                  <p class="fw-bolder text-success">PRIVACY & POLICY</p>
                  <p> <a href="{{ url('/privacy') }}" class="text-decoration-none mb-3 @if(Request::segment(1) == 'privacy') link-success fw-bold @else text-secondary @endif">Privacy Policy</a> </p>
                  <p> <a href="{{ url('/terms') }}" class="text-decoration-none mb-3 @if(Request::segment(1) == 'terms') link-success fw-bold @else text-secondary @endif">Terms & Conditions</a> </p>
                  <hr class="border border-black opacity-75">
                  <div id="google_translate_element"></div>
            </div>
          </div>
          <div class="row text-secondary mt-4 pb-5 d-flex justify-content-between">
              <div class="col-md-10">
                  © 2023 <a class="text-decoration-none text-secondary "  href="">Traditional Medicinal Plants in Papua™. All Rights Reserved.</a>
              </div>
              <div class="col-md-1">
                  <a class="text-decoration-none text-secondary" href="{{route('login')}}" target="_blank"> <i class="fa-solid fa-sign-in"></i> Login</a>
              </div>
          </div>
        </div>
      </footer>
      {{-- FOOTER END --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
            pageLanguage: 'en', // default bahasa halaman (bisa 'en' kalau kontennya English)
            includedLanguages: 'en,id', // hanya Bahasa Inggris & Indonesia
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>
  </html>
