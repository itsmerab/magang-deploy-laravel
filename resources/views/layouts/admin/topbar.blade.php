<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
      <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
      <ul class="navbar-nav navbar-align">
        <li class="nav-item dropdown">
          <a class="nav-icon dropdown-toggle d-inline-block d-sm-none"
            href="#"
            data-bs-toggle="dropdown">
            <i class="align-middle"
              data-feather="settings"></i>
          </a>

          <a class="nav-link dropdown-toggle d-none d-sm-inline-flex align-items-center"
            href="#"
            data-bs-toggle="dropdown">
            <div class="d-inline-flex align-items-center">
              <img src="https://hostedboringavatars.vercel.app/api/beam?size=64"
                class="avatar img-fluid me-1 rounded"
                />
              <div class="mx-1">
                <div class="text-dark fw-bold">{{ Auth::user()->name }}</div>
                <div class="text-muted" style="font-size: 0.65rem">{{ Auth::user()->email }}</div>
              </div>  
              {{-- <div class="mx-1">
                <div class="text-dark fw-bold">Angga Nugroho Tri Suryo</div>
                <div class="text-muted" style="font-size: 0.65rem">Super Admin</div>
              </div> --}}
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end me-3 me-sm-0">
            <a class="dropdown-item" href="#">
              <i class="me-1 align-middle"
                data-feather="settings"></i>
              <span>Pengaturan</span>
            </a>
            <div class="dropdown-divider"></div>
            <form action="{{ url('logout') }}"
              method="post">
              @csrf
              @method('PUT')
              <button class="dropdown-item">
              Log out
              </button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>