
<?php

//sql query

//if no search terms entered, then display all products
if (!isset($_GET["search"])) {
    $sql = "SELECT * from product";
//if $_GET["search"] contains element, then query table for matches in name
} elseif (isset($_GET["search"])) {
    //trim function to remove whitespace
    $querystring = trim($_GET["search"]);
    $sql         = "SELECT * from product where name LIKE '%$querystring%'";
    
}

//runs the query and puts the resulting data into a variable called $result.
//$mysqli is the connection variable from connect.php
$result = $mysqli->query($sql);

// Get the  query rows as an associative array
//MYSQLI_ASSOC is parameter is a constant indicating what type of array should be produced from the current row data
$rows = $result->fetch_all(MYSQLI_ASSOC);

//dispplays the data from the database
foreach ($rows as $row) {
    echo '<div class="grid-item">';
    echo '<a href="products/' . $row['link'] . '.php"><span><h2>' . $row['Name'] . "<span><h2></a>";
    echo '<span><a href="products/' . $row['link'] . '.php"><img src="images/searchresult/' . $row['image'] . '.jpg" class="searchresultimage"></a></span>';
    echo "<span><h2>Rating: </h2>";
    displayRating($row['Rating']);
    echo "<br></span>";
    echo "<span><h2>Price: </h2> $" . $row['Price'] . " CAD</span>";
    echo '<span><h2><a href="products/' . $row['link'] . '.php">Add to Cart</a><span><h2>';
    echo '</div>';
}

$mysqli->close();


?>