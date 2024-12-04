<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
        </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="/home" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
         
            <!-- Log out               -->
            <!-- <div class="list-inline-item logout"><a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div> -->
           
           <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
              &nbsp;

            </ul>
            <ul class="navbar navbar-nav navbar-right">

              {{-- Authentication Links --}}
              @if (Auth::guest())
              <li><a href="{{route('login')}}">login</a></li>
              <li><a href="{{route('register')}}">register</a></li>
              @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>

              </li>
              @endif
            </ul>
           </div>
            <div class="list-inline-item logout">
            {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <i i class="icon-logout"></i>
                    <input type="submit" value="Logout" i class="icon-logout">
                </form> --}}
                <a href="{{ route('dashboard') }}" class="btn btn-link text-primary" style="border: none; background: none; padding: 0;">
                  <i class="fa fa-dashboard"></i> Dashboard
              </a>
                <form method="POST" action="{{ route('logout')}}" style="display: inline;">
                  @csrf
                  <button type="submit" class="btn btn-link text-danger" style="border: none; background: none; padding: 0;">
                      <i class="icon-logout"></i> Logout</button>
              </form>
        </div>
        </div>  
      </nav>
    </header>