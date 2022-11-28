








<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Harrier Car Detail Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
<style type="text/css">
  <style>
  .hide {
    display:none;
  }
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}




#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: transparent;
  color: white;


}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}
table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .45em;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: left;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: right;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}


#mobileshow { 
display:none; 
}
@media screen and (max-width: 500px) {
#mobileshow { 
display:block; }
}
.responsive {
  width: 100%;
  height: auto;
}
</style>
</style>
</head>
<body>
<div id="page">
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index-2.html" title="Car HTML" class="logo">
              <div><img src="images/logo.png" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                      <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <div class="language-currency">
                        <div class="fl-language">
                        <h3>Language</h3>
                          <ul class="lang">
                            <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span> </a></li>
                            <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                            <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                          </ul>
                        </div>
                        <!--fl-language--> 
                        <!-- END For version 1,2,3,4,6 --> 
                        <!-- For version 1,2,3,4,6 -->
                        <div class="fl-currency">
                         <h3>Currency</h3>
                          <ul class="currencies_list">
                            <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                            <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                            <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                          </ul>
                        </div>
                        <!--fl-currency--> 
                        <!-- END For version 1,2,3,4,6 --> 
                      </div>
                       <h3>My Acount</h3>
                      <ul class="links">
                        <li><a href="login.html" title="My Account">Login</a></li>
                        <li><a href="login.html" title="Wishlist">Register</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="fl-cart-contain">
                  <div class="mini-cart">
                    <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
                    <div class="fl-mini-cart-content" style="display: none;">
                      <div class="block-subtitle">
                        <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                        <!--top-subtotal--> 
                        <!--pull-right--> 
                      </div>
                      <!--block-subtitle-->
                      <ul class="mini-products-list" id="cart-sidebar">
                        <li class="item first">
                          <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$179.99</span>
                              <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                            </div>
                          </div>
                        </li>
                        <li class="item last">
                          <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$80.00</span>
                              <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="actions">
                        <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
                      </div>
                      <!--actions--> 
                    </div>
                    <!--fl-mini-cart-content--> 
                  </div>
                </div>
                <!--mini-cart-->
                <div class="collapse navbar-collapse">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                      </span> </div>
                  </form>
                </div>
                <!--links--> 
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner"> 
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
                      <li class="mega-menu"> <a class="level-top" href="grid1.html"><span>Accessories</span></a>
                        <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                          <div class="container">
                            <div class="level0-wrapper2">
                              <div class="nav-block nav-block-center"> 
                                <!--mega menu-->
                                <ul class="level0">
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Audio</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Amplifiers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Installation Parts</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Stereos</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Subwoofers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Body Parts</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bumpers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doors</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenders</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilles</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hoods</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Exterior</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bed Accessories</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Body Kits</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Grilles</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Car Covers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Bumpers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Interior</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Gauges</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dash Kits</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Seat Covers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Steering Wheels</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sun Shades</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lighting</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fog Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Headlights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>LED Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Signal Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Performance</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Air Intake Systems</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Brakes</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Exhaust Systems</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Power Adders</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racing Gear</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                </ul>
                                <!--level0--> 
                              </div>
                              <!--nav-block nav-block-center--> 
                              
                            </div>
                            <!--level0-wrapper2--> 
                          </div>
                          <!--container--> 
                        </div>
                        <!--level0-wrapper dropdown-6col--> 
                        <!--mega menu--> 
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Listing‎</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
                          <li class="level1 nav-10-2"> <a href="list.html"> <span>Car List</span> </a> </li>
                          <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
                          <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
                          <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Blog</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                          <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                        </ul>
                      </li>
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="compare.html"><span>Compare Cars‎</span></a> </li>
                      <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a> 
                        <!--sub sub category-->
                        <ul class="level1">
                          <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                          <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                            <!--sub sub category-->
                            <ul class="level2 right-sub">
                              <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                              <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category--> 
                          </li>
                          <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                          <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                          <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                          <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                          <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                          <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                          <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                          <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        </ul>
                      </li>
                      <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Custom</span> </a>
                        <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                          <div class="container">
                            <div class="header-nav-dropdown-wrapper clearer">
                              <div class="grid12-3">
                                <div><img src="images/custom-img1.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img2.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img3.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                              </div>
                              <div class="grid12-3">
                                <div><img src="images/custom-img4.jpg" alt="custom-image"></div>
                                <h4 class="heading">SALE UP TO 30% OFF</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!--nav--> 
                  </div>
                </nav>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>

  </header>
  <div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
              <li class="category1599"> <a href="grid.html" title="">New Car</a> <span>&rsaquo; </span> </li>
              <li class="category1600"> <a href="grid.html" title="">Audi</a> <span>&rsaquo; </span> </li>
              <li class="category1601"> <strong>Sedans</strong> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="page-title">
      <h2>COMPARE Detail</h2>
    </div>
  </div>
  <!-- BEGIN Main Container -->
<br>
  <div class="col-md-12">
    <div class="col-md-6">
      
      
    </div>

    <div class="col-md-6">
      
      
    </div>
    
</div>

<div class="container"  style="overflow-x:auto;">

      <table class="table table-sm" >
        <thead>
        <tr>
           
            <th scope="col">Your Vehicle</th>
            <div id="mobileshow"><b>Your Vehicle</b></div>
            <th scope="col">Energy</th>
            <th scope="col">Consumption</th>
            <th scope="col">Power</th>
            <th scope="col">Distance</th>
            <th scope="col">Duration</th>
        </tr>
        </thead>
        <tbody>

        <?php 
                                    $conn = mysqli_connect("localhost","root","root","udm_project");

                                    if(isset($_GET['search']))
                                    {

                                        $type=$_GET['type'];
                                        $energy=$_GET['energy'];
                                        $power=$_GET['power'];
                                        $fuel_comsumption=$_GET['consumption'];
                                        $distance=$_GET['distance'];
                                        $durer=$_GET['durer'];
                                        $ve_make = 'Toyota';

                                        $query = "SELECT distinct  a.id_type , b.name_energy , c.name_power , g.make_ve , d.name_consumption , e.name_distance , f.name_durer  FROM type as a , energy as b , power as c , consumption as d ,
                                                  distance as e , durer as f , ve as g WHERE

                                                   d.id_consumption like '%$fuel_comsumption%'
                                                   and 
                                                   g.make_ve like '%$ve_make%' 
                                                   and a.id_type like '%$type%' 
                                                   and  b.name_energy like  '%$energy%'
                                                   and  c.name_power  ='$power' 
                                                   and e.name_distance = '$distance'
                                                   and f.name_durer = '$durer'

                                                       ";  
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    
                                                  <td> <b>Brand :</b> <?php echo $items['make_ve']; ?> </td>
                                               
                                                    
                                                 <td><?php echo $items['name_energy']; ?></td>
                                                
                                                <td><?php echo $items['name_consumption']; ?></td>
                                             

                                              

                                                

                                             


                                             
                                                 <td><?php echo $items['name_power']; ?></td>

                                                


                                                
                                                 <td><?php echo $items['name_distance']; ?></td>

                                                


                                                 

                                              
                                                 <td><?php echo $items['name_durer']; ?></td>

                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
     

        </tbody>
    </table>
     
     </div>

<div class="container"  style="overflow-x:auto;">

      <table class="table table-sm">
        <thead>
        <tr>
            
            <th scope="col" >Alternate in Electric</th>
            <div id="mobileshow"><b>Alternate in Electric</b></div>
            <th scope="col" >Brand</th>
            <th scope="col" >Energy</th>
              <th scope="col" >Consumption</th>
                <th scope="col" >Power</th>
                  <th scope="col" >Distance</th>
                    <th scope="col" >Duration</th>
            
        </tr>
        </thead>
        <tbody>

        <?php 
                                    $conn = mysqli_connect("localhost","root","root","udm_project");

                                    if(isset($_GET['search']))
                                    {

                                    
                                        $ve_make = 'BMW';

                                        $query = "SELECT  make_ve , acceleration_ve , 
                                                  model_ve, power_ve , topSpeed_ve , efficiency_ve ,img_path
                                                  from ve as g WHERE g.make_ve = 'Toyota'  order by model_ve asc ";  
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>

                                                <td>
                                                  <img src="images/<?php echo $items['img_path']; ?>" width="140px" height="140px" class="responsive">
                                                </td>
                                                   
                                                <td  >
                                                 

                                                   <div id="mobileshow"><b>Brand</b></div>
                                                   <?php echo $items['make_ve']; ?>
                                                    <?php echo $items['model_ve']; ?>
                                                </td>

                                              

                                                <td>
                                                  <div id="mobileshow"><b>Energy</b></div>
                                                  <?php echo 'Electrical'; ?></td>

                                                  <td>
                                                     <div id="mobileshow"><b>Consumption</b></div> 
                                                    <?php echo $items['acceleration_ve']; ?></td>
                                                

                                                

                                           
                                                
                                                 

                                                


                                               

                                                
                                                 
                                               

                                                

                                                 

                                                 
                                                 <td>
                                                  <div id="mobileshow"><b>Power</b></div>
                                                  <?php echo $items['topSpeed_ve']; ?></td>
                                              

                                              

                                                 

                                                 
                                                 <td>

                                                  <div id="mobileshow"><b>Distance</b></div>  
                                                  <?php echo $items['efficiency_ve']; ?></td>

                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                  <div id="mobileshow"><b>Duration</b></div>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
     

        </tbody>
    </table>
     
     </div>
 <br>   
    <!--col-main--> 


  <!--main-container--> 
</div>
<!--col1-layout--> 

<!-- For version 1,2,3,4,6 -->
 <footer> 
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
      <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">

          <ul>
            <li>
              <div class="feature-box">
                <div class="icon-truck"><img src="images/world-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>World's #1</h6>
                  <p>Largest Auto portal</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-support"><img src="images/car-sold-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Car Sold</h6>
                  <p>Every 4 minute</p>
                </div>
              </div>
            </li>
            <li>
              <div class="feature-box">
                <div class="icon-money"><img src="images/tag-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Offers</h6>
                  <p>Stay updated pay less</p>
                </div>
              </div>
            </li>
            <li class="last">
              <div class="feature-box">
                <div class="icon-return"><img src="images/compare-icon.png" alt="Image"></div>
                <div class="content">
                  <h6>Compare</h6>
                  <p>Decode the right car</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="newsletter-row">
        <div class="container">
          <div class="row"> 
            
            <!-- Footer Newsletter -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
              <div class="newsletter-wrap">
                <h5>Newsletter</h5>
                <h4>Get Notified Of any Updates!</h4>
                <form action="#" method="post" id="newsletter-validate-detail1">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                      <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                    </div>
                    <!--container_form_news2--> 
                  </div>
                  <!--container_form_news-->
                </form>
              </div>
              <!--newsletter-wrap--> 
            </div>
          </div>
        </div>
        <!--footer-column-last--> 
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-lg-4">
            <div class="co-info">
              <h4>SHOWROOM</h4>
              <address>
              <div><span>ThemesGround, 789 Main rd, Anytown, <br>
                CA 12345 USA</span></div>
              <div> <span> +1 800 789 0000</span></div>
              <div> <span><a href="#">Harrier@themesground.com</a></span></div>
              <div> <span>Mon - Fri : 09am to 06pm</span></div>
              </address>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12 col-lg-8">
            <div class="footer-column">
              <h4>Quick Links</h4>
              <ul class="links">
                <li class="first"><a title="How to buy" href="http://themesground.com/blog/">Blog</a></li>
                <li><a title="FAQs" href="#">FAQs</a></li>
                <li><a title="Payment" href="#">Payment</a></li>
                <li><a title="Shipment" href="#">Shipment</a></li>
                <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                <li class="last"><a title="Return policy" href="#">Return policy</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                <li><a title="Information" href="#">Information</a></li>
                <li><a title="Addresses" href="#">Addresses</a></li>
                <li><a title="Addresses" href="#">Discount</a></li>
                <li><a title="Orders History" href="#">Orders History</a></li>
                <li class="last"><a title=" Additional Information" href="#"> Additional Information</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                <li><a title="Search Terms" href="#">Search Terms</a></li>
                <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                <li><a title="History" href="#">About Us</a></li>
                <li><a title="History" href="#">Contact Us</a></li>
                <li><a title="Suppliers" href="#">Suppliers</a></li>
              </ul>
            </div>
          </div>
          
          <!--col-sm-12 col-xs-12 col-lg-8--> 
          <!--col-xs-12 col-lg-4--> 
        </div>
        <!--row--> 
        
      </div>
      
      <!--container--> 
    </div>
    <!--footer-inner-->
    
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN SIMPLE FOOTER --> 
  </footer>
<!-- End For version 1,2,3,4,6 -->

</div>
<!--page--> 
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
        <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
     <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
    <li><a href="grid1.html">Accessories</a>
      <!--mega menu-->
                                <ul class="level0">
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Audio</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Amplifiers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Installation Parts</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Stereos</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Subwoofers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Body Parts</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bumpers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doors</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenders</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilles</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hoods</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Exterior</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bed Accessories</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Body Kits</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Grilles</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Car Covers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Bumpers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Interior</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Gauges</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dash Kits</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Seat Covers</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Steering Wheels</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sun Shades</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lighting</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fog Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Headlights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>LED Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Signal Lights</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                  <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Performance</span></a> 
                                    <!--sub sub category-->
                                    <ul class="level1">
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Air Intake Systems</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Brakes</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Exhaust Systems</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Power Adders</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                      <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racing Gear</span></a> </li>
                                      <!--level2 nav-6-1-1-->
                                    </ul>
                                    <!--level1--> 
                                    <!--sub sub category--> 
                                  </li>
                                  <!--level3 nav-6-1 parent item-->
                                </ul>
                                <!--level0--> 
    </li>
    <li><a href="#">Listing‎</a>
      <ul class="level1">
        <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
        <li class="level1 nav-10-2"> <a href="list.html"> <span>Car List</span> </a> </li>
        <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
        <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
        <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
        <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li>
      </ul>
    </li>
    <li><a href="grid.html">Blog</a>
       <ul class="level1">
          <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
          <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
        </ul>
    </li>
    <li><a href="compare.html">Sandwiches‎</a></li>
    <li><a href="#">Pages</a>
       <ul class="level1">
                          <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                          <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                            <!--sub sub category-->
                            <ul class="level2 right-sub">
                              <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                              <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category--> 
                          </li>
                          <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                          <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                          <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                          <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                          <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                          <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                          <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                          <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        </ul>
    </li>
    <li><a href="#">Custom</a></li>
   </ul>
</div>

<div class="popup2" style="display: none;">
<div class="ask-question-block">
<h3>Ask a Question</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe1();">
<div class="form-block"><label>Name</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Email</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Phone</label>
<input name="" type="text">
</div>
<div class="form-block"><label>Question</label>
<input name="" type="text">
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button"><span>Submit</span></button>
</div>
</div>
</div>
</div>

<div class="popup3" style="display: none;">
<div class="ask-question-block">
<h3>Finance Calculator</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe2();">
<div class="form-block"><label>Vehicle Price ($)</label>
<input name="" type="text" value="87,000">
</div>
<div class="form-block"><label>Down Payment</label>
<input name="" type="text"  value="25,000">
</div>
<div class="form-block"><label>Interest Rate</label>
<input name="" type="text"  value="13%">
</div>
<div class="form-block"><label>Period in Years</label>
<input name="" type="text"  value="3 years">
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button"><span>Calculate</span></button>
</div>
</div>
</div>
</div>

<div id="fade"></div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-slider.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script src="js/cloud-zoom.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
	
		
    }
	function ShowMe()
    {
        jQuery('.popup2').show();
        jQuery('#fade').show();
		
    }
		function ShowMe1()
    {
        jQuery('.popup3').show();
        jQuery('#fade').show();
		
    }
	function HideMe1()
    {
        jQuery('.popup2').hide();
        jQuery('#fade').hide();

		
    }
	
		function HideMe2()
    {
        jQuery('.popup3').hide();
        jQuery('#fade').hide();

		
    }
</script>

</body>

</html>
