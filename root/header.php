<!DOCTYPE html>
<html>
  <head>
    <title>Project Part 1 - Online Store Product Page</title>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      
    <div class="header">
    <div class="header-back">
      <div class="subtitle">
        Retro Videogame Store
      </div>
    </div>
<header>
        <nav>
            <ul class="nav-bar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Products</button>
                    <div class="dropdown-content">
                        <a href="consoles.html">Consoles</a>
                        <a href="games.html">Games</a>
                        <a href="repair.html">Repair parts</a>
                        <a href="peripherals.html">Peripherals</a>
                    </div>
                </div>
                <li><a href="shopping-cart.html">View Cart</a></li>
            </ul>
        </nav>
        <form action="search.php" class="search" style="margin:auto;max-width:300px" method="get">
            <input id="search" type="text" name="search" placeholder="Search..">
            <button type="submit" value="search" onclick='location.href="search.php";'><i class="fa fa-search"></i></button>      
        </form>
        <a class="cta" href="contact.html"><button>Contact us</button></a>
        <a class="cta" href="sign-up-page.html"><button>Login</button></a>
</header>
</div>