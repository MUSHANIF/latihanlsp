<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME | MUMUS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="/assets/splide.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap");
                    * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            }
            body{
                align-items: center;
  justify-content: center;
  
            }
            .navbar{
                position: fixed;
            }
            .home{
                
            }
            .splide{
                padding-top: 5rem;
            margin-top: 35px;
            margin-bottom: 60px;
            }
        .home .kiri{
            padding-top: 5rem;
            margin-top: 35px;
        }
        .navbar .btn {
  display: inline-block;
  margin-left: 10px;
  padding: 10px 30px;
  border-radius: 6rem;
  background-color: #5BC0F8;
  font-size: 16px;
  color: #fff;
  cursor: pointer;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  transition: all 0.3s #86E5FF;
}

.navbar .btn:hover {
  transform: scale(1.1);
  background-color: #5BC0F8;
  color: #fff;
}
.splide img{
    width: 100%;
}
.card .card-title {
text-decoration: none
}
.card .card-text {
text-decoration: none
}
.card .card-img{
    width: 100%;
    height: 100px;
}
.single-product {
  border: 1px solid #eee;
  border-radius: 4px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  margin-top: 30px;
  -webkit-box-shadow: 0px 0px 20px #00000012;
  box-shadow: 0px 0px 20px #00000012;
  padding: 8px;
  background: #fff;
}

.single-product .product-image {
  overflow: hidden;
  position: relative;
}

.single-product .product-image .sale-tag {
  background: #f73232;
  border-radius: 2px;
  font-size: 12px;
  color: #fff;
  font-weight: bold;
  position: absolute;
  top: 0;
  padding: 5px 10px;
  left: 0;
  z-index: 22;
}

.single-product .product-image .new-tag {
  background: #0167F3;
  border-radius: 2px;
  font-size: 12px;
  color: #fff;
  font-weight: bold;
  position: absolute;
  top: 0;
  padding: 5px 10px;
  left: 0;
  z-index: 22;
}

.single-product .product-image .button {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: -60px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  opacity: 0;
  visibility: hidden;
  background-color: #0167F3;
  color: white;
}

.single-product .product-image .button .btn {
  padding: 12px 20px;
  font-size: 13px;
  font-weight: 600;
  width: 140px;
}

.single-product .product-image .button .btn i {
  font-size: 18px;
    position: relative;
    top: 2px;
}

.single-product .product-image img {
  width: 100%;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.single-product:hover .product-image .button {
  bottom: 30px;
  opacity: 1;
  visibility: visible;
}

.single-product:hover .product-image img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.single-product .product-info {
  padding: 20px;
  background-color: #fff;
}

.single-product .product-info .category {
  color: #888;
  font-size: 13px;
  display: block;
  margin-bottom: 2px;
}

.single-product .product-info .title a {
  font-size: 16px;
  font-weight: 700;
  color: #081828;
}

@media only screen and (min-width: 768px) and (max-width: 991px),
(max-width: 767px) {
  .single-product .product-info .title a {
    font-size: 15px;
  }
}

.single-product .product-info .title a:hover {
  color: #0167F3;
}

.single-product .product-info .review {
  margin-top: 5px;
}

.single-product .product-info .review li {
  display: inline-block;
}

.single-product .product-info .review li i {
  color: #fecb00;
  font-size: 13px;
}

.single-product .product-info .review li span {
  display: inline-block;
  margin-left: 4px;
  color: #888;
  font-size: 13px;
}

.single-product .product-info .price {
  margin-top: 15px;
}

.single-product .product-info .price span {
  font-size: 17px;
  font-weight: 700;
  color: #0167F3;
  display: inline-block;
}

.single-product .product-info .price .discount-price {
  margin: 0;
  color: #aaaaaa;
  text-decoration: line-through;
  font-weight: normal;
  margin-left: 10px;
  font-size: 14px;
  display: inline-block;
}

/* End Single Product */
.trending-product {
margin-top: 40px;
  background-color: #f9f9f9;
}

.trending-product .section-title {
  margin-bottom: 20px;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-trasparent fixed-top shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
        <div class="container">
          <a class="navbar-brand" href="#">MUMUS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  mx-auto text-center">
            
              <li class="nav-item  mx-3">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
            <ul class="navbar-nav  ">
              <li class="nav-item dropdown">
                @auth
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang  {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @can('superadmin')
                        <li><a class="dropdown-item" href="{{ route('dashboardsuperadmin') }}">Dashboard</a></li>
                        @elsecan('user')
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @elsecan('admin')
                        <li><a class="dropdown-item" href="{{ route('dashboardAdmin') }}">Dashboard</a></li>
                        @endcan
                      
                      
                   
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form></li>
                    </ul>
                    @else
                    <a href="{{ route('login') }}" class="btn rounded ">Get started</a>
                    
                @endauth

                
                    
                
            
               
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- <section class="home">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 mt-10 justify-content-center kiri">
                    <h1>Harga terbaik di kelas nya</h1>
                    <p>belilah produk di toko kami Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, commodi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odit. Ullam, porro. Perspiciatis error quae, dolor possimus quidem nihil. Omnis.</p>
                    <button type="button" class="btn rounded ">Get started</button>
                </div>
                <div class="col-md-6">
                    <img src="/assets/image/pp.gif" alt="">

                </div>
            </div>
        </div>
      </section> --}}
      <section class="splide" aria-labelledby="carousel-heading">
        
      
        <div class="splide__track">
              <ul class="splide__list">
                  <li class="splide__slide"><img src="/assets/image/ba.jpg" alt=""></li>
                  <li class="splide__slide"><img src="/assets/image/banner.jpg" alt=""></li>                  
                  
              </ul>
        </div>
      </section>
      <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h4 class="fw-semibold ">Jenis barang</h4>
                     
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
               
            </div>
            <div class="row ">
                
                    <div class="col-md-4   ">
                        <div class="card ">
                            <a href="" class="text-decoration-none">
                          <div class="row ">
                           
                            <div class="col-md-4">
                              <img class="card-img " src="/assets/image/h.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Hotel</h5>
                                
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                            </div>
                     
                          </div>
                        </a>
                        </div>
                      </div>
                      <div class="col-md-4 item  ">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img class="card-img card-img-left" src="../assets/image/baby.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Pesawat</h5>
                                <p class="card-text">
                                  
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img class="card-img card-img-left" src="../assets/image/baby.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Kereta</h5>
                                <p class="card-text">
                                 
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        
            </div>
        </div>
      </section>
      <section class="trending-product section" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        
                            <h4 class="fw-semibold ">Trending product</h4>
                            
                        
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-1.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Watches</span>
                            <h4 class="title">
                                <a href="product-grids.html">Xiaomi Mi Band 5</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$199.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-2.jpg" alt="#">
                            <span class="sale-tag">-25%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Speaker</span>
                            <h4 class="title">
                                <a href="product-grids.html">Big Power Sound Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$275.00</span>
                                <span class="discount-price">$300.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-3.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Camera</span>
                            <h4 class="title">
                                <a href="product-grids.html">WiFi Security Camera</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$399.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-4.jpg" alt="#">
                            <span class="new-tag">New</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Phones</span>
                            <h4 class="title">
                                <a href="product-grids.html">iphone 6x plus</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$400.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-5.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Headphones</span>
                            <h4 class="title">
                                <a href="product-grids.html">Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$350.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-6.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Speaker</span>
                            <h4 class="title">
                                <a href="product-grids.html">Mini Bluetooth Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$70.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-7.jpg" alt="#">
                            <span class="sale-tag">-50%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Headphones</span>
                            <h4 class="title">
                                <a href="product-grids.html">PX7 Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$100.00</span>
                                <span class="discount-price">$200.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-8.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Laptop</span>
                            <h4 class="title">
                                <a href="product-grids.html">Apple MacBook Air</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <section id="footer" >
  <footer class="text-center " style="margin-top: 50px; margin-bottom: 10px; padding-top: 30px">
    <hr>
    <p>Copyright &copy; 2022 By Mumus</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/assets/owl.carousel.js"></script>
    <script src="/assets/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
   
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>


    
  </body>
  <script>
    var splide = new Splide( '.splide', {
  type   : 'loop',
  padding: '5rem',
} );

splide.mount();
  </script>
    <script>
       
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        loop: true,
        nav: false,
        margin: 100,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });
    </script>
</html>