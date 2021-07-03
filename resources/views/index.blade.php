<x-layout>

    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="{{ asset('img/slider/slider-01.jpg') }}">
              <div class="container">
                <div class="row align-items-center ">
                  <div class="col-12">
                    <div class="slider-content">
                      <h5 class="sub-title">NEW COLLECTION 2021</h5>
                      <h2 class="title">New Interior Concept <br>Wooden Chairs</h2>
                      <a class="btn-slider" href="shop.blade.php">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="{{ asset('img/slider/slider-02.jpg') }}">
              <div class="container">
                <div class="row align-items-center ">
                  <div class="col-12">
                    <div class="slider-content">
                      <h5 class="sub-title">NEW COLLECTION 2021</h5>
                      <h2 class="title">The Brighten Up <br>Interior Collection</h2>
                      <a class="btn-slider" href="shop.blade.php">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="section-title">
              <h2 class="title">New Arrivals</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
              <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        <x-products-card :product="$product"/>
                    </div>
                @endforeach
              </div>

              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
              <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container-fluid p-0">
        <div class="row no-gutter about-position-style">
          <div class="col-lg-7">
            <div class="about-thumb">
              <div class="image-1" data-bg-img="{{ asset('img/about/1.jpg') }}"></div>
              <div class="image-2" data-bg-img="{{ asset('img/about/2.jpg') }}"></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about-content bg-theme-color3">
              <div class="section-title mb--0">
                <h2 class="sub-title">Provide the best</h2>
                <h2 class="title">Furniture For You</h2>
                <div class="desc">
                  <p>Modern furniture refers to furniture produced from the late 19th century through the present that is influenced by modernism. Post-World War II ideals of cutting excess, commodification, and practicality of materials in design heavily influenced the aesthetic of the furniture.</p>
                  <p>It was a tremendous departure from all furniture design that had gone before it. There was an opposition to the decorative arts, which included Art Nouveau, Neoclassical, and Victorian styles.</p>
                </div>
              </div>
              <a href="#" class="btn-theme">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-list-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="section-title">
              <h2 class="title">Product List</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-category-tab-wrap">
              <ul class="nav nav-tabs product-category-nav" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="true">Featured</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="chair-tab" data-bs-toggle="tab" data-bs-target="#chair" type="button" role="tab" aria-controls="chair" aria-selected="false">Chair</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="sofa-tab" data-bs-toggle="tab" data-bs-target="#sofa" type="button" role="tab" aria-controls="sofa" aria-selected="false">Sofa</button>
                </li>
              </ul>
              <div class="tab-content product-category-content" id="myTabContent">
                <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                  <div class="row">
                    <div class="col-12">
                      <div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <x-products-card :product="$product"/>
                                </div>
                            @endforeach
                        </div>

                        <!--== Add Swiper navigation Buttons ==-->
                        <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="chair" role="tabpanel" aria-labelledby="chair-tab">
                  <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <x-products-card :product="$product"/>
                        </div>
                    @endforeach
                  </div>
                </div>
                <div class="tab-pane fade" id="sofa" role="tabpanel" aria-labelledby="sofa-tab">
                  <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <x-products-card :product="$product"/>
                        </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="divider-area divider-offer-area bg-color-222">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="divider-style-wrap text-center">
              <div class="divider-content">
                <h4 class="sub-title">Special <span>Offers</span> for Subscription</h4>
                <h4 class="title">GET INSTANT DISCOUNT FOR MEMBERSHIP</h4>
                <p>Subscribe our newsletter and get all latest news abot our latest <br>products, promotions, offers and discount</p>
                <div class="newsletter-content-wrap">
                  <div class="newsletter-form">
                    <form action="#">
                      <input type="email" class="form-control" placeholder="Enter your email here">
                      <button class="btn-submit" type="button">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title">
              <h2 class="title">Latest Blog</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-nav swiper-slide-gap post-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/1.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Standard dummy text ever since</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/2.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Make a type specimen book</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/3.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Lorem Ipsum is simply dummy</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/4.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">It is a long established</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/5.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Sed quia non numquam</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/6.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Ratione voluptatem sequi nesciunt</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
              </div>

              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
              <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

</x-layout>
