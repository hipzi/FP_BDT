<?= $this->extend('layout/toko'); ?>

<?= $this->section('content'); ?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(../images/bg/2.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shop Page</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Shop Page</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area --> 
<!-- Start Our Product Area -->
<section class="htc__product__area shop__page ptb--130 bg__white">
    <div class="container">
        <div class="htc__product__container">
            <!-- Start Product MEnu -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter__menu__container">
                        <div class="product__menu">
                            <button data-filter="*"  class="is-checked">All</button>
                            <button data-filter=".cat--1">Furnitures</button>
                            <button data-filter=".cat--2">Bags</button>
                            <button data-filter=".cat--3">Decoration</button>
                            <button data-filter=".cat--4">Accessories</button>
                            <a href="<?php echo base_url('/user/logout');?>">Logout</a>
                        </div>
                        <div class="filter__box">
                            <a class="filter__menu" href="#">filter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Filter Menu -->
            <div class="filter__wrap">
                <div class="filter__cart">
                    <div class="filter__cart__inner">
                        <div class="filter__menu__close__btn">
                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                        </div>
                        <div class="filter__content">
                            <!-- Start Single Content -->
                            <div class="fiter__content__inner">
                                <div class="single__filter">
                                    <h2>Sort By</h2>
                                    <ul class="filter__list">
                                        <li><a href="#default">Default</a></li>
                                        <li><a href="#accessories">Accessories</a></li>
                                        <li><a href="#bags">Bags</a></li>
                                        <li><a href="#chair">Chair</a></li>
                                        <li><a href="#decoration">Decoration</a></li>
                                        <li><a href="#fashion">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Size</h2>
                                    <ul class="filter__list">
                                        <li><a href="#xxl">XXL</a></li>
                                        <li><a href="#xl">XL</a></li>
                                        <li><a href="#x">X</a></li>
                                        <li><a href="#l">L</a></li>
                                        <li><a href="#m">M</a></li>
                                        <li><a href="#s">S</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Tags</h2>
                                    <ul class="filter__list">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Chair</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Price</h2>
                                    <ul class="filter__list">
                                        <li><a href="#">$0.00 - $50.00</a></li>
                                        <li><a href="#">$50.00 - $100.00</a></li>
                                        <li><a href="#">$100.00 - $150.00</a></li>
                                        <li><a href="#">$150.00 - $200.00</a></li>
                                        <li><a href="#">$300.00 - $500.00</a></li>
                                        <li><a href="#">$500.00 - $700.00</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Color</h2>
                                    <ul class="filter__list sidebar__list">
                                        <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                        <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                        <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                        <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                        <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter Menu -->
            <!-- End Product MEnu -->
            <div class="row">
                <div class="product__list another-product-style">
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/1.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/2.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/3.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/4.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Brone Lamp Glasses</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12 cat--2">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/5.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Clothes Boxed</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/6.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Liquid Unero Ginger Lily</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/7.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Miliraty Backpack</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/8.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Saved Wines Corkscrew</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/9.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Simple Fabric Bags</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/10.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Simple Fabric Chair</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/11.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Unero Round Sunglass</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/12.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Unero Small Bag</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/13.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Wood Complex Lamp Box</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/14.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Wood Long TV Board</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/15.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Wood Simple Chair V2</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 hidden-sm col-xs-12 cat--3">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="images/product/16.png" alt="product images">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                        <li><a title="Add TO Cart" href="<?php echo base_url('/cart');?>"><span class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="<?php echo base_url('/wishlist');?>"><span class="ti-heart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="product-details.html">Wood Simple Clock</a></h2>
                                <ul class="product__price">
                                    <li class="old__price">$16.00</li>
                                    <li class="new__price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
            <!-- Start Load More BTn -->
            <div class="row mt--60">
                <div class="col-md-12">
                    <div class="htc__loadmore__btn">
                        <a href="#">load more</a>
                    </div>
                </div>
            </div>
            <!-- End Load More BTn -->
        </div>
    </div>
</section>
<!-- End Our Product Area -->
<?= $this->endSection('content'); ?>

<?= $this->section('quickview-product'); ?>
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>

<?= $this->endSection('quickview-product'); ?>