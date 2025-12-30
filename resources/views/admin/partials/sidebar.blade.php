<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; min-height: 100vh;">
    <a href="#" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto link-dark text-decoration-none m">
        <span class="fs-4 fw-bold">Admin Panel</span>
    </a>
    <hr class="mt-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link @yield('dashboard')">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('admin.user.index')}}" class="nav-link @yield('user')">
                Users
            </a>
        </li>
        <li>
            <a href="{{route('admin.post.index')}}" class="nav-link @yield('post')">
                posts
            </a>
        </li>
        <li>
            <a href="{{route('admin.roles.index')}}" class="nav-link link-dark">
                Assign Role
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
             permissions
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                Settings
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown">
            <img src="https://via.placeholder.com/32" alt="User" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>

        </ul>
        @livewire('admin.auth.logout')


    </div>
</div>
