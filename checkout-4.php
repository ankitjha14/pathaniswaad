<?php 
session_start();
if(!isset($_SESSION['customers_id'])){
	header("location: login.php");
}
	else{
?>
<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DapurKue | Checkout 5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="styles/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="styles/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="styles/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" media="all" href="themes/brown/style.css" />
</head>
<body>
<div id="warp">
  <div id="main" class="container_16">
    <div id="header" class="grid_16">
      <div id="logo" class="grid_4 alpha">
        <h1><a href="uindex.php">DapurKue</a></h1>
        <h2>Famously Delicious</h2>
      </div>
      <div id="headright" class="grid_7 prefix_5 omega">
        <h3 class="login"><span class="hiUser">Hi, Monika Halim |</span> <span class="myAccount"><a href="#">My Account</a></span> <a href="#">Logout</a></h3>
        <p>Subtotal: $ 00.00</p>
        <p><span class="vChart"><a href="shoppingcart.html">View Cart</a></span> <span class="cOut"><a href="checkout.html">Checkout</a></span></p>
      </div>
    </div>
    <div id="mainMenu" class="grid_16">
      <ul>
        <li><a href="uindex.php">Home</a></li>
        <li><a href="#">Cakes</a></li>
        <li><a href="#">Order &amp; Delivery</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div id="stickySearch" class="grid_16">
      <div class="stickyNews grid_12 alpha">
        <p>Valentine’s BrownieCheese Special Package. <em>Free Delivery.</em> <a href="#" class="bookMan">More &raquo;</a></p>
      </div>
      <div class="search grid_4 omega">
        <form action="#" method="get">
          <input type="text" value="Type your keyword" id="s" name="s" onfocus="if (this.value == 'Type your keyword') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type your keyword';}" />
        </form>
      </div>
    </div>
    <div class="pageInfo grid_16">
      <div class="dapurBlog grid_11 alpha">
        <h3>Checkout</h3>
      </div>
    </div>
    <div class="checkout grid_16">
      <div class="billInfo grid_11 alpha">
        <h4>3. Payment Option</h4>
        <form method="post" action="#" id="comment_form">
          <fieldset>
            <dl>
              <dt>
                <input type="radio" name="method" value="Bank transfer" />
                Cash On Delivery</dt>
              <dd>
              
          </fieldset>
          <p>
            <input type="submit" value="Place Order &amp; Checkout" id="checkout" name="checkout" class="button" />
          </p>
          <input type="hidden" value="30" name="comment_post_ID" />
        </form>
      </div>
      <div class="summary grid_5 omega">
        <h4>Summary</h4>
        <div class="sumWarp">
          <ul>
            <li><a href="#" class="down">Shopping Cart <span><img src="images/done.png" alt="" /></span></a>
              <ul>
                <li class="info">3 items in your cart</li>
                <li class="total">$ 000.00</li>
                <li class="clear"></li>
              </ul>
            </li>
            <li><a href="#" class="down">Shipping Information <span><img src="images/done.png" alt="" /></span></a>
              <ul>
                <li class="info"> Monika Halim<br />
                  Jl. Tralala Trilili Similikiti<br />
                  Solo, Jawa Tengah 57171<br />
                  Indonesia<br />
                  (62) 817627670</li>
                <li class="edit"><a href="#">EDIT &raquo;</a></li>
                <li class="clear"></li>
              </ul>
            </li>
            <li><a href="#" class="down">Delivery Option <span><img src="images/done.png" alt="" /></span></a>
              <ul>
                <li class="info"> Deliver on February 3rd, 2010<br />
                  at Evening 3.00 pm - 6.00 pm<br />
                  by First delivery option $12.36</li>
                <li class="edit"><a href="#">EDIT &raquo;</a></li>
                <li class="clear"></li>
              </ul>
            </li>
            <li><a href="#" class="billActive">Payment Option</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="richContent2">
  <div class="container_16">
    <div class="lastTweet grid_4">
      <h4>Latest Tweets</h4>
      <p><a href="#">@someone</a> yes indeed this is one hell of a free css template! <a href="#">Read More</a> <span><em>15 minutes ago</em></span></p>
      <p><a href="#">@someone</a> yes indeed this is one hell of a free css template! <a href="#">Read More</a> <span><em>15 minutes ago</em></span></p>
    </div>
    <div class="corporateInfo grid_4">
      <h4>Corporate Info</h4>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Term &amp; Conditions</a></li>
        <li><a href="#">Franchise</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
    <div class="storeDelivery grid_4">
      <h4>Store &amp; Delivery</h4>
      <ul>
        <li><a href="#">Store Locator</a></li>
        <li><a href="#">Delivery Terms &amp;amp Pricing</a></li>
        <li><a href="#">Delivery Coverage</a></li>
        <li><a href="#">Gift Services</a></li>
        <li><a href="#">Track my order</a></li>
      </ul>
    </div>
    <div class="socialNet grid_4">
      <h4>Keep in touch</h4>
      <ul>
        <li><a href="#" class="facebook">Facebook</a></li>
        <li><a href="#" class="twitter">Twitter</a></li>
        <li><a href="#" class="feed">Feed</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="footer">
  <div class="container_16">
    <div class="copyright grid_16">
      <p class="left">Copyright &copy; 2010, Your Company Here, All Rights Reserved</p>
      <p class="right"><a href="http://all-free-download.com/free-website-templates/">Free CSS Templates</a> by <a href="http://tokokoo.com/">Tokokoo</a> &amp; <a href="http://www.instantshift.com/">instantShift</a></p>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
	<?php } ?>