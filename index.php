<!doctype html>
<html lang="en">

<!-- Google Web Fonts
  ================================================== -->

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7COverpass:300,400,600,700,800,900" rel="stylesheet">

<!-- Basic Page Needs
  ================================================== -->

<title>Tg world</title>

<!--meta info-->
<meta charset="utf-8">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Vendor CSS
  ============================================ -->

<link rel="stylesheet" href="font/demo-files/demo.css">

<!-- CSS theme files
  ============================================ -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
<!-- <i class="fa-brands fa-whatsapp" style="color: #361f51;"></i> -->
</head>

<body>
  <?php
  //$dbname= "tg";
  $conn = mysqli_connect("localhost", "root", "", "tg");
  if (!$conn) {
    die("could not connect: " . mysql_error());
  }
  $sql_manufacturer = "SELECT * FROM  manufaturer ";
  $sql_model = "SELECT * FROM  model";
  $sql_type = "SELECT * FROM  type";
  $sql_year = "SELECT * FROM  year";
  $sql_price = "SELECT * FROM  price";
  $sql_stock = "SELECT * FROM  stock";
  $manufacture = mysqli_query($conn, $sql_manufacturer);
  $model = mysqli_query($conn, $sql_model);
  $type = mysqli_query($conn, $sql_type);
  $year = mysqli_query($conn, $sql_year);
  $stock = mysqli_query($conn, $sql_stock);
  $price = mysqli_query($conn, $sql_price);

  ?>

  <!-- <div id="loader">
    <div class="box loading"></div>
  </div> -->

  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="header-fixed">

      <!-- top-header -->

      <div class="top-header flex-row flex-justify flex-center">

        <!-- logo -->

        <div class="logo-wrap">

          <a href="index.php" class="logo"><img src="images/logo/logo_tsp.png" height="100px"><img src="images/logo/logo_tsp.png" height="100px" alt=""></a>

        </div>

        <!--main menu-->

        <div class="menu-holder">

          <div class="menu-wrap flex-row">

            <div class="nav-item">

              <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

              <nav id="main-navigation" class="main-navigation">
                <ul id="menu" class="clearfix">
                  <li><a href="index.php">Home</a>
                    <!--sub menu-->
                  </li>
                  <li class="dropdown has-megamenu"><a href="#">Inventory</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap mega-menu full-width-menu">
                      <div class="mega-submenu">
                        <h5>Inventory</h5>

                        <h5>Type</h5>
                        <ul>
                          <li><a href="#">All</a></li>
                          <li><a href="#">Sedans</a></li>
                          <li><a href="#">Coupes</a></li>
                          <li><a href="#">SUVs</a></li>
                          <li><a href="#">BUS</a></li>
                          <li><a href="#">VAN</a></li>
                        </ul>
                      </div>
                      <div class="mega-submenu">
                        <ul>
                          <li><a href="#">Hybrids</a></li>
                          <li><a href="#">Convertibles</a></li>
                          <li><a href="#">Sports Cars</a></li>
                          <li><a href="#">Minivan</a></li>
                          <li><a href="#">Vans</a></li>
                          <li><a href="#">Luxury Cars</a></li>
                        </ul>
                      </div>
                      <div class="mega-submenu">
                        <h5>By Make</h5>
                        <ul>
                          <li><a href="#">All</a></li>
                          <li><a href="#">Acura</a></li>
                          <li><a href="#">Alfa Romeo</a></li>
                          <li><a href="#">Aston Martin</a></li>
                          <li><a href="#">Audi</a></li>
                          <li><a href="#">Bentley</a></li>
                        </ul>
                      </div>
                      <div class="mega-submenu">
                        <ul>
                          <li><a href="#">BMW</a></li>
                          <li><a href="#">Buick</a></li>
                          <li><a href="#">Cadillac</a></li>
                          <li><a href="#">Chevrolet</a></li>
                          <li><a href="#">Chrysler</a></li>
                          <li><a href="#">Dodge</a></li>
                        </ul>
                      </div>
                      <div class="mega-submenu">
                        <ul>
                          <li><a href="#">Ferrari</a></li>
                          <li><a href="#">FIAT</a></li>
                          <li><a href="#">Ford</a></li>
                          <li><a href="#">Genesis</a></li>
                          <li><a href="#">GMC</a></li>
                          <li><a href="#">Honda</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown has-megamenu"><a href="#">Pages</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap mega-menu">
                      <div class="mega-submenu">
                        <h5>Main Pages</h5>
                        <ul>
                          <li><a href="about.html">About Us</a></li>
                          <!-- <li><a href="our_staff.html">Our Staff</a></li> -->
                          <!-- <li><a href="services.html">Services</a></li> -->
                          <li><a href="contact.php">Contact Us</a></li>
                          <!-- <li><a href="pricing.html">Pricing</a></li> -->
                        </ul>
                      </div>

                    </div>
                  </li>
                  <li class="dropdown"><a href="#">Reviews</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap">
                      <ul>
                        <li><a href="review_list.html">List View</a></li>
                        <!-- 
                          <li><a href="review_single.html">Single Review Post</a></li> -->
                      </ul>
                    </div>
                  </li>

                  <!-- <li class="dropdown"><a href="#">Shop</a> -->
                  <!--sub menu-->
                  <!-- <div class="sub-menu-wrap">
                      <ul>
                        <li class="sub"><a href="#">Category Page</a> -->
                  <!--sub menu-->
                  <!-- <div class="sub-menu-wrap sub-menu-inner">
                            <ul>
                              <li><a href="shop_front_grid.html">Grid View</a></li>
                              <li><a href="shop_front_list.html">List View</a></li>
                            </ul>
                          </div>
                        </li>
                        <li><a href="shop_product_page.html">Product Page</a></li> -->
                  <!-- <li><a href="shop_cart.html">Cart</a></li> -->
                  <!-- <li><a href="shop_checkout.html">Checkout</a></li>
                        <li><a href="shop_account.html">My Account</a></li> -->
                  <!-- </ul>
                    </div>
                  </li>-->
                </ul>
              </nav>

              <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

            </div>

            <div class="contact-info-menu">

              <div class="contact-info-item">

                <div class="flex-row flex-center">

                  <i class="licon-telephon"></i>
                  <div class="item-inner">
                    <span>Call Us Today</span>
                    <a href="callto:#"><b>+255 754 441 146 </b></a>
                  </div>

                </div>

              </div>
              <div class="contact-info-menu">

                <div class="contact-info-item">

                  <div class="flex-row flex-center">

                    <i class="sticky-whatsapp-icon"></i>
                    <div class="item-inner">
                      <span>Send Message Us Today</span>
                      <a href="https://api.whatsapp.com/send?phone=0754441146">+255 754 441 146</a>
                    </div>

                  </div>

                </div>
                <div class="contact-info-item lang-button">

                  <div class="flex-row flex-center">

                    <i class="licon-earth"></i>
                    <div class="item-inner">
                      <a href="#">Language</a>
                      <ul class="dropdown-list">
                        <li><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Spanish</a></li>
                      </ul>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

    </header>

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->






    <div class="media-holder" data-bg="images/1920x800_bg1.jpg">


      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="./images/car4 (1).JPG" style="width:100%;">
          <div class="text">Tg good and qulity product</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="./images/car4 (2).JPG" style="width:100%;">
          <div class="text">Tg good and qulity product</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="./images/car4 (6).JPG" style="width:100%;">
          <div class="text">Tg good and qulity product</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="./images/car4 (4).JPG" style="width:100%;">
          <div class="text">Tg good and qulity product</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="./images/cars-vs.png" style="width:100%;">
          <div class="text">Tg good and qulity product</div>
        </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>

      </div>


      <div class="container">

        <div class="content-element6 align-center">
          <h1>Best Place To Shop <br><span>For Your Next Vehicle!</span></h1>
          <!-- <h4>Find Car. Add to Cart. Free Delivery.</h4> -->
        </div>

        <div class="tabs type-2 tabs-section clearfix">
          <!--tabs navigation-->
          <div class="tabs-nav clearfix no-tab">
            <div class="active">116579 Vehicles for Sale</div>
            <a href="#">Advanced Search</a>
          </div>
          <!--tabs content-->
          <div class="tabs-content">
            <div id="tab-1">
              <form action="car_list.php" method="POST">

                <div class="select-area">

                  <div class="select-col">

                    <div class="auto-custom-select">
                      <select data-default-text="manufaturer" name="manufacturer" required>
                        <?php
                        foreach ($manufacture as $ma) {
                        ?>
                          <option value=<?php echo $ma['id']; ?>><?php echo $ma['Name']; ?></option>

                        <?php
                        }
                        ?>
                      </select>
                    </div>

                  </div>

                  <div class="select-col">

                    <div class="auto-custom-select">
                      <select data-default-text="model" name="model" required>
                        <?php
                        foreach ($model as $m) {
                        ?>
                          <option value=<?php echo $m['id']; ?>><?php echo $m['name']; ?></option>

                        <?php
                        }
                        ?>
                      </select>
                    </div>

                  </div>

                  <!-- <div class="select-col">
                  
                  <div class="auto-custom-select">
                    <select data-default-text="type">
                   
                   
                    </select>
                  </div>
                  
                </div> -->

                  <!-- <div class="select-col">
                  
                  <div class="auto-custom-select">
                    <select data-default-text=" Models">
                      
                     </select>
                  </div>
                  
                </div> -->

                  <div class="select-col">

                    <div class="auto-custom-select">
                      <select data-default-text="Price" name="Price" required>
                        <?php
                        foreach ($price as $p) {
                        ?>
                          <option value=<?php echo $p['id']; ?>><?php echo $p['name']; ?></option>

                        <?php
                        }
                        ?>


                      </select>
                    </div>

                  </div>

                  <div class="select-col">

                    <div class="auto-custom-select">
                      <select data-default-text="Year" name="Year" required>
                        <?php
                        foreach ($year as $y) {
                        ?>
                          <option value=<?php echo $y['id']; ?>><?php echo $y['name']; ?></option>

                        <?php
                        }
                        ?>
                      </select>
                    </div>

                  </div>

                  <div class="select-col">

                    <div class="auto-custom-select">
                      <!-- <select data-default-text="type">
                       <?php
                        foreach ($type as $t) {
                        ?>
                          <option value=<?php echo $t['id']; ?>><?php echo $t['type']; ?></option>
   
                          <?php
                        }
                          ?>
                    </select> -->
                      <select data-default-text="type" name="type" required>
                        <?php
                        foreach ($type as $t) {
                        ?>
                          <option value=<?php echo $t['id']; ?>><?php echo $t['name']; ?></option>

                        <?php
                        }
                        ?>
                      </select>
                    </div>

                  </div>

                  <div class="select-col">
                    <button type="submit">
                      <a class="btn btn-style-2"><i class="licon-magnifier"></i>Search</a>

                    </button>

                  </div>

                </div>
              </form>

            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">

      <div class="page-section">

        <div class="container">

          <div class="content-element2">

            <div class="row flex-row flex-center">
              <div class="col-md-4 col-sm-6">
                <h2 class="section-title size-big">Welcome to <br> Tg world</h2>
              </div>
              <div class="col-md-8 col-sm-6">
                <p class="text-size-medium">Tg World International Ltd Is Dedicated to Bring What you have been dreaming to the real thing.</p>

                <p class="text-size-medium">Apart From Importing and Selling Cars,We Also Sell Properties under our sister company Tg World Real Estate Agency.
                </p>
                <p class="text-size-medium">We Have more than 15 Years Of Exprience in Both Fields.</p>
              </div>
            </div>

          </div>

          <div class="page-section">

            <div class="content-element5">

              <div class="container">

                <h3 class="section-title">Popular cars from the brands you love</h3>

                <div class="brend-section flex-row row">

                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend1.png" alt=""></figure>
                      <h6>Audi</h6>
                      <ul>
                        <li><a href="#">A3</a></li>
                        <li><a href="#">A3</a></li>
                        <li><a href="#">A3</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend2.png" alt=""></figure>
                      <h6>BMW</h6>
                      <ul>
                        <li><a href="#">1 Series</a></li>
                        <li><a href="#">3 Series</a></li>
                        <li><a href="#">5 Series</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend3.png" alt=""></figure>
                      <h6>Citroen</h6>
                      <ul>
                        <li><a href="#">C1</a></li>
                        <li><a href="#">C3</a></li>
                        <li><a href="#">DS3</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/Higer.PNG" alt=""></figure>
                      <h6>Higer</h6>
                      <ul>
                        <li><a href="#">KLQ6858 </a></li>
                        <li><a href="#">KLQ6755</a></li>
                        <li><a href="#">KLQ6952K</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/Toyota.png" alt=""></figure>
                      <h6>Toyota</h6>
                      <ul>
                        <li><a href="#">Carolla</a></li>
                        <li><a href="#">Rav4</a></li>
                        <li><a href="#">Prius</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend6.png" alt=""></figure>
                      <h6>Ford</h6>
                      <ul>
                        <li><a href="#">Ka</a></li>
                        <li><a href="#">Fiesta</a></li>
                        <li><a href="#">Focus</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend7.png" alt=""></figure>
                      <h6>Volkswagen</h6>
                      <ul>
                        <li><a href="#">Golf</a></li>
                        <li><a href="#">Passat</a></li>
                        <li><a href="#">Polo</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend8.png" alt=""></figure>
                      <h6>Honda</h6>
                      <ul>
                        <li><a href="#">Auris</a></li>
                        <li><a href="#">AUGO</a></li>
                        <li><a href="#">Yaris</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend9.png" alt=""></figure>
                      <h6>Renault</h6>
                      <ul>
                        <li><a href="#">Megane</a></li>
                        <li><a href="#">Laguna</a></li>
                        <li><a href="#">Espace</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend10.png" alt=""></figure>
                      <h6>Peugeot</h6>
                      <ul>
                        <li><a href="#">207</a></li>
                        <li><a href="#">208</a></li>
                        <li><a href="#">308</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend11.png" alt=""></figure>
                      <h6>Nissan</h6>
                      <ul>
                        <li><a href="#">Juke</a></li>
                        <li><a href="#">Micra</a></li>
                        <li><a href="#">Qashqai</a></li>
                      </ul>

                    </div>

                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6">

                    <div class="brend-item">

                      <figure><img src="images/brend12.png" alt=""></figure>
                      <h6>Mercedes-Benz</h6>
                      <ul>
                        <li><a href="#">A Class</a></li>
                        <li><a href="#">B Class</a></li>
                        <li><a href="#">C Class</a></li>
                      </ul>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="container type-2">

              <div class="row">

                <div class="col-sm-4">
                  <a href="#"><img src="images/300x250_img1.jpg" alt=""></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="images/300x250_img2.jpg" alt=""></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="images/300x250_img3.jpg" alt=""></a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="page-section-bg">

        <h2 class="section-title align-center">Featured Car Inventory</h2>

        <div class="car-carousel">

          <div class="tabs tabs-section clearfix">
            <div class="container">

              <div class="flex-row flex-justify">

                <!--tabs navigation-->
                <ul class="tabs-nav clearfix">
                  <li class="">
                    <a href="#tab-3">All</a>
                  </li>
                  <li class="">
                    <a href="#tab-4">New</a>
                  </li>
                  <li class="">
                    <a href="#tab-5">Used</a>
                  </li>
                </ul>

                <a href="#" class="btn">Show All</a>

              </div>

            </div>
            <!--tabs content-->
            <div class="tabs-content">
              <div id="tab-3">

                <div class="carousel-type-3">

                  <div class="owl-carousel container" data-max-items="4" data-item-margin="30">

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2008 TOYOTA COROLLA RUMION</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.0)</div>
                            <a href="#" class="review">3 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $26,459
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">41</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture2.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2008 MERCIDES BENZ E250</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">1 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $21,035
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">19</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture3.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2003 TOYOTA RAUM</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $52,529
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">24</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture8.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Honda Odyssey</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">2 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $29,929
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">22</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture5.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 BMW X3</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $43,291
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">30</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/Inventory/Capture7.JPG" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Lexus CT 200h</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(3.0)</div>
                            <a href="#" class="review">5 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $32,199
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">42</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                  </div>

                </div>

              </div>
              <div id="tab-4">

                <div class="carousel-type-3">

                  <div class="owl-carousel container" data-max-items="4" data-item-margin="30">

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img1.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Ford Fusion Hybrid</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.0)</div>
                            <a href="#" class="review">3 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $26,459
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">41</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img2.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2017 Chevrolet Colorado</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">1 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $21,035
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">19</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img3.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Porsche Boxster</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $52,529
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">24</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img4.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Honda Odyssey</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">2 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $29,929
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">22</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img5.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 BMW X3</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $43,291
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">30</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img6.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Lexus CT 200h</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(3.0)</div>
                            <a href="#" class="review">5 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $32,199
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">42</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                  </div>

                </div>

              </div>
              <div id="tab-5">

                <div class="carousel-type-3">

                  <div class="owl-carousel container" data-max-items="4" data-item-margin="30">

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img1.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Ford Fusion Hybrid</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.0)</div>
                            <a href="#" class="review">3 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $26,459
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">41</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img2.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2017 Chevrolet Colorado</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">1 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $21,035
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">19</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img3.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Porsche Boxster</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $52,529
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">24</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img4.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Honda Odyssey</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(5.0)</div>
                            <a href="#" class="review">2 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $29,929
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">22</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img5.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 BMW X3</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty-half"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(4.5)</div>
                            <a href="#" class="review">7 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $43,291
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">30</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                    <!-- Slide -->
                    <div class="item-carousel">
                      <!-- Carousel Item -->
                      <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                      <div class="product">

                        <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                        <a href="#"><img src="images/289x190_img6.jpg" alt=""></a>
                        <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                        <div class="product-description">

                          <h5 class="product-name"><a href="#">2016 Lexus CT 200h</a></h5>

                          <div class="rating-area">

                            <ul class="rating">
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                              <li class="empty"><i class="licon-star"></i></li>
                            </ul>
                            <div class="rating-number">(3.0)</div>
                            <a href="#" class="review">5 review</a>

                          </div>
                          <div class="pricing-area">

                            <div class="product-price">
                              <span>STARTING MSRP</span>
                              $32,199
                            </div>
                            <div class="mpg">
                              <span>COMBINED MPG</span>
                              <a href="#">42</a>
                            </div>

                          </div>
                          <div class="model-info">

                            <a href="#">Model Details</a>
                            <a href="#">Model For Sale</a>

                          </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                      </div>
                      <!-- /Carousel Item -->
                    </div>
                    <!-- /Slide -->

                  </div>

                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="page-section">

        <div class="container">

          <div class="content-element4">

            <div class="banner-area">

              <div class="row">
                <div class="col-sm-4">
                  <a href="#"><img src="images/banner1.jpg" alt=""></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="images/banner2.jpg" alt=""></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="images/banner3.jpg" alt=""></a>
                </div>
              </div>

            </div>

          </div>

          <div class="content-element4">

            <div class="title-holder align-center">
              <h2 class="section-title">Car Reviews, Videos & Advice</h2>
              <p class="text-size-medium">Our expert reviewers report back with the latest.</p>
            </div>

            <div class="review-section">

              <div class="row">
                <div class="col-sm-8">

                  <article class="entry review-item">

                    <div class="review-label">
                      4.5<span>out of 5</span>
                    </div>

                    <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->

                    <div class="entry-attachment">

                      <figure class="thumbnail-attachment"><img src="images/Inventory/Capture5.JPG" alt=""></figure>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                    <div class="entry-body">

                      <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                      <div class="entry-meta">

                        <time class="entry-date" datetime="2016-01-12">October 28, 2018</time>

                      </div>

                      <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                      <h4 class="entry-title"><a href="#">Aliquam Dapibus Tincidunt Metus</a></h4>

                      <!-- - - - - - - - - - - - - - Entry Excerpt - - - - - - - - - - - - - - - - -->

                      <div class="entry-content">

                        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. <a href="#" class="info-btn">Read More</a></p>

                      </div>

                      <!-- - - - - - - - - - - - - - End of Entry Excerpt - - - - - - - - - - - - - - - - -->

                    </div>

                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                  </article>

                </div>
                <div class="col-sm-4">

                  <article class="entry review-item">

                    <div class="review-label size2">
                      4.9<span>out of 5</span>
                    </div>

                    <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->

                    <div class="entry-attachment">

                      <figure class="thumbnail-attachment"><img src="images/Inventory/Capture6.JPG" alt=""></figure>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                    <div class="entry-body">

                      <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                      <div class="entry-meta">

                        <time class="entry-date" datetime="2016-01-12">October 28, 2018</time>

                      </div>

                      <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                      <h5 class="entry-title"><a href="#">Mauris Fermentum Dictum Magna</a></h5>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                  </article>

                  <article class="entry review-item">

                    <div class="review-label size2">
                      3.2<span>out of 5</span>
                    </div>

                    <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->

                    <div class="entry-attachment">

                      <figure class="thumbnail-attachment"><img src="images/Inventory/Capture4.JPG" alt=""></figure>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                    <div class="entry-body">

                      <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                      <div class="entry-meta">

                        <time class="entry-date" datetime="2016-01-12">October 14, 2018</time>

                      </div>

                      <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                      <h5 class="entry-title"><a href="#">Mauris Fermentum Dictum Magna</a></h5>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                  </article>

                </div>
              </div>

            </div>

            <div class="align-center">
              <!-- <a href="#" class="btn">More Reviews</a> -->
            </div>

          </div>

        </div>

      </div>

      <!-- Google map -->
      <div class="map-section">

        <div id="googleMa" class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.881618720867!2d39.21805487102354!3d-6.784258251322052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4fd3dedc09ed%3A0xf2669a7e964249c9!2sPR%20COMPLEX%20-%20SINZA!5e0!3m2!1sen!2stz!4v1687293384728!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="map-direction">
          <div class="container">
            <div class="row flex-row flex-center">
              <div class="col-sm-6">

                <!-- <h3><span>Get Directions</span> to Auto Trader</h3> -->

              </div>
              <div class="col-sm-6">


                <form action="https://www.google.com/maps/dir//2032+S+Elliott+Ave,+Aurora,+MO+65605/@36.9487043,-93.7878472,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x87cf4b1a194c90e1:0xba30bfe0c0a857c!2m2!1d-93.7178072!2d36.9487249" class="lineform" method="get" target="_blank">
                  <!-- <button type="submit" class="btn btn-style-2 f-right">Go</button> -->
                  <div class="wrapper">
                    <!-- <input type="text" placeholder="Enter your starting address"> -->
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <!-- <footer id="footer" class="footer">
      
      <!-Top footer -->
    <!-- <div class="top-footer">
        
        <div class="container">
          
          <div class="row">

            <div class="col-md-3 col-sm-6">
              
              <div class="widget"> -->

    <!-- <div class="content-element3">
                  <h5 class="widget-title">Contact Us</h5>
                  <p>
                    <span class="sub-title">Auto Trader Inc.</span>
                    9863 - 9867 Mill Road, Cambridge, <br> MG09 99HT 
                  </p>
                </div>
                <div class="content-element3">
                  <ul class="contact-list">
                    <li><span>Phone:</span>800 603 6035</li>
                    <li><span>FAX:</span>800 889 9898 </li>
                    <li><span>E-mail:</span><a href="mailto:#" class="link-text">mail@companyname.com</a></li>
                  </ul>
                </div>
                
              </div>

            <!-</div> -->
    <!-- <div class="col-md-3 col-sm-6">
              
              <div class="widget">
                <div class="content-element3">
                  <h5 class="widget-title">Opening Hours</h5>
                  <p>
                    <span class="sub-title">Sales:</span>
                    Mon - Sat: 9:00 AM - 6:00 PM <br> Sunday is closed 
                  </p>
                </div>
                <div class="content-element3">
                  <p>
                    <span class="sub-title">Service:</span>
                    Mon - Sat: 9:00 AM - 6:00 PM <br> Sunday is closed 
                  </p>
                </div>
              </div> -->

    <!-- </div>
            <div class="col-md-3 col-sm-6">

              <div class="widget">
                <h5 class="widget-title">Services</h5>
                <ul class="info-links">
                      
                  <li><a href="#">New Cars For Sale</a></li>
                  <li><a href="#">Pre-owend Cars</a></li>
                  <li><a href="#">Sell My Car</a></li>
                  <li><a href="#">Car Valuations</a></li>
                  <li><a href="#">Financing & Insurance</a></li>
                  <li><a href="#">Service & Repair</a></li>

                </ul>
              </div>

            </div>
            <div class="col-md-3 col-sm-6">
              
              <div class="widget">
                <h5 class="widget-title">Connect With Us</h5>
                <ul class="social-icons"> -->

    <!-- <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                  <li><a href="#"><i class="icon-gplus-3"></i></a></li>
                  <li><a href="#"><i class="icon-instagram-5"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin-3"></i></a></li> -->

    </ul>
    <!-- </div> -->

    <!-- <div class="widget">
                <h5 class="widget-title">Newsletter Sign Up</h5>
                <form id="newsletter">
                  <button type="submit" class="btn-email btn btn-style-2 f-right" data-type="submit"><i class="licon-envelope"></i></button>
                  <div class="wrapper">
                    <input type="email" placeholder="Enter your email address" name="newsletter-email">
                  </div>  -->
    </form>
  </div>

  </div>

  </div>

  </div>
  </div>

  <!-- Copyright -->
  <div class="copyright-section">

    <div class="container">

      <div class="flex-row flex-justify flex-center">

        <div class="copyright">Copyright td world © 2018. All Rights Reserved.</div>

        <ul class="info-links hr-type">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Careers</a></li>
          <!-- <li><a href="#">FAQ</a></li> -->
          <!-- <li><a href="#">News & Tips</a></li> -->
          <!-- <li><a href="#">Site Map</a></li> -->
          <li><a href="#">Contact</a></li>
        </ul>

      </div>

    </div>

    <a href="#" class="btn btn-big btn-style-3"><i class="licon-bubbles"></i>Chat With Us</a>

  </div>

  </footer>

  <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  <script src="js/libs/jquery.modernizr.js"></script>
  <script src="js/libs/jquery-2.2.4.min.js"></script>
  <script src="js/libs/jquery-ui.min.js"></script>
  <script src="js/libs/retina.min.js"></script>
  <script src="plugins/mad.customselect.js"></script>
  <script src="plugins/sticky-sidebar.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBN4XjYeIQbUspEkxCV2dhVPSoScBkIoic"></script>
  <script src="plugins/owl.carousel.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/instafeed.min.js"></script>
  <script src="plugins/twitter/jquery.tweet.js"></script>

  <!-- JS theme files
  ============================================ -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      autoplay: {
        delay: 3000
      }
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  </script>
</body>
< /html>