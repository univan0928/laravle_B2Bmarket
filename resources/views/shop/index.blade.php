@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{asset('css/custom-index.css')}}">
@endsection


@section('content')
    <div id="homepage-1">
        <div class="ps-home-banner ps-home-banner--1">
              <div class="ps-container">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                  <div class="ps-banner--market-1" data-background="img/slider/home-3/home-banner/homeslider1.jpg"><img src="img/slider/home-3/home-banner/homeslider1.jpg" alt="">
                      <div class="ps-banner__content">
                          <h5>Mega Christmas Stocklots</h5>
                          <h3>X-MAS Stocklots<br> Available</h3>
                          <p>Sale up to <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                      </div>
                  </div>
                  <div class="ps-banner--market-1" data-background="img/slider/home-3/home-banner/homeslider2.jpg"><img src="img/slider/home-3/home-banner/homeslider2.jpg" alt="">
                      <div class="ps-banner__content">
                          <h5>Merry Xmas Lots</h5>
                          <h3>iPhone Stocklots <br> Fast Shipping</h3>
                          <p>Discount <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                      </div>
                  </div>
               </div>
            </div>
        </div>
        <div class="ps-site-features pb-site-30">
            <div class="ps-container">
                <div class="ps-block--site-features">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Branded Stocklots</h4>
                            <p>Daily New Offers</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-thumbs-up"></i></div>
                        <div class="ps-block__right">
                            <h4>Fast & Easy</h4>
                            <p>Buy & Sell Stocklots</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-network"></i></div>
                        <div class="ps-block__right">
                            <h4>B2B Marketplace</h4>
                            <p>Over 110 Countries</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support team</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-gift"></i></div>
                        <div class="ps-block__right">
                            <h4>Best Brands</h4>
                            <p>For The Best Prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ps-container">
        <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Top-Ads</h3>
                        </div>
                    </div>
                </div>

        <hr />
          <div class="ps-section__content pb-site-30">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                <div class="ps-product ps-product--inner">
                    <div class="ps-product__thumbnail">
                      <div class="ps-banner--market-1 custom-ads" data-background="img/collection/home-1/ad-2.jpg"><img src="img/collection/home-1/ad-2.jpg" alt="">
                        <div class="ps-banner__content">
                            <span class="ad-title fw-700">Acher Fluence</span><span class="ad-title"> Minimal</span><br> <span class="ad-title">Speaker</span>
                            <p>Discount <strong>$159.99 </strong></p><a class="ps-btn custom-ps-btn" href="#">Shop Now</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="ps-product ps-product--inner">
                    <div class="ps-product__thumbnail">
                      <div class="ps-banner--market-1 custom-ads" data-background="img/collection/home-1/ad-2.jpg"><img src="img/collection/home-1/ad-2.jpg" alt="">
                        <div class="ps-banner__content">
                            <span class="ad-title">WOODEN</span><br><span class="ad-title">MINIMALISTIC</span><br> <span class="ad-title">CHAIRS</span>
                            <p class="sale-title">SALE UP TO <strong>40% Off </strong></p><a class="ps-btn custom-ps-btn" href="#">Shop Now</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="ps-product ps-product--inner">
                    <div class="ps-product__thumbnail">
                      <div class="ps-banner--market-1 custom-ads" data-background="img/collection/home-1/ad-2.jpg"><img src="img/collection/home-1/ad-2.jpg" alt="">
                        <div class="ps-banner__content">
                            <span class="ad-title fw-700">IQOS 2.4</span><br><span class="ad-title">HOLDER &</span><br> <span class="ad-title">CHARGER</span>
                            <p class="sale-title">PRICE JUST<strong>$105.50</strong></p><a class="ps-btn custom-ps-btn" href="#">Shop Now</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="ps-product ps-product--inner">
                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/collection/home-1/ad-2.jpg" alt=""></a></div>
                </div>
                <div class="ps-product ps-product--inner">
                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/collection/home-1/ad-2.jpg" alt=""></a></div>
                </div>
                <div class="ps-product ps-product--inner">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/collection/home-1/ad-2.jpg" alt=""></a></div>
                </div>
            </div>
          </div>
        </div> 
        
        <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>VIP Deals</h3>
                        </div>
                    </div>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                 <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/8.jpeg" alt=""></a></div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">€21.50 – €41.50</p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stocklot Branded Clothing</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-ads">
            <div class="ps-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/2.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
      <!--   <div class="ps-top-categories">
            <div class="ps-container">
                <h3>Top categories of the month</h3>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/1.jpg" alt="">
                            <p>Electronics</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/2.jpg" alt="">
                            <p>Clothings</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/3.jpg" alt="">
                            <p>Computers</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/4.jpg" alt="">
                            <p>Home & Kitchen</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/5.jpg" alt="">
                            <p>Health & Beauty</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/6.jpg" alt="">
                            <p>Health & Beauty</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/7.jpg" alt="">
                            <p>Jewelry & Watch</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/8.jpg" alt="">
                            <p>Technology Toys</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="ps-product-list ps-clothings mt-80">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>Deals Of The Week</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                    <p class="ps-product__price">$567.99 </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                    <p class="ps-product__price">$567.99 </p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/6.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/7.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/8.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/9.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/10.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list ps-clothings">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>Clothing & Fashion</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/1.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                    <p class="ps-product__price">$567.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                    <p class="ps-product__price">$567.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/6.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/7.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list ps-garden-kitchen">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>Consumer Electronics</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price">$567.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price">$567.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                    <p class="ps-product__price">$320.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                    <p class="ps-product__price">$85.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                    <p class="ps-product__price">$92.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt="" /></a></div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <p class="ps-product__price">$42.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-ads">
            <div class="ps-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ps-product-list ps-new-arrivals mt-80">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>Recently Added</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                    <p class="ps-product__price">$990.50</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                    <p class="ps-product__price">$1120.50</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                    <p class="ps-product__price">$1220.50</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                    <p class="ps-product__price">$36.78 – $56.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                    <p class="ps-product__price">$125.30</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                    <p class="ps-product__price">$55.30</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                    <p class="ps-product__price">$41.27</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price">$41.27</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('custom_js')
@endsection



    
    