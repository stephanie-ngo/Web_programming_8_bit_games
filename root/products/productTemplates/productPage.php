<!DOCTYPE html>
<html>
  <head>
    <title>Project Part 1 - Online Store Product Page</title>
    <link rel="stylesheet"  href="../css/style.css">
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.html">About</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Products</button>
                    <div class="dropdown-content">
                        <a href="../consoles.html">Consoles</a>
                        <a href="../games.html">Games</a>
                        <a href="../repair.html">Repair parts</a>
                        <a href="../peripherals.html">Peripherals</a>
                    </div>
                </div>
                <li><a href="../shopping-cart.html">View Cart</a></li>
            </ul>
        </nav>
        <form action="../products.php" class="search" style="margin:auto;max-width:300px" method="get">
            <input id="search" type="text" name="search" placeholder="Search..">
            <button type="submit" value="search" onclick='location.href="../products.php";'><i class="fa fa-search"></i></button>      
        </form>
        <a class="cta" href="../contact.html"><button>Contact us</button></a>
        <a class="cta" href="../sign-up-page.html"><button>Login</button></a>
</header>
</div>


<!--
    block for product page
-->

<!--Navigation -->
<div class="pagetitle">
  <a href="../index.php">Home</a> > 
  <a href="../products.php">Products</a> > 
</div>

<!--Main page contents -->
<div class="product">

<?php
require "../connect.php";

//function display correct amount of star images corresponding to rating in database
function displayRating($rating)
{
    for ($x = 0; $x < $rating; $x++) {
        echo "<span class='fa fa-star checked'></span>";
    }

    for ($x = 0; $x < 5 - $rating; $x++) {
        echo '<span class="fa fa-star"></span>';
    }
}

//This code is to find out what product page you are on in order to fetch the correct data for that product.
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
//'REQUEST_URI' gives page identifier like /index.php
//basename — Returns trailing name component of path, removes php suffix
$page = basename($_SERVER["REQUEST_URI"], ".php");

//sql query 
$sql = "SELECT * FROM product WHERE link like '$page'";

//runs the query and puts the resulting data into a variable called $result.
//$mysqli is the connection variable from connect.php
$result = $mysqli->query($sql);

// Get the  query rows as an associative array
//MYSQLI_ASSOC is parameter is a constant indicating what type of array should be produced from the current row data
$rows = $result->fetch_all(MYSQLI_ASSOC);

//displays the data from the database with correct HTML tags
foreach ($rows as $row) {
    echo '<div class="productimage">';
    echo '<img src="../images/searchresult/' .
        $row["image"] .
        '.jpg" class="product"></div>';
    echo '<div class="productdescription">';
    echo "<span><h4>" . $row["Name"] . "</span></h4>";
    echo "<span><h3>Rating: </h3>";
    echo displayRating($row["Rating"]);
    echo "<br></span>";
    echo '<span><h3>Price: </h3> <h4 id="productPrice">$' .
        $row["Price"] .
        " CAD</h4></span>";
    echo "<span><h3>Description: </h3>" . $row["Description"] . "</span>";
    //returnQuantity(); displayPrice(); are JavaScript functions to get the quantity when one has been selected and update the price, respectively
    echo '<form name="quantity"><select id="quantity" name="quantity" onchange="returnQuantity(); displayPrice();"> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option></select> <input type="submit" value="Add to Cart"> </form>';
    echo "</div>";
    echo '<input type="hidden" id="price" name="price" value="' . $row["Price"] . '" />';
}


?>

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
JavaScript for updating price instantly
 -->
<script src="js/product.js"></script> 


</body>
</html>