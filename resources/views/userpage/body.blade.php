<body>

   @include('userpage.svg')

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart">
      <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Growers cider</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Fresh grapes</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Heinz tomato ketchup</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>
  
          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </div>
      </div>
    </div>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">

      <div class="offcanvas-header justify-content-between">
        <h4 class="fw-normal text-uppercase fs-6">Menu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
    
        <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
          <li class="nav-item border-dashed active">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#fruits"></use></svg>
              <span>Fruits and vegetables</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#dairy"></use></svg>
              <span>Dairy and Eggs</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#meat"></use></svg>
              <span>Meat and Poultry</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#seafood"></use></svg>
              <span>Seafood</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#bakery"></use></svg>
              <span>Bakery and Bread</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#canned"></use></svg>
              <span>Canned Goods</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#frozen"></use></svg>
              <span>Frozen Foods</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#pasta"></use></svg>
              <span>Pasta and Rice</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#breakfast"></use></svg>
              <span>Breakfast Foods</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#snacks"></use></svg>
              <span>Snacks and Chips</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <button class="btn btn-toggle dropdown-toggle position-relative w-100 d-flex justify-content-between align-items-center text-dark p-2" data-bs-toggle="collapse" data-bs-target="#beverages-collapse" aria-expanded="false">
              <div class="d-flex gap-3">
                <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#beverages"></use></svg>
                <span>Beverages</span>
              </div>
            </button>
            <div class="collapse" id="beverages-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal ps-5 pb-1">
                <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Water</a></li>
                <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Juice</a></li>
                <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Soda</a></li>
                <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Tea</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#spices"></use></svg>
              <span>Spices and Seasonings</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#baby"></use></svg>
              <span>Baby Food and Formula</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#health"></use></svg>
              <span>Health and Wellness</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#household"></use></svg>
              <span>Household Supplies</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#personal"></use></svg>
              <span>Personal Care</span>
            </a>
          </li>
          <li class="nav-item border-dashed">
            <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#pet"></use></svg>
              <span>Pet Food and Supplies</span>
            </a>
          </li>
        </ul>
      
      </div>

    </div>

   
    
    <section style="background-image: url('{{ asset('images/banner-1.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

      <div class="container-lg">
        <div class="row">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Organic</span> Foods at your <span class="fw-bold">Doorsteps</span></h2>
            <p class="fs-4">Dignissim massa diam elementum.</p>
            <div class="d-flex gap-3">
              <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Start Shopping</a>
              <a href="{{'login'}}" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
            </div>
            <div class="row my-5">
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">14k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Product Varieties</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">50k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Happy Customers</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">10+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Store Locations</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
          <div class="col">
            <div class="card border-0 bg-primary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#fresh"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Fresh from farm</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#organic"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">100% Organic</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-danger rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#delivery"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Free delivery</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </section>

    <section class="py-5 overflow-hidden">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between mb-5">
              <h2 class="section-title">Products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                  <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="category-carousel swiper">
              <div class="swiper-wrapper">

                @foreach($products as $product)
                                      <a href="{{ route('userpage.show', ['id' => $product->category->id]) }}" class="nav-link swiper-slide text-center">
                                        <img src="{{ asset('products/'.$product->image) }}" class="rounded-circle" alt="Category Thumbnail" style="width: 161px; height: 160px;">

                                          {{-- <h4 class="fs-6 mt-3 fw-normal category-title">{{ $product->title }}</h4> --}}
                                          <p class="fs-6 mt-3 fw-normal category-title">{{ $product->category ? $product->category->category_name : 'No Category' }}</p>
                                      </a>
                                  @endforeach
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-1.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-2.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-3.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-4.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-5.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-6.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-7.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-8.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-1.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-1.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-1.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="{{asset('images/category-thumb-1.jpg')}}" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
                </a>
                                  
                                  {{-- @foreach($products as $product)
                                      <a href="{{ route('userpage.show', ['id' => $product->category->id]) }}" class="nav-link swiper-slide text-center">
                                        <img src="{{ asset('products/'.$product->image) }}" class="rounded-circle" alt="Category Thumbnail" style="width: 160px; height: 160px;">

                                          <h4 class="fs-6 mt-3 fw-normal category-title">{{ $product->title }}</h4>
                                          <p class="fs-6">{{ $product->category ? $product->category->category_name : 'No Category' }}</p>
                                      </a>
                                  @endforeach --}}
               
              
              

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="pb-5">
      <div class="container-lg">

        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between my-4">
              
              <h2 class="section-title">Best selling products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary rounded-1">View All</a>
              </div>
            </div>
            
          </div>
        </div>
        

        















        
              
              
              
              {{-- starts here --}}
              
              
              </div>

              
            </div>
            <!-- / product-grid -->


          </div>
        </div>
      </div>
    </section>

    <section class="py-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">

            <div class="banner-blocks">
            

              
              <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
                <div class="banner-content p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Items on SALE</h3>
                    <p>Discounts up to 30%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>
              
              <div class="banner-ad bg-success-subtle block-2" style="background:url('images/banner-ad-2.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Combo offers</h3>
                    <p>Discounts up to 50%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

              <div class="banner-ad bg-danger block-3" style="background:url('images/banner-ad-3.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Discount Coupons</h3>
                    <p>Discounts up to 40%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- / Banner Blocks -->
              
          </div>
        </div>
      </div>
    </section>

    <section id="featured-products" class="products-carousel">
      <div class="container-lg overflow-hidden py-5">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between my-4">
              
              <h2 class="section-title">Featured products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                  <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                </div>  
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="swiper">
              <div class="swiper-wrapper">
                              
                
                @foreach($products as $product)
<div class="product-item swiper-slide">
  <figure>
    <a href="{{ route('userpage.show', ['id' => $product->category->id]) }}" title="{{ $product->title }}">
      <img src="{{ asset('products/'.$product->image) }}" alt="{{ $product->title }}" class="tab-image">
    </a>
  </figure>
  <div class="d-flex flex-column text-center">
    <!-- Product Title -->
    <h3 class="fs-6 fw-normal">{{ $product->title }}</h3>

    <!-- Rating -->
    <div>
      <span class="rating">
        <!-- Example SVG for stars -->
        @for($i = 1; $i <= 5; $i++)
          <svg width="18" height="18" class="{{ $i <= $product->rating ? 'text-warning' : 'text-secondary' }}">
            <use xlink:href="#star"></use>
          </svg>
        @endfor
      </span>
      <span>({{ $product->reviews_count }})</span>
    </div>

    <!-- Pricing -->
    <div class="d-flex justify-content-center align-items-center gap-2">
      @if($product->original_price)
      <del>${{ number_format($product->original_price, 2) }}</del>
      @endif
      <span class="text-dark fw-semibold">${{ number_format($product->price, 2) }}</span>
      @if($product->discount)
      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
        {{ $product->discount }}% OFF
      </span>
      @endif
    </div>

    <!-- Buttons -->
    <div class="button-area p-3 pt-0">
      <div class="row g-1 mt-2">
        <div class="col-3">
          <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1" min="1">
        </div>
        <div class="col-7">
          <a href="#" class="btn btn-primary w-100 rounded-1 p-1 d-flex justify-content-center align-items-center fs-7 btn-cart">
            <svg width="18" height="18">
              <use xlink:href="#cart"></use>
            </svg>
            Add to Cart
          </a>
        </div>
        <div class="col-2">
          <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
            <svg width="18" height="18">
              <use xlink:href="#heart"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach









                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-10.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-1 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-11.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-12.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-14.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Fresh Green Celery</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-15.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sandwich Bread</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-16.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-17.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-18.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                  
              </div>
            </div>
            <!-- / products-carousel -->

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-lg">

        <div class="bg-secondary text-light py-5 my-5" style="background: url('images/banner-newsletter.jpg') no-repeat; background-size: cover;">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-5 p-3">
                <div class="section-header">
                  <h2 class="section-title display-5 text-light">Get 25% Discount on your first purchase</h2>
                </div>
                <p>Just Sign Up & Register it now to become member.</p>
              </div>
              <div class="col-md-5 p-3">
                <form>
                  <div class="mb-3">
                    <label for="name" class="form-label d-none">Name</label>
                    <input type="text"
                      class="form-control form-control-md rounded-0" name="name" id="name" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Email</label>
                    <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email Address">
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-md rounded-0">Submit</button>
                  </div>
                </form>
                
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
    </section>

    <section id="popular-products" class="products-carousel">
      <div class="container-lg overflow-hidden py-5">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex justify-content-between my-4">
              
              <h2 class="section-title">Most popular products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                  <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="swiper">
              <div class="swiper-wrapper">
                                

                @foreach($products as $product)
<div class="product-item swiper-slide">
  <figure>
    <a href="{{ route('userpage.show', ['id' => $product->category->id]) }}" title="{{ $product->title }}">
      <img src="{{ asset('products/'.$product->image) }}" alt="{{ $product->title }}" class="tab-image">
    </a>
  </figure>
  <div class="d-flex flex-column text-center">
    <!-- Product Title -->
    <h3 class="fs-6 fw-normal">{{ $product->title }}</h3>

    <!-- Rating -->
    <div>
      <span class="rating">
        <!-- Example SVG for stars -->
        @for($i = 1; $i <= 5; $i++)
          <svg width="18" height="18" class="{{ $i <= $product->rating ? 'text-warning' : 'text-secondary' }}">
            <use xlink:href="#star"></use>
          </svg>
        @endfor
      </span>
      <span>({{ $product->reviews_count }})</span>
    </div>

    <!-- Pricing -->
    <div class="d-flex justify-content-center align-items-center gap-2">
      @if($product->original_price)
      <del>${{ number_format($product->original_price, 2) }}</del>
      @endif
      <span class="text-dark fw-semibold">${{ number_format($product->price, 2) }}</span>
      @if($product->discount)
      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
        {{ $product->discount }}% OFF
      </span>
      @endif
    </div>

    <!-- Buttons -->
    <div class="button-area p-3 pt-0">
      <div class="row g-1 mt-2">
        <div class="col-3">
          <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1" min="1">
        </div>
        <div class="col-7">
          <a href="#" class="btn btn-primary w-100 rounded-1 p-1 d-flex justify-content-center align-items-center fs-7 btn-cart">
            <svg width="18" height="18">
              <use xlink:href="#cart"></use>
            </svg>
            Add to Cart
          </a>
        </div>
        <div class="col-2">
          <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
            <svg width="18" height="18">
              <use xlink:href="#heart"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach



                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-15.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sandwich Bread</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-16.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-17.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-18.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-19.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-10.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-11.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-12.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                  
              </div>
            </div>
            <!-- / products-carousel -->

          </div>
        </div>
      </div>
    </section>

    <section id="latest-products" class="products-carousel">
      <div class="container-lg overflow-hidden pb-5">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex justify-content-between my-4">
              
              <h2 class="section-title">Just arrived</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                  <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                </div>  
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="swiper">
              <div class="swiper-wrapper">
                

                @foreach($products as $product)
<div class="product-item swiper-slide">
  <figure>
    <a href="{{ route('userpage.show', ['id' => $product->category->id]) }}" title="{{ $product->title }}">
      <img src="{{ asset('products/'.$product->image) }}" alt="{{ $product->title }}" class="tab-image">
    </a>
  </figure>
  <div class="d-flex flex-column text-center">
    <!-- Product Title -->
    <h3 class="fs-6 fw-normal">{{ $product->title }}</h3>

    <!-- Rating -->
    <div>
      <span class="rating">
        <!-- Example SVG for stars -->
        @for($i = 1; $i <= 5; $i++)
          <svg width="18" height="18" class="{{ $i <= $product->rating ? 'text-warning' : 'text-secondary' }}">
            <use xlink:href="#star"></use>
          </svg>
        @endfor
      </span>
      <span>({{ $product->reviews_count }})</span>
    </div>

    <!-- Pricing -->
    <div class="d-flex justify-content-center align-items-center gap-2">
      @if($product->original_price)
      <del>${{ number_format($product->original_price, 2) }}</del>
      @endif
      <span class="text-dark fw-semibold">${{ number_format($product->price, 2) }}</span>
      @if($product->discount)
      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
        {{ $product->discount }}% OFF
      </span>
      @endif
    </div>

    <!-- Buttons -->
    <div class="button-area p-3 pt-0">
      <div class="row g-1 mt-2">
        <div class="col-3">
          <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1" min="1">
        </div>
        <div class="col-7">
          <a href="#" class="btn btn-primary w-100 rounded-1 p-1 d-flex justify-content-center align-items-center fs-7 btn-cart">
            <svg width="18" height="18">
              <use xlink:href="#cart"></use>
            </svg>
            Add to Cart
          </a>
        </div>
        <div class="col-2">
          <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
            <svg width="18" height="18">
              <use xlink:href="#heart"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach




                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-20.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-1.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-21.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-22.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-23.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-10.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-11.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-12.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="index.html" title="Product Title">
                      <img src="{{asset('images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                    <div>
                      <span class="rating">
                       
                       
                       
                       
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary w-100 rounded-1 p-2 d-flex justify-content-center align-items-center fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
            </div>
            <!-- / products-carousel -->

          </div>
        </div>
      </div>
    </section>

    <section id="latest-blog" class="pb-4">
      <div class="container-lg">
        <div class="row">
          <div class="section-header d-flex align-items-center justify-content-between my-4">
            <h2 class="section-title">Our Recent Blog</h2>
            <a href="#" class="btn btn-primary">View All</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="{{asset('images/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>22 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>tips & tricks</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Top 10 casual look ideas to dress up your kids</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="{{asset('images/post-thumbnail-2.jpg')}}" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>25 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>trending</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Latest trends of wearing street wears supremely</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="{{asset('images/post-thumbnail-3.jpg')}}" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>28 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>inspiration</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">10 Different Types of comfortable clothes ideas for women</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-4 my-4">
      <div class="container-lg">

        <div class="bg-warning pt-5 rounded-5">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-4">
                <h2 class="mt-5">Download Organic App</h2>
                <p>Online Orders made easy, fast and reliable</p>
                <div class="d-flex gap-2 flex-wrap mb-5">
                  <a href="#" title="App store"><img src="{{asset('images/img-app-store.png')}}" alt="app-store"></a>
                  <a href="#" title="Google Play"><img src="{{asset('images/img-google-play.png')}}" alt="google-play"></a>
                </div>
              </div>
              <div class="col-md-5">
                <img src="{{asset('images/banner-onlineapp.png')}}" alt="phone" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <section class="py-4">
      <div class="container-lg">
        <h2 class="my-4">People are also looking for</h2>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
      </div>
    </section>

    <section class="py-5">
      <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#package"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Free delivery</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#secure"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>100% secure payment</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#quality"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Quality guarantee</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#savings"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>guaranteed savings</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#offers"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Daily offers</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- @include ('userpage.script') --}}
    @include ('userpage.footer')
    
  </body>