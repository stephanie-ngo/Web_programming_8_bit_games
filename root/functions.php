<?php

// create and check connection
//stored in variable $mysqli 
require 'connect.php';

//function display correct amount of star images corresponding to rating in database
function displayRating($rating) {

    for ($x = 0; $x < $rating; $x++) {
        echo "<span class='fa fa-star checked'></span>";
      }

    for ($x = 0; $x < (5-$rating); $x++) {
        echo '<span class="fa fa-star"></span>';
      }

  }

//sql query

//if no search terms entered, then display all products
//1=1 is used when conditions aren't set yet for sql clause.
$querySubString = "1 = 1";

//if $_GET["search"] contains element, then query table for matches in name
if (isset($_GET["search"])) {
    //trim function to remove whitespace
    $querystring = trim($_GET["search"]);
    $querySubString .= " AND name LIKE '%$querystring%'";    
}
if (isset($_POST["rating"])) {
    $rating = $_POST["rating"];
    $querySubString .= " AND Rating >= '$rating'";
}
if (isset($_POST["price"])) {
    $price = $_POST["price"];
    $querySubString .= " AND Price $price";
}
if (isset($_POST["sort"])) {
    $sort = $_POST["sort"];
    $querySubString .= " $sort";
}

//echo $querySubString;
$sql = "SELECT * FROM product WHERE $querySubString";


//runs the query and puts the resulting data into a variable called $result.
//$mysqli is the connection variable from connect.php
$result = $mysqli->query($sql);

//if no results found, print statement
if ($result->num_rows == 0){
    echo "No results found.";
}

// Get the  query rows as an associative array
//MYSQLI_ASSOC is parameter is a constant indicating what type of array should be produced from the current row data
$rows = $result->fetch_all(MYSQLI_ASSOC);

//displays the data from the database
foreach ($rows as $row) {
    echo '<div class="grid-item">';
    //echo '<form id="myForm" action="product.php" method="get">';
    //echo '<input type="hidden" name="product'. $row['ID'] . '" value="' . $row['Name'] . '">';
    echo '<a href="products/' . $row['link'] . '.php"><span><h2>' . $row['Name'] . "<span><h2></a>";

    //echo '<a href="#" onclick="alert('.');"><span><h2>' . $row['Name'] . "<span><h2></a>";
    //echo '<input type="submit" name="product" value="PRODUCTNAME"><span><h2>' . $row['Name'] . "<span><h2></a>";
    //echo '<input type="hidden" name="submit.x" value="PRODUCTNAME" />';
    //echo '<span><input type="image" name="product" class="searchresultimage" img src="images/searchresult/' . $row['image'] . '.jpg"></span>';

    //echo '<span><a href="#" onclick="document.getElementById(\'myForm\').submit();"><span><h2><img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></a></span>';



    //echo '<span><a href="product.php" onclick="document.getElementById("myForm").submit(); return false;"><input type="image" name="product" value="PRODUCTNAME" img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></a></span>';

    echo '<span><a href="products/' . $row['link'] . '.php"><img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></a></span>';
   //echo '<span><input type="image" name="product" class="searchresultimage" value="PRODUCTNAME" img src="images/searchresult/' . $row['image'] . '.jpg"></span>';
   //echo '<span><input type="hidden" name="product" value="PRODUCTNAME"><img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></span>';
   //echo '<input type="hidden" name="product" value="PRODUCTNAME">'; 
   //echo '<span><a name="product" value="PRODUCTNAME" href="product.php"><img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></a></span>';
    echo "<span><h2>Rating: </h2>";
    displayRating($row['Rating']);
    echo "<br></span>";
    echo "<span><h2>Price: </h2> $" . $row['Price'] . " CAD</span>";
    //echo '<span class="cta"><h2><button type="submit" name="product" value="PRODUCTNAME">Add to Cart</button><span><h2>';
    echo '<span class="cta"><h2><a href="products/' . $row['link'] . '.php"><button>Add to Cart</button><</a><span><h2>';

    echo '</form>';
    echo '</div>';
}

//close connection
$mysqli->close();



?>