<ul class="sidebar-menu">
  <li class="menu-header">Main</li>
  <li class="dropdown active">
    <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
  <li class="menu-header">Widgets</li>
  <li>
    <a href="{{ route('admin.phones.index') }}" class="menu-toggle nav-link"><i data-feather="phone"></i><span>
        Phones</span></a>
  </li>
  <li>
    <a href="{{ route('admin.users.index') }}" class="menu-toggle nav-link"><i data-feather="users"></i><span>
        Users</span></a>
  </li>
  <li>
    <a href="{{ route('admin.categories.index') }}" class="menu-toggle nav-link"><i data-feather="briefcase"></i><span>
        Categories</span></a>
  </li>
  <li>
    <a href="{{ route('admin.posts.index') }}" class="menu-toggle nav-link"><i data-feather="align-justify"></i><span>
        Posts</span></a>
  </li>
  <li>
    <a href="{{ route('admin.service.index') }}" class="menu-toggle nav-link"><i data-feather="compass"></i><span>
        Services</span></a>
  </li>
  <li>
    <a href="{{ route('admin.lessons.index') }}" class="menu-toggle nav-link"><i data-feather="compass"></i><span>
        Lessons</span></a>
  </li>
</ul>
