<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>
    <a class="navbar  d-md-none" href="{{route('home')}}">
       <h2>HOME</h2>
    </a>
    <a class="navbar-brand d-md-down-none" href="{{route('home')}}">
        <h2>HOME</h2>
    </a>
    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none mr-auto">
       <span class="fa fa-bars"></span>
    </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
        </li>
        <li class="nav-item d-md-down-none">
            <a href="/admin/massage">
                <i class="fa fa-envelope-open"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
        </li>
        <a href="{{route('createPost')}}" class="btn btn-primary">
            Create Post
        </a>|
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('admin/assert/imgs/avatar-1.png')}}" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>
                <a href="{{route('massage')}}" class="dropdown-item">
                    <i class="fa fa-envelope"></i> Messages
                </a>             
                <a href="{{route('userProfiles')}}" class="dropdown-item">
                    <i class="fa fa-wrench"></i> Settings
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                     <i class="fa fa-lock"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
