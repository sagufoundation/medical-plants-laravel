<header>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{ route('visitor.home') }}">
        <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="ml-3" width="30" alt="Flowbite Logo" />
        <span class="text-success fw-bold">Traditional Medicinal Plants in Papua</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
          <li class="nav-item">
            <a class="nav-link me-lg-3 @if(Request::segment(1)=='home' || Request::segment(1)=='') active fw-bold link-success @endif" href="{{ url('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3 @if(Request::segment(1)=='overview') active fw-bold link-success @endif" href="{{ url('overview') }}">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3 @if(Request::segment(1)=='our-team') active fw-bold link-success @endif" href="{{ url('our-team') }}">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3 @if(Request::segment(1)=='plants') active fw-bold link-success @endif" href="{{ url('plants') }}">Plants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3 @if(Request::segment(1)=='how-to-contribute') active fw-bold link-success @endif" href="{{ url('how-to-contribute') }}">How To Contribute</a>
          </li>

          <!-- Support Us Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle me-lg-3 @if(Request::segment(1)=='internship' || Request::segment(1)=='donation') active fw-bold link-success @endif"
              href="#" id="supportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Support Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="supportDropdown">
              <li><a class="dropdown-item" href="{{ url('internship') }}">Internship With Us</a></li>
              <li><a class="dropdown-item" href="{{ url('donation') }}">Give Donation</a></li>
            </ul>
          </li>
        </ul>

        {{-- <a href="#" class="btn btn-success rounded-pill px-3 mb-2 mb-lg-0">
          <span class="d-flex align-items-center text-white">
            <i class="fa-solid fa-paper-plane me-2"></i> <!-- use flag emoji to switch between English (EN) and Indonesia (ID)-->
            <span class="small">EN</span>
          </span>
        </a> --}}

        <div id="google_translate_element"></div>

      </div>
    </div>
  </nav>
</header>
