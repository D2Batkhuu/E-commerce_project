<head>
    <title>Organic - Grocery Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="mobile-web-app-capable" content="yes">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
@include('userpage.svg')
  </head>
  <header>
    <div class="container-fluid">
      <div class="row py-3 border-bottom">
        
        <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
          <div class="d-flex align-items-center my-3 my-sm-0">
            <a href="{{route('userpage.index')}}">
              <img src="{{asset('images/logo.svg')}}" alt="logo" class="img-fluid">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#menu"></use></svg>
          </button>
        </div>
        
        <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
          <div class="search-bar row bg-light p-2 rounded-4">
            <div class="col-md-4 d-none d-md-block">
              <select class="form-select border-0 bg-transparent">
                <option>All Categories</option>
                <option>Groceries</option>
                <option>Drinks</option>
                <option>Chocolates</option>
              </select>
            </div>
            <div class="col-11 col-md-7">
              <form id="search-form" class="text-center" action="{{route('userpage.index')}}" method="post">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products">
              </form>
            </div>
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/></svg>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
            <li class="nav-item active">
              <a href="{{route( 'userpage.index' )}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                <li><a href="index.html" class="dropdown-item">About Us </a></li>
                <li><a href="#" class="dropdown-item">Shop </a></li>
                <li><a href="index.html" class="dropdown-item">Single Product </a></li>
                <li><a href="index.html" class="dropdown-item">Cart </a></li>
                <li><a href="index.html" class="dropdown-item">Checkout </a></li>
                <li><a href="index.html" class="dropdown-item">Blog </a></li>
                <li><a href="index.html" class="dropdown-item">Single Post </a></li>
                <li><a href="index.html" class="dropdown-item">Styles </a></li>
                <li><a href="index.html" class="dropdown-item">Contact </a></li>
                <li><a href="index.html" class="dropdown-item">Thank You </a></li>
                <li><a href="index.html" class="dropdown-item">My Account </a></li>
                <li><a href="index.html" class="dropdown-item">404 Error </a></li>
              </ul>
            </li>
          </ul>
        </div>
        
        <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end ">
          <ul class="d-flex justify-content-end list-unstyled m-2 p-8">
              <li>
                  <a href="{{route( 'userpage.create' )}}" class="p-4 mx-1">
                    <svg width="36" height="36"><use xlink:href="#plus"></use></svg>
                    {{-- Add Product --}}
                  </a>
                </li>
            <li>
              <a href="{{route('userpage.show')}}" class="p-4 mx-1">
                <svg width="36" height="36"><use xlink:href="#user"></use></svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-4 mx-1">
                <svg width="36" height="36"><use xlink:href="#wishlist"></use></svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-4 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                <svg width="36" height="36"><use xlink:href="#shopping-bag"></use></svg>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </header>