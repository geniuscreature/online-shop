<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Single Product – Diana – Furniture Store eCommerce Bootstrap5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,400i,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="{{ asset('css/headroom.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Bardy Icon CSS ==-->
    <link href="{{ asset('css/bardy.icon.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('css/slicknav.css') }}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{ asset('css/aos.min.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default sticky-header">
    <div class="container">
      <div class="row align-items-center justify-content-between position-relative">
        <div class="col">
          <div class="header-logo-area">
            <a href="index.blade.php">
              <img class="logo-main" src="{{asset('img/logo.png')}}" alt="Logo" />
              <img class="logo d-none" src="{{asset('img/logo-light.png')}}" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col">
          <div class="header-navigation-area">
            <ul class="main-menu nav">
              <li class="has-submenu"><a href="#/"><span>Home</span></a>
                <ul class="submenu-nav">
                  <li><a href="index.blade.php">Home - 1</a></li>
                  <li><a href="index-two.blade.php">Home - 2</a></li>
                </ul>
              </li>
              <li class="has-submenu full-width"><a href="#/"><span>Shop</span></a>
                <ul class="submenu-nav submenu-nav-mega">
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 01</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">New and sale badge product</a></li>
                      <li><a href="shop-single-name-1.blade.php">New badge product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Variable product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Soldout product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Simple product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy product name</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 02</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">Variable with soldout product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Sample affiliate product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Countdown product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Without shortcode product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Demo product title</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product dummy title</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 03</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">Dummy product name</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy text for title</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product title here</a></li>
                      <li><a href="shop-single-name-1.blade.php">Simple product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product with video</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy text for title</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item">
                    <ul>
                      <li><a href="#/"><img src="{{asset('img/shop/banner/2.jpg')}}" alt="Image-HasTech"></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Products</span></a>
                <ul class="submenu-nav">
                  <li><a href="shop-single-new.blade.php">New and sale badge product</a></li>
                  <li><a href="shop-single-badge.blade.php">New badge product</a></li>
                  <li><a href="shop-single.blade.php">Variable product</a></li>
                  <li><a href="shop-single-soldout.blade.php">Soldout product</a></li>
                  <li><a href="shop-single-simple.blade.php">Simple product</a></li>
                  <li><a href="shop-single-variable-soldout.blade.php">Variable with soldout product</a></li>
                  <li><a href="shop-single-affiliate.blade.php">Sample affiliate product</a></li>
                  <li><a href="shop-single-countdown.blade.php">Countdown product</a></li>
                  <li><a href="shop-single-shortcode.blade.php">Without shortcode product</a></li>
                  <li><a href="shop-single-video.blade.php">Product with video</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                <ul class="submenu-nav">
                  <li class="has-submenu"><a href="#">Shop</a>
                    <ul class="submenu-nav">
                      <li><a href="shop-3-grid.blade.php">Shop 3 Column</a></li>
                      <li><a href="shop-4-grid.blade.php">Shop 4 Column</a></li>
                      <li><a href="shop.blade.php">Shop Left Sidebar</a></li>
                      <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                      <li><a href="shop-list.blade.php">Shop Listing View</a></li>
                      <li><a href="shop-list-left-sidebar.blade.php">Shop List left Sidebar</a></li>
                      <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="shop-size-chart.blade.php">Size chart</a></li>
                  <li><a href="shop-shipping-policy.blade.php">Shipping policy</a></li>
                  <li><a href="about.blade.php">About</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                <ul class="submenu-nav">
                  <li><a href="blog.blade.php">Blog Left Sidebar</a></li>
                  <li><a href="blog-right-sidebar.blade.php">Blog Right Sidebar</a></li>
                  <li><a href="blog-grid.blade.php">Blog Grid Layout</a></li>
                  <li><a href="single-blog.blade.php">Single Blog Left Sidebar</a></li>
                  <li><a href="single-blog-right-sidebar.blade.php">Single Blog Right Sidebar</a></li>
                </ul>
              </li>
              <li><a href="contact.blade.php"><span>Contact</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="header-action-area">
            <ul class="header-action">
              <li class="currency-menu">
                <a class="title" href="javascript:;">USD</a>
                <ul class="currency-dropdown">
                  <li class="currency">
                    <ul>
                      <li class="active"><a href="#/">USD - US Dollar</a></li>
                      <li class="#/"><a href="#/">EUR - Euro</a></li>
                      <li class="#/"><a href="#/">GBP - British Pound</a></li>
                      <li class="#/"><a href="#/">INR - Indian Rupee</a></li>
                      <li class="#/"><a href="#/">USD - Bangladesh Taka</a></li>
                      <li class="#/"><a href="#/">JPY - Japan Yen</a></li>
                      <li class="#/"><a href="#/">CAD - Canada Dollar</a></li>
                      <li class="#/"><a href="#/">AUD - Australian Dollar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="header-action">
              <li class="user-menu">
                <a class="title" href="javascript:;"><i class="fa fa-user-o"></i></a>
                <ul class="user-dropdown">
                  <li class="user">
                    <ul>
                      <li><a href="#/">Login</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="header-action">
              <div class="header-search">
                <button class="search-toggle">
                  <i class="search-icon bardy bardy-search"></i>
                  <i class="close-icon bardy bardy-cancel"></i>
                </button>
                <div class="header-search-form">
                  <form action="#">
                    <input type="search" placeholder="Search our store">
                    <button type="submit"><i class="bardy bardy-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="header-action">
              <div class="header-mini-cart">
                <button class="mini-cart-toggle">
                  <i class="icon bardy bardy-shopping-cart"></i>
                  <span class="number">2</span>
                </button>
                <div class="mini-cart-dropdown">
                  <h4 class="cart-title">Your cart</h4>
                  <div class="cart-item-wrap">
                    <div class="cart-item">
                      <div class="thumb">
                        <a href="#/"><img class="w-100" src="{{asset('img/shop/cart/mini1.jpg')}}" alt="Image-HasTech"></a>
                        <a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                      </div>
                      <div class="content">
                        <h5 class="title"><a href="#/">5. Simple product</a></h5>
                        <span>1 x Tk 50.00</span>
                      </div>
                    </div>
                    <div class="cart-item">
                      <div class="thumb">
                        <a href="#/"><img class="w-100" src="{{asset('img/shop/cart/mini2.jpg')}}" alt="Image-HasTech"></a>
                        <a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                      </div>
                      <div class="content">
                        <h5 class="title"><a href="#/">2. New badge product - m / gold</a></h5>
                        <span>1 x Tk 80.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="mini-cart-footer">
                    <h4>Subtotal: <span class="total">Tk 130.00</span></h4>
                    <div class="cart-btn">
                      <a href="shop-cart.blade.php">View Cart</a>
                      <a href="shop-checkout.blade.php">Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-action d-block d-lg-none text-end">
              <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">2. New badge product</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.blade.php">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>2. New badge product</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-single-area">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product-single-item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="product-single-slider">
                    <!--== Start Product Thumbnail Area ==-->
                    <div class="product-thumb">
                      <div class="swiper-container single-product-thumb-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="zoom zoom-hover">
                              <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/8.jpg')}}">
                                <img src="{{asset('img/shop/product-single/8.jpg')}}" alt="Image-HasTech">
                              </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="zoom zoom-hover">
                              <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.jpg')}}">
                                <img src="{{asset('img/shop/product-single/4.jpg')}}" alt="Image-HasTech">
                              </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="zoom zoom-hover">
                              <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/2.jpg')}}">
                                <img src="{{asset('img/shop/product-single/2.jpg')}}" alt="Image-HasTech">
                              </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="zoom zoom-hover">
                              <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg')}}">
                                <img src="{{asset('img/shop/product-single/3.jpg')}}" alt="Image-HasTech">
                              </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="zoom zoom-hover">
                              <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg')}}">
                                <img src="{{asset('img/shop/product-single/3.jpg')}}" alt="Image-HasTech">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Product Thumbnail Area ==-->

                    <!--== Start Product Nav Area ==-->
                    <div class="swiper-container single-product-nav-slider product-nav">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="{{asset('img/shop/product-single/nav8.jpg')}}" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="{{asset('img/shop/product-single/nav4.jpg')}}" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="{{asset('img/shop/product-single/nav2.jpg')}}" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="{{asset('img/shop/product-single/nav3.jpg')}}" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="{{asset('img/shop/product-single/nav3.jpg')}}" alt="Image-HasTech">
                        </div>
                      </div>

                      <!--== Add Swiper navigation Buttons ==-->
                      <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                      <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <!--== End Product Nav Area ==-->
                  </div>
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h4 class="title">2. New badge product</h4>
                    <div class="prices">
                      <span class="price">Tk 80.00</span>
                    </div>
                    <div class="star-content">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <div class="product-select-action">
                      <div class="select-item">
                        <div class="select-size-wrap">
                          <span>Size :</span>
                          <ul>
                            <li class="active"><a href="#/">m</a></li>
                            <li><a href="#/">l</a></li>
                            <li><a href="#/">xl</a></li>
                            <li><a href="#/">xxl</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="select-item">
                        <div class="select-color-wrap">
                          <span>Color :</span>
                          <ul>
                            <li class="gold active"></li>
                            <li class="gray"></li>
                            <li class="magenta"></li>
                            <li class="maroon"></li>
                            <li class="navy"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-action-simple">
                      <div class="product-quick-action">
                        <div class="product-quick-qty">
                          <span>Quantity:</span>
                          <div class="pro-qty">
                            <input type="text" id="quantity" title="Quantity" value="1">
                          </div>
                        </div>
                      </div>
                      <div class="cart-wishlist-button">
                        <a href="shop-cart.blade.php" class="btn-cart">Add to cart</a>
                        <div class="product-wishlist">
                          <a class="add-wishlist" href="wishlist.html">
                            <span class="icon">
                              <i class="bardy bardy-wishlist"></i>
                              <i class="hover-icon bardy bardy-wishlist"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                      <div class="buy-now-btn">
                        <button class="btn btn-Buy">Buy it now</button>
                      </div>
                    </div>
                    <div class="product-action-bottom">
                      <div class="social-sharing">
                        <span>Share:</span>
                        <div class="social-icons">
                          <a href="#/"><i class="shopify-social-icon-facebook-rounded color"></i></a>
                          <a href="#/"><i class="shopify-social-icon-twitter-rounded color"></i></a>
                          <a href="#/"><i class="shopify-social-icon-googleplus-rounded color"></i></a>
                          <a href="#/"><i class="shopify-social-icon-pinterest-rounded color"></i></a>
                        </div>
                      </div>
                      <div class="text-info">
                        <p>Guaranteed safe checkout</p>
                      </div>
                    </div>
                  </div>
                  <!--== End Product Info Area ==-->
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="product-review-tabs-content">
                    <div class="nav nav-tabs product-tab-nav" id="ReviewTab" role="tablist">
                      <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" aria-controls="description" aria-selected="true">Description</button>
                      <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" aria-controls="reviews" aria-selected="false">Reviews</button>
                      <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" aria-controls="comments" aria-selected="false">Comments</button>
                      <button class="nav-link" id="shipping-policy-tab" data-bs-toggle="tab" data-bs-target="#shipping-policy" type="button" aria-controls="shipping-policy" aria-selected="false">Shipping Policy</button>
                      <button class="nav-link" id="size-chart-tab" data-bs-toggle="tab" data-bs-target="#size-chart" type="button" aria-controls="size-chart" aria-selected="false">Size Chart</button>
                    </div>
                    <div class="tab-content product-tab-content" id="ReviewTabContent">
                      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="product-description">
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="product-review-content">
                          <div class="review-content-header">
                            <h3>Customer Reviews</h3>
                            <div class="review-info">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                              </ul>
                              <span class="review-caption">Based on 7 reviews</span>
                              <span class="review-write-btn">Write a review</span>
                            </div>
                          </div>

                          <!--== Start Reviews Form Item ==-->
                          <div class="reviews-form-area">
                            <h4 class="title">Write a review</h4>
                            <div class="reviews-form-content">
                              <form action="#">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="for_name">Name</label>
                                      <input id="for_name" class="form-control" type="text" placeholder="Enter your name">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="for_email">Email</label>
                                      <input id="for_email" class="form-control" type="email" placeholder="john.smith@example.com">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <span class="title">Rating</span>
                                      <ul class="review-rating">
                                        <li class="fa fa-star-o"></li>
                                        <li class="fa fa-star-o"></li>
                                        <li class="fa fa-star-o"></li>
                                        <li class="fa fa-star-o"></li>
                                        <li class="fa fa-star-o"></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="for_review-title">Review Title</label>
                                      <input id="for_review-title" class="form-control" type="text" placeholder="Give your review a title">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="for_comment">Body of Review (1500)</label>
                                      <textarea id="for_comment" class="form-control" placeholder="Write your comments here"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-submit-btn">
                                      <button type="submit" class="btn-submit">Post comment</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--== End Reviews Form Item ==-->

                          <div class="reviews-content-body">
                            <!--== Start Reviews Content Item ==-->
                            <div class="review-item">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                              </ul>
                              <h3 class="title">Awesome shipping service!</h3>
                              <h5 class="sub-title"><span>Nantu Nayal</span> no <span>Sep 30, 2018</span></h5>
                              <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              <a href="#/">Report as Inappropriate</a>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="review-item">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                              </ul>
                              <h3 class="title">Low Quality</h3>
                              <h5 class="sub-title"><span>Oliv hala</span> no <span>Sep 30, 2018</span></h5>
                              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                              <a href="#/">Report as Inappropriate</a>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="review-item">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                              </ul>
                              <h3 class="title">Excellent services!</h3>
                              <h5 class="sub-title"><span>Halk Marron</span> no <span>Sep 30, 2018</span></h5>
                              <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                              <a href="#/">Report as Inappropriate</a>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="review-item">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                              </ul>
                              <h3 class="title">Price is very high</h3>
                              <h5 class="sub-title"><span>Musa</span> no <span>Sep 30, 2018</span></h5>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                              <a href="#/">Report as Inappropriate</a>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="review-item">
                              <ul class="review-rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-o"></li>
                              </ul>
                              <h3 class="title">Normal</h3>
                              <h5 class="sub-title"><span>Muhammad</span> no <span>Sep 30, 2018</span></h5>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a href="#/">Report as Inappropriate</a>
                            </div>
                            <!--== End Reviews Content Item ==-->
                          </div>

                          <!--== Start Reviews Pagination Item ==-->
                          <div class="review-pagination">
                            <span class="pagination-pag">1</span>
                            <span class="pagination-pag">2</span>
                            <span class="pagination-next">Next »</span>
                          </div>
                          <!--== End Reviews Pagination Item ==-->
                        </div>
                      </div>
                      <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                        <div class="product-comment-content">
                          <form action="#">
                            <div class="product-comment">
                              <img src="{{asset('img/photos/comment.png')}}" alt="Image-HasTech">
                              <textarea name="con_message" placeholder="Start the discussion…"></textarea>
                            </div>
                            <button class="btn-theme" type="submit">Post as Product</button>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="shipping-policy" role="tabpanel" aria-labelledby="shipping-policy-tab">
                        <div class="product-shipping-policy">
                          <div class="section-title">
                            <h2 class="title">Shipping policy for our store</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                          </div>
                          <ul class="shipping-policy-list">
                            <li>1-2 business days (Typically by end of day)</li>
                            <li><a href="#/">30 days money back guaranty</a></li>
                            <li>24/7 live support</li>
                            <li>odio dignissim qui blandit praesent</li>
                            <li>luptatum zzril delenit augue duis dolore</li>
                            <li>te feugait nulla facilisi.</li>
                          </ul>
                          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                          <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                          <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="size-chart" role="tabpanel" aria-labelledby="size-chart-tab">
                        <div class="product-size-chart">
                          <h4>Size Chart</h4>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="cun-name"><span>UK</span></td>
                                <td>18</td>
                                <td>20</td>
                                <td>22</td>
                                <td>24</td>
                                <td>26</td>
                              </tr>
                              <tr>
                                <td class="cun-name"><span>European</span></td>
                                <td>46</td>
                                <td>48</td>
                                <td>50</td>
                                <td>52</td>
                                <td>54</td>
                              </tr>
                              <tr>
                                <td class="cun-name"><span>usa</span></td>
                                <td>14</td>
                                <td>16</td>
                                <td>18</td>
                                <td>20</td>
                                <td>22</td>
                              </tr>
                              <tr>
                                <td class="cun-name"><span>Australia</span></td>
                                <td>28</td>
                                <td>10</td>
                                <td>12</td>
                                <td>14</td>
                                <td>16</td>
                              </tr>
                              <tr>
                                <td class="cun-name"><span>Canada</span></td>
                                <td>24</td>
                                <td>18</td>
                                <td>14</td>
                                <td>42</td>
                                <td>36</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <!--== Start Product Sidebar Wrapper ==-->
            <div class="product-sidebar-wrapper product-sidebar-left">
              <!--== Start Product Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Search</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-search-form">
                    <form action="#">
                      <div class="form-group">
                        <input class="form-control" type="search" placeholder="Enter key words">
                        <button type="submit" class="btn-src">Search</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--== End Product Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Vendors</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-nav-menu">
                    <a href="#/">Vendor <span>1</span></a>
                    <a href="#/">Vendor <span>10</span></a>
                    <a href="#/">Vendor <span>11</span></a>
                    <a href="#/">Vendor <span>2</span></a>
                    <a href="#/">Vendor <span>3</span></a>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Banner</h4>
                <div class="product-sidebar-body">
                  <!--== Start Product Item ==-->
                  <div class="product-sidebar-item">
                    <div class="thumb">
                      <a href="single-product-simple.html">
                        <img class="w-100" src="{{asset('img/slider/slider-05.jpg')}}" alt="Image-HasTech">
                      </a>
                    </div>
                  </div>
                  <!--== End Product Item ==-->
                </div>
              </div>
              <!--== End Sidebar Item ==-->
            </div>
            <!--== End Product Sidebar Wrapper ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="feature-container">
        <div class="row no-gutter">
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
                <div class="content">
                  <h3 class="title">Free home delivery</h3>
                  <p>Provide free home delivery for all product over $100</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
                <div class="content">
                  <h3 class="title">Quality Products</h3>
                  <p>We ensure the product quality that is our main goal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
                <div class="content">
                  <h3 class="title">3 Days Return</h3>
                  <p>Return product within 3 days for any product you buy</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
                <div class="content">
                  <h3 class="title">Online Support</h3>
                  <p>We ensure the product quality that you can trust easily</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Feature Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area bg-color-222">
    <div class="footer-top-area">
      <div class="container">
        <div class="footer-widget-wrap row">
          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <div class="footer-logo-area">
                <a href="index.blade.php">
                  <img class="logo-main" src="{{asset('img/logo-light.png')}}" alt="Logo" />
                </a>
              </div>
              <p>People have been using natural objects, such as tree stumps, rocks and moss, as furniture since the beginning of human civilisation.</p>
              <p>Your current address goes to here,120 example, country.</p>
              <p>+12546 687 987  / +15425 987 541</p>
              <p>demo@example.com www.example.com</p>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Quick Link</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="page-search.blade.php">Search</a></li>
                  <li><a href="about.blade.php">About</a></li>
                  <li><a href="contact.blade.php">Contact</a></li>
                  <li><a href="shipping-policy.html">Shipping policy</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  <li><a href="shop.blade.php">All Products</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Information</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="login.html">Login</a></li>
                  <li><a href="#/">My Account</a></li>
                  <li><a href="#/">Terms & Conditions</a></li>
                  <li><a href="shop-shipping-policy.blade.php">Shipping Policy</a></li>
                  <li><a href="shop-checkout.blade.php">Payment System</a></li>
                  <li><a href="#/">Promotional Offers</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Follow us</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="#/">Facebook</a></li>
                  <li><a href="#/">Twitter</a></li>
                  <li><a href="#/">Instagram</a></li>
                  <li><a href="#/">LinkedIn</a></li>
                  <li><a href="#/">Google Plus</a></li>
                  <li><a href="#/">YouTube</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
        </div>
      </div>
    </div>
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="copyright">Copyright © <a target="_blank" href="https://hasthemes.com/">Diana</a> All Right Reserved.</p>
          </div>
          <div class="col-lg-6">
            <div class="payment-method">
              <img src="{{asset('img/icons/payment.webp')}}" alt="Image-HasTech">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="{{asset('img/shop/quick-view1.jpg')}}" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">3. Variable product</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity2" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{ asset('js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('js/jquery-migrate.js')}}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{ asset('js/popper.min.js')}}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!--=== jQuery Appear Js ===-->
<script src="{{ asset('js/jquery.appear.js')}}"></script>
<!--=== jQuery Headroom Min Js ===-->
<script src="{{ asset('js/headroom.min.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{ asset('js/swiper.min.js')}}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{ asset('js/fancybox.min.js')}}"></script>
<!--=== jQuery Slick Nav Js ===-->
<script src="{{ asset('js/slicknav.js')}}"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="{{ asset('js/waypoint.js')}}"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="{{ asset('js/parallax.min.js')}}"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="{{ asset('js/aos.min.js')}}"></script>
<!--=== jQuery Countdown Js ===-->
<script src="{{ asset('js/countdown.js')}}"></script>
<!--=== jQuery Zoom Min Js ===-->
<script src="{{asset('js/jquery-zoom.min.js')}}"></script>


<!--=== jQuery Custom Js ===-->
<script src="{{ asset('js/custom.js') }}"></script>

<script>
  // Images Zoom
  $('.zoom-hover').zoom();
</script>

</body>

</html>