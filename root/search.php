<!DOCTYPE html>
<html>
  <head>
    <title>Project Part 1 - Online Store Product Page</title>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include('header.php'); ?>

    <!--
      block for search results contents
      -->
    <div class="pagetitle">
      <a href="index.html">Home</a> > 
      <a href="search.html">Search Results</a> 
    </div>

    <!--Main page contents -->
    <div class="searchresults">
      
      

      <!--Filter and Sort Search Results -->
      <div class="searchoptions">
        <!--Filter by price -->
        <div class="searchoptions-item">
          <label for="radio">
            <h2>Filter by Price:</h2>
          </label>
          <input type="radio" id="price1" name="filter" onclick="clearPage(); displayProduct(filterPrice(0, 25))">
          <label for="price1">Under $25</label><br>
          <input type="radio" id="price2" name="filter" onclick="clearPage(); displayProduct(filterPrice(25, 50))">
          <label for="price2">$25 - $50</label><br>
          <input type="radio" id="price3" name="filter" onclick="clearPage(); displayProduct(filterPrice(50, 75))">
          <label for="price3">$50 - $75</label><br>
          <input type="radio" id="price4" name="filter" onclick="clearPage(); displayProduct(filterPrice(75, 100))">
          <label for="price4">$75 - $100</label><br>
          <input type="radio" id="price5" name="filter" onclick="clearPage(); displayProduct(filterPrice(100, Number.POSITIVE_INFINITY))">
          <label for="price5">Over $100</label><br>
          <br><br>
        </div>


        <!--Filter by rating -->
        <div class="searchoptions-item">
          <h2>Filter by Rating:</h2>
          <input type="radio" id="rating1" name="filter" value="1star" onclick="clearPage(); displayProduct(sortRating(filterRating(1)))">
          <label for="rating1">1 Star and Up</label><br>
          <input type="radio" id="rating2" name="filter" value="2star" onclick="clearPage(); displayProduct(sortRating(filterRating(2)))">
          <label for="rating2">2 Stars and Up</label><br>  
          <input type="radio" id="rating3" name="filter" value="3star" onclick="clearPage(); displayProduct(sortRating(filterRating(3)))">
          <label for="rating3">3 Stars and Up</label><br>
          <input type="radio" id="rating4" name="filter" value="4star" onclick="clearPage(); displayProduct(sortRating(filterRating(4)))">
          <label for="rating4">4 Stars and Up</label><br>
          <input type="radio" id="rating5" name="filter" value="5star" onclick="clearPage(); displayProduct(sortRating(filterRating(5)))">
          <label for="rating5">5 Stars and Up</label><br><br>
        </div>
        <!--sort by price or rating -->
        <div class="searchoptions-item">
          <h2>Sort By:</h2>
          <input type="radio" id="sort1" name="filter" value="Best rating" onclick="clearPage(); displayProduct(sortRating(productsArray))">
          <label>Best rating</label><br>
          <input type="radio" id="sort2" name="filter" value="Lowest price first" onclick="clearPage(); displayProduct(sortPriceLowHigh())">
          <label>Lowest price first</label><br>  
          <input type="radio" id="sort3" name="filter" value="Highest price first" onclick="clearPage(); displayProduct(sortPriceHighLow())">
          <label>Highest price first</label><br><br>
        </div>
        <hr class="solid">
      </div>

      <!--Listed items -->
      <div class="grid-container" id="productGrid">

      </div>
    </div>
    <!--
      block for footer contents
      -->
    <div class="footer">
      <div class="footertext">
        <p>
        <h3>Contact Information</h3>
        </p>
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
    <script src="js/scriptsearch.js"></script> 

  </body>
</html>