<div class="sidebar">
  <nav class="sidebar-nav">
      <ul class="nav">
          <li class="nav-title">Admin Dashboard</li>
          <li class="nav-item">
          <a href="{{route('AdminDashboard')}}" class="nav-link {{Route::currentRouteName()=='AdminDashboard' ? 'active':''}}">
              <i class="icon icon-speedometer"></i> Dashboard
          </a>
          </li>
          <li class="nav-item nav-dropdown">
              <a href="{{route('posts')}}" class="nav-link {{Route::currentRouteName()=='posts' ? 'active':''}} ">
              <i class="icon icon-book-open"></i> Posts View     
              </a>
         </li>
         <li class="nav-item nav-dropdown">
              <a href="{{route('feedbacks')}}" class="nav-link {{Route::currentRouteName()=='feedbacks' ? 'active':''}} ">
              <i class="icon icon-book-open"></i> Feedbacks View     
              </a>
         </li>
         <li class="nav-item nav-dropdown">
              <a href="{{route('homePostIndex')}}" class="nav-link {{Route::currentRouteName()=='homePostIndex' ? 'active':''}} ">
              <i class="icon icon-book-open"></i> Home Post Edit 
              </a>
          </li>
          <li class="nav-item nav-dropdown">
            <a href="{{route('mystoryDashboard')}}" class="nav-link {{Route::currentRouteName()=='mystoryDashboard' ? 'active':''}} ">
            <i class="icon icon-book-close"></i> MyStory Dashboard
            </a>
        </li>
       </ul>
  </nav>
</div>