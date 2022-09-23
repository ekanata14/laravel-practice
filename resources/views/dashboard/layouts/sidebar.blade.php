
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/dashboard/blog') ? 'active' : '' }}" href="/dashboard/blog">
                <span data-feather="file-text" class="align-text-bottom"></span>
                My Blogs
              </a>
          </ul>
          <hr>
          @can('admin')
          <h6 class="text-center">Administrator</h6>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/dashboard/categories') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                <span data-feather="grid" class="align-text-bottom"></span>
                Blog Categories
              </a>
            </li>
          </ul>
          @endcan
        </div>
      </nav>