<nav class="navbar navbar-expand-lg navbar-dark smart-scroll">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset ('static/image/Logo2x.png')}}" width="60" height="60" alt="logo of unnoman.com">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button> 

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="text-white nav-link  {{Route::currentRouteName()=='home' ? 'active1':'nav-link1'}}"  href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item ">
                <a class="text-white  nav-link {{Route::currentRouteName()=='story' ? 'active1':'nav-link1'}}" href="{{route('story')}}">My Story</a>
                </li>
            <li class="nav-item ">
              <a class=" nav-link   disabled"  href="#">Projects</a>
              </li>
              
              
              <li class="nav-item">
                <a class="text-white nav-link {{Route::currentRouteName()=='resource' ? 'active1':'nav-link1'}}" href="{{route('resource')}}">Resource</a>
                </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              <li class="nav-item">
                <a class="text-white  nav-link nav-link1" target="_blank" href="static/Abdullah-Un-Noman's-CV.pdf">Get Resume</a>
                </li>
                <li class="nav-item">
                <a href="{{route('contact')}}" class="btn button_slide slide_right">LET'S TALK</a>
                </li>
          </ul>
      </div>
  </div>
</nav>