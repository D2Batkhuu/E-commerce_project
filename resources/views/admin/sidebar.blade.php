<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Batkhuu</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/')}}"> <i class="icon-home"></i>Home </a></li>
                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category     </a> </li>
                    <li>
                      <a href="{{url('/posts')}}"><i class="icon icon-contract"></i>Posts</a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add product</a></li>
                    <li><a href="{{url('view_product')}}">View product</a></li>
                    
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
               
        </ul>
      </nav>