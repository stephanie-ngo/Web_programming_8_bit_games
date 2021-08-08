<!DOCTYPE html>
<html>
<head>
    <title>Project Part 2 - Online Store Product Page</title>
    <link rel="stylesheet"  href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<!--
    block for header contents
-->

<!--Subtitle -->
<div class="header">
  <div class="header-back">
    <div class="subtitle">
      Retro Videogame Store
    </div>
  </div>
  <!--Navigation bar -->
  <header>
    <nav>
      <ul class="nav-bar">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../about.html">About</a></li>
        <div class="dropdown">
          <button class="dropbtn">Products</button>
          <div class="dropdown-content">
            <a href="../consoles.html">Consoles</a>
            <a href="../games.html">Games</a>
            <a href="../repair.html">Repair parts</a>
            <a href="search.html">Peripherals</a>
          </div>
        </div>
        <li><a href="../ShoppingCart.html">View Cart <!--(<span class="total-count"></span>)--></a></li>
      </ul>
    </nav>
    <form class="search" style="margin:auto;max-width:300px">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" onclick='location.href="../search.html"; return false;'><i class="fa fa-search"></i></button>
    </form>
    <a class="cta" href="../contact.html"><button>Contact us</button></a>
    <a class="cta" href="../SignUpPage.html"><button>Login</button></a>
  </header>
</div>



<!--
    block for product page
-->

<!--Navigation -->
<div class="pagetitle">
  <a href="../index.html">Home</a> > 
  <a href="../search.html">Products</a> > 
  <a href="../peripherals.html">Peripherals</a> 
</div>

<!--Main page contents -->
<div class="product">

  

</div>
<!--
    block for footer contents
-->

<div class="footer">
  <div class="footertext">
    <p><h3>Contact Information</h3></p>
    <p>Email: CST8285@algonquinlive.com</p>
    <p>Phone: 613-555-5555</p>
    <div class="social">
      <a href="#">INSTAGRAM </a>
      <a href="#">FACEBOOK </a>
      <a href="#">TWITTER </a>
    </div>
  </div>
</div>


<!--
JavaScript
 -->
<script src="product.js"></script> 

</body>
</html>