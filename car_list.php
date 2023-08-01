<!doctype html>
<html lang="en">

<!-- Google Web Fonts
  ================================================== -->

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7COverpass:300,400,600,700,800,900" rel="stylesheet">

<!-- Basic Page Needs
  ================================================== -->

<title>TG WORLD</title>

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
<link rel="stylesheet" href="css/responsive.css">

</head>

<body class="page-section-bg">

  <?php
  $manafucturer = $_POST["manufacturer"];
  $model = $_POST["model"];
  $type = $_POST["type"];
  $Year = $_POST["Year"];
  $Price = $_POST["Price"];
  //$dbname= "tg";
  $conn = mysqli_connect("localhost", "root", "", "tg");
  if (!$conn) {
    die("could not connect: " . mysql_error());
  }

  //new statement used for joining three tables in order to get valid data
  $all_tables = "SELECT  stock.image as image, price.name as price, type.name  as type FROM stock
JOIN price ON stock.price_id = price.id
JOIN type ON stock.type_id = type.id WHERE price.id = '$Price' AND type.id = '$type'";
  $joined_tables_data = mysqli_query($conn, $all_tables)
  ?>

  <div id="loader">
    <div class="box loading"></div>
  </div>

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

    <header id="header" class="header-3">

      <!-- top-bar -->

      <div class="top-bar">

        <div class="container">

          <div class="flex-row flex-justify flex-center">

            <div class="contact-info-menu type-2">

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

            <div class="slash-list">
              <span>My tg world: </span>
              <a href="#">Sign in</a>
              <a href="#">Sign up</a>
            </div>

          </div>

        </div>

      </div>

      <!-- top-header -->

      <div class="top-header">

        <div class="container">

          <div class="row flex-row flex-justify flex-center">
            <div class="col-sm-4">

              <!-- logo -->

              <div class="logo-wrap">

                <a href="index.php" class="logo"><img src="images/logo/logo.JPG" alt=""></a>

              </div>

            </div>
            <div class="col-sm-8">

              <div class="align-right"><a href="index.php"><img src="images/banner4.jpg" alt=""></a></div>

            </div>
          </div>

        </div>

      </div>

      <!--main menu-->

      <div class="menu-holder">

        <div class="container">

          <div class="menu-wrap">

            <div class="nav-item">

              <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

              <nav id="main-navigation" class="main-navigation">
                <ul id="menu" class="clearfix">
                  <li><a href="index.php">Home</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap">
                      <ul>

                        <!--sub menu-->
                        <div class="sub-menu-wrap sub-menu-inner">

                        </div>
                  </li>

                  <!--sub menu-->
                  <div class="sub-menu-wrap sub-menu-inner">
                    <ul>
                      <li><a href="index.html">Header 1</a></li>
                      <li><a href="home_2.html">Header 2</a></li>
                      <li><a href="home_3.html">Header 3</a></li>
                      <li><a href="home_4.html">Header 4</a></li>
                    </ul>
                  </div>
                  </li>

                  <!--sub menu-->
                  <div class="sub-menu-wrap sub-menu-inner">
                    <ul>
                      <li><a href="index.html">Footer 1</a></li>
                      <li><a href="home_2.html">Footer 2</a></li>
                      <li><a href="home_3.html">Footer 3</a></li>
                      <li><a href="home_4.html">Footer 4</a></li>
                    </ul>
                  </div>
                  </li>
                </ul>
            </div>
            </li>
            <li class="current dropdown has-megamenu"><a href="#">Inventory</a>
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
                    <li><a href="about.php">About Us</a></li>
                    <!-- <li><a href="our_staff.html">Our Staff</a></li> -->
                    <!-- <li><a href="services.html">Services</a></li> -->
                    <li><a href="contact.php">Contact Us</a></li>
                    <!-- <li><a href="pricing.html">Pricing</a></li> -->
                  </ul>
                </div>


            </li>
            <li class="dropdown"><a href="#">Reviews</a>
              <!--sub menu-->
              <div class="sub-menu-wrap">
                <ul>
                  <li><a href="review_list.html">List View</a></li>
                  <!-- <li><a href="review_single.html">Single Review Post</a></li> -->
                </ul>
              </div>
            </li>

            </ul>
            </nav>
            <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

          </div>

        </div>

      </div>

  </div>

  </header>

  <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

  <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

  <div id="content" class="page-content-wrap">

    <div class="container">

      <div class="row">

        <aside id="sidebar" class="sbl style-2 col-md-3 col-sm-12">

          <div class="filter-section">

            <div class="accordion toggle no-of">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Location</h6>
                <div class="a-content">
                  <form>

                    <div class="cols-wrap">

                      <div class="col">
                        <label>Search within</label>
                        <div class="auto-custom-select">
                          <select data-default-text="10 miles">
                            <option value="menu">Option 1</option>
                            <option value="menu">Option 2</option>
                            <option value="menu">Option 3</option>
                          </select>
                        </div>
                      </div>
                      <div class="col">
                        <label>ZIP code</label>
                        <input type="text" placeholder="60606">
                      </div>

                    </div>

                  </form>
                </div>
              </div>

            </div>/

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Condition</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-1" id="checkbox-1" checked="">
                    <label for="checkbox-1">New</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-2" id="checkbox-2">
                    <label for="checkbox-2">Used</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-3" id="checkbox-3">
                    <label for="checkbox-3">Certified Pre-Owned</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Year</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-4" id="checkbox-4" checked="">
                    <label for="checkbox-4">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-5" id="checkbox-5">
                    <label for="checkbox-5">2018</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-6" id="checkbox-6">
                    <label for="checkbox-6">2017</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-7" id="checkbox-7">
                    <label for="checkbox-7">2016</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-8" id="checkbox-8">
                    <label for="checkbox-8">2015</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-9" id="checkbox-9">
                    <label for="checkbox-9">2014</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-10" id="checkbox-10">
                    <label for="checkbox-10">2013</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-11" id="checkbox-11">
                    <label for="checkbox-11">2012</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-12" id="checkbox-12">
                    <label for="checkbox-12">2011</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-13" id="checkbox-13">
                    <label for="checkbox-13">2010</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Make</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-14" id="checkbox-14" checked>
                    <label for="checkbox-14">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-15" id="checkbox-15">
                    <label for="checkbox-15">Acura</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-16" id="checkbox-16">
                    <label for="checkbox-16">Alfa Romeo </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-17" id="checkbox-17">
                    <label for="checkbox-17">Am General </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-18" id="checkbox-18">
                    <label for="checkbox-18">Aston Martin </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-19" id="checkbox-19">
                    <label for="checkbox-19">Audi </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-20" id="checkbox-20">
                    <label for="checkbox-20">Bentley</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-21" id="checkbox-21">
                    <label for="checkbox-21">BMW</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-22" id="checkbox-22">
                    <label for="checkbox-22">Lexus</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-23" id="checkbox-23">
                    <label for="checkbox-23">Toyota</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-24" id="checkbox-24">
                    <label for="checkbox-24">Mitsubishi</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Model</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-25" id="checkbox-25" checked="">
                    <label for="checkbox-25">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-26" id="checkbox-26">
                    <label for="checkbox-26">1 Series M</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-27" id="checkbox-27">
                    <label for="checkbox-27">124 Spider </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-28" id="checkbox-28">
                    <label for="checkbox-28">128 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-29" id="checkbox-29">
                    <label for="checkbox-29">135 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-30" id="checkbox-30">
                    <label for="checkbox-30">1500 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-31" id="checkbox-31">
                    <label for="checkbox-31">190 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-32" id="checkbox-32">
                    <label for="checkbox-32">1900 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-33" id="checkbox-33">
                    <label for="checkbox-33">190 </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-34" id="checkbox-34">
                    <label for="checkbox-34">1900 </label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle no-of">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Price</h6>
                <div class="a-content">

                  <!--price-->
                  <fieldset class="price-scale">
                    <div class="clearfix range-values">
                      <input class="f-left first-limit" readonly type="text" value="$1,000">
                      <input class="f-right last-limit" readonly type="text" value="$99,000">
                    </div>
                    <div id="price"></div>
                  </fieldset>

                </div>
              </div>

            </div>

            <div class="accordion toggle no-of">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Mileage</h6>
                <div class="a-content">

                  <form>

                    <div class="auto-custom-select">
                      <select data-default-text="Any">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>

                  </form>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Body Style</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-35" id="checkbox-35" checked="">
                    <label for="checkbox-35">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-36" id="checkbox-36">
                    <label for="checkbox-36">Cargo Van </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-37" id="checkbox-37">
                    <label for="checkbox-37">Convertible </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-38" id="checkbox-38">
                    <label for="checkbox-38">Coupe </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-39" id="checkbox-39">
                    <label for="checkbox-39">Crew Cab Pickup</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-30" id="checkbox-40">
                    <label for="checkbox-40">Extended Cab Pickup</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-41" id="checkbox-41">
                    <label for="checkbox-41">Hatchback </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-42" id="checkbox-42">
                    <label for="checkbox-42">Minivan</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-43" id="checkbox-43">
                    <label for="checkbox-43">Sedan</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-44" id="checkbox-44">
                    <label for="checkbox-44">Crossover</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Drivetrain</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-45" id="checkbox-45" checked="">
                    <label for="checkbox-45">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-46" id="checkbox-46">
                    <label for="checkbox-46">4x2/2-wheel drive </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-47" id="checkbox-47">
                    <label for="checkbox-47">4x4/4-wheel drive</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-48" id="checkbox-48">
                    <label for="checkbox-48">AWD</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-49" id="checkbox-49">
                    <label for="checkbox-49">FWD</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-50" id="checkbox-50">
                    <label for="checkbox-50">RWD</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-51" id="checkbox-51">
                    <label for="checkbox-51">Unknown</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Transmission</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-52" id="checkbox-52" checked="">
                    <label for="checkbox-52">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-53" id="checkbox-53">
                    <label for="checkbox-53">Manual</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-54" id="checkbox-54">
                    <label for="checkbox-54">Automatic</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-55" id="checkbox-55">
                    <label for="checkbox-55">Automanual</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-56" id="checkbox-56">
                    <label for="checkbox-56">CVT</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-57" id="checkbox-57">
                    <label for="checkbox-57">Other / Unknown</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Exterior Color</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-58" id="checkbox-58" checked="">
                    <label for="checkbox-58">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-59" id="checkbox-59">
                    <label for="checkbox-59">Beige</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-60" id="checkbox-60">
                    <label for="checkbox-60">Black</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-61" id="checkbox-61">
                    <label for="checkbox-61">Blue</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-62" id="checkbox-62">
                    <label for="checkbox-62">Brown </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-63" id="checkbox-63">
                    <label for="checkbox-63">Gold </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-64" id="checkbox-64">
                    <label for="checkbox-64">Gray </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-65" id="checkbox-65">
                    <label for="checkbox-65">Green </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-66" id="checkbox-66">
                    <label for="checkbox-66">Red </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-67" id="checkbox-67">
                    <label for="checkbox-67">Yellow </label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Interior Color</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-68" id="checkbox-68" checked="">
                    <label for="checkbox-68">Any</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-69" id="checkbox-69">
                    <label for="checkbox-69">Beige</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-70" id="checkbox-70">
                    <label for="checkbox-70">Black</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-71" id="checkbox-71">
                    <label for="checkbox-71">Blue</label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-72" id="checkbox-72">
                    <label for="checkbox-72">Brown </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-73" id="checkbox-73">
                    <label for="checkbox-73">Gold </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-74" id="checkbox-74">
                    <label for="checkbox-74">Gray </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-75" id="checkbox-75">
                    <label for="checkbox-75">Green </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-76" id="checkbox-76">
                    <label for="checkbox-76">Red </label>

                  </div>

                  <div class="input-wrapper">

                    <input type="checkbox" name="checkbox-77" id="checkbox-77">
                    <label for="checkbox-77">Yellow </label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Photos</h6>
                <div class="a-content">

                  <div class="input-wrapper">

                    <input type="radio" name="radio-1" id="radio-1">
                    <label for="radio-1">Only show cars with photos</label>

                  </div>

                </div>
              </div>

            </div>

            <div class="accordion toggle">

              <!--accordion item-->
              <div class="accordion-item">
                <h6 class="a-title active">Keywords</h6>
                <div class="a-content">

                  <form>

                    <input type="text" placeholder="Additional keywords">

                  </form>

                </div>
              </div>

            </div>

          </div>

        </aside>
        <main id="main" class="col-md-9 col-sm-12">

          <div class="dealers-section product-type">

            <h3 class="section-title"> vehicles for sale &nbsp; <a href="#" class="info-btn">Change Location</a></h3>

            <!-- dealer sorting -->

            <div class="flex-row flex-justify">

              <div class="sort-dealer">

                <div class="sort-col">

                  <div class="flex-row flex-center">

                    <!-- <span>Sort by</span>
                      <div class="auto-custom-select">
                        <select data-default-text="Price: highest first">
                          <option value="menu">Option 1</option>
                          <option value="menu">Option 2</option>
                          <option value="menu">Option 3</option>
                        </select>
                      </div> -->

                  </div>

                  <!-- </div>
                  <div class="sort-col">

                    <div class="flex-row flex-center">
                      
                      <span>Per page</span>
                      <div class="auto-custom-select">
                        <select data-default-text="12">
                          <option value="menu">1</option>
                          <option value="menu">2</option>
                          <option value="menu">3</option>
                        </select>
                      </div>

                    </div>
                    
                  </div> -->

                </div>

                <div class="settings-view-products">

                  <div class="sort-criteria">

                    <div class="view-type">

                      <a href="#" title="grid View" data-view="grid" data-target="#product-holder"><i class="licon-icons"></i></a>

                      <a href="#" title="list View" data-view="list" data-target="#product-holder" class="active"><i class="licon-menu2"></i></a>

                    </div>

                  </div><!--/ .sort-criteria -->

                </div>

              </div>

            </div>

            <div id="product-holder" class="products-holder view-list">

              <div class="row flex-row">

                <?php
                foreach ($joined_tables_data as $data) {
                ?>
                  <div class="col-sm-4 col-xs-6">




                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                    <div class="product">

                      <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                      <figure class="product-image">
                        <a href="#"><img src="images/<?php echo $data['image']; ?>" alt=""></a>
                        <div class="overlay full-width-block">
                          <div class="icon-fancy">
                            <a href="images/360x236_img1.jpg" class="fancybox" data-fancybox="group"><i class="licon-camera2"></i><span>7</span></a>
                            <a href="#"><i class="licon-camera"></i><span>1</span></a>
                          </div>
                          <div>
                            <a href="#"><i class="licon-heart"></i></a>
                            <a href="#"><i class="licon-copy"></i></a>
                          </div>
                        </div>
                      </figure>
                      <!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->

                      <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                      <div class="product-description">

                        <div class="row">
                          <div class="col-xs-8">

                            <h5 class="product-name"><a href="#"> <?php echo $data['type']; ?></a></h5>

                            <div class="pricing-area">

                              <div class="product-price">
                                <?php echo $data['price']; ?>
                              </div>

                            </div>
                            <div class="pricing-area">

                              <div class="mpg">
                                <span>Stock #</span>
                                XR692
                              </div>
                              <div class="mpg">
                                <span>Mileage</span>
                                36,000
                              </div>

                            </div>

                            <p>Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</p>

                            <div class="brends flex-row flex-center">
                              <a href="#"><img src="images/93x41_img1.jpg" alt=""></a>
                              <a href="#"><img src="images/93x41_img2.jpg" alt=""></a>
                            </div>

                          </div>
                          <div class="col-xs-4">

                            <div class="dealer-item">

                              <div class="dealer-title">
                                <img src="images/100x34_img1.jpg" alt="">
                                <div class="wrapper">
                                  <a href="#"><b>Palmetto Mottors</b></a>
                                </div>
                              </div>

                              <div class="dealer-desc">

                                <div class="contact-section">

                                  <div class="contact-item">
                                    <span class="contact-title"><i class="licon-map-marker"></i>5 mi away</span>
                                  </div>

                                  <div class="contact-item">
                                    <span class="contact-title"><i class="licon-telephone"></i>(866) 284-3109</span>
                                  </div>

                                </div>

                                <a href="#" class="btn btn-small">get Best Price</a>

                              </div>

                              <a href="#" class="link-text2">Similar cars at this dealership</a>

                            </div>

                          </div>
                        </div>

                      </div>
                      <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->

                    </div>
                    <!-- - - - - - - - - - - - - - / Product - - - - - - - - - - - - - - - - -->

                  </div>
                <?php
                }
                ?>


              </div>

              <ul class="pagination">
                <li><a href="#" class="prev-page"></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" class="next-page"></a></li>
              </ul>

        </main>

      </div>
    </div>

  </div>

  <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

  <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

  <footer id="footer" class="footer">

    <!-- Top footer -->
    <!-- <div class="top-footer">
        
        <div class="container">
          
          <div class="row">

            <div class="col-md-3 col-sm-6">
              
              <div class="widget">

                <div class="content-element3">
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

            </div>
            <div class="col-md-3 col-sm-6">
              
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
              </div>

            </div> -->
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
        <ul class="social-icons">

          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-youtube-play"></i></a></li>
          <li><a href="#"><i class="icon-gplus-3"></i></a></li>
          <li><a href="#"><i class="icon-instagram-5"></i></a></li>
          <li><a href="#"><i class="icon-linkedin-3"></i></a></li>

        </ul>
      </div>

      <div class="widget">
        <h5 class="widget-title">Newsletter Sign Up</h5>
        <form id="newsletter">
          <button type="submit" class="btn-email btn btn-style-2 f-right" data-type="submit"><i class="licon-envelope"></i></button>
          <div class="wrapper">
            <input type="email" placeholder="Enter your email address" name="newsletter-email">
          </div>
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

          <!-- <div class="copyright">Copyright Auto Trader © 2018. All Rights Reserved.</div> -->

          <ul class="info-links hr-type">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
            <!-- <li><a href="#">FAQ</a></li> -->
            <li><a href="#">News & Tips</a></li>
            <li><a href="#">Site Map</a></li>
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
  <script src="plugins/jquery.queryloader2.min.js"></script>
  <script src="plugins/owl.carousel.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/instafeed.min.js"></script>
  <script src="plugins/twitter/jquery.tweet.js"></script>

  <!-- JS theme files
  ============================================ -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

</body>

</html>