<?php include('header.php');?>

    <!--
      block for search results contents
      -->
    <div class="pagetitle">
      <a href="index.php">Home</a> > 
      <a href="products.php">Products</a> 
    </div>

    <!--Main page contents -->
    <div class="searchresults">
      
      

      <!--Filter and Sort Search Results -->
      <div class="searchoptions">

<form action="products.php" method="post">

            <!--Filter by price -->
            <div class="searchoptions-item">
            <h2>Filter by Price:</h2>
          <input type="radio" id="price1" name="price" value="<= 25">
          <label for="price1">Under $25</label><br>
          <input type="radio" id="price2" name="price" value=">= 25 AND price <=50">
          <label for="price2">$25 - $50</label><br>
          <input type="radio" id="price3" name="price" value=">= 50 AND price <=100">
          <label for="price3">$50 - $100</label><br>
          <input type="radio" id="price4" name="price" value=">= 100 AND price <=150">
          <label for="price4">$100 - $150</label><br>
          <input type="radio" id="price5" name="price" value=">=150">
          <label for="price5">Over $150</label><br>
          <br><br>
        </div>

        <!--Filter by rating -->
        <div class="searchoptions-item">
          <h2>Filter by Rating:</h2>
          <input type="radio" id="rating1" name="rating" value="1">
          <label for="rating1">1 Star and Up</label><br>
          <input type="radio" id="rating2" name="rating" value="2">
          <label for="rating2">2 Stars and Up</label><br>  
          <input type="radio" id="rating3" name="rating" value="3">
          <label for="rating3">3 Stars and Up</label><br>
          <input type="radio" id="rating4" name="rating" value="4">
          <label for="rating4">4 Stars and Up</label><br>
          <input type="radio" id="rating5" name="rating" value="5">
          <label for="rating5">5 Stars and Up</label><br><br>
        </div>

          <!--sort by price or rating -->
        <div class="searchoptions-item">
          <h2>Sort By:</h2>
          <input type="radio" id="sort1" name="sort" value="ORDER BY Rating DESC">
          <label>Best rating</label><br>
          <input type="radio" id="sort2" name="sort" value="ORDER BY Price ASC">
          <label>Lowest price first</label><br>  
          <input type="radio" id="sort3" name="sort" value="ORDER BY Price DESC">
          <label>Highest price first</label><br><br>
        </div>

        <div class="searchoptions-item">
        <span class="cta"><button type="submit" value="Submit">Submit</button></span>
        </div>    




</form>


      
      </div>

      <!--Listed items -->
      <div class="grid-container" id="productGrid">

      <?php
 
        // The include statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
        include('functions.php');

        ?>

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
    <!-- <script src="js/scriptsearch.js"></script>  -->

  </body>
</html>