 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#plants" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-leaf"></i></i><span>Plants</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="plants" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.plant.publish')}}">
              <i class="bi bi-circle"></i><span>Published</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.plant.review')}}">
              <i class="bi bi-circle"></i><span>Reviewed</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.plant.draft')}}">
              <i class="bi bi-circle"></i><span>Drafted</span>
            </a>
          </li>
        </ul>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#locations" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-map"></i></i><span>Locations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="locations" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.location')}}">
              <i class="bi bi-circle"></i><span>Published</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.location.review')}}">
              <i class="bi bi-circle"></i><span>Reviewed</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.location.draft')}}">
              <i class="bi bi-circle"></i><span>Drafted</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.icon')}}">
              <i class="bi bi-circle"></i><span>Icons</span>
            </a>
          </li>
        </ul>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contributor" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i></i><span>Contributors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contributor" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.contributor.publish')}}">
                      <i class="bi bi-circle"></i><span>Published</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('admin.contributor.review')}}">
                      <i class="bi bi-circle"></i><span>Reviewed</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('admin.contributor.draft')}}">
                      <i class="bi bi-circle"></i><span>Drafted</span>
                    </a>
                  </li>
            </ul>




      <hr>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-gear-fill"></i>
          <span>Settings</span>
        </a>
      </li><!-- End Profile Page Nav -->



  </aside><!-- End Sidebar-->
