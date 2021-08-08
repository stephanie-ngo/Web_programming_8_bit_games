<?php include('header.php');?>

    <!--
      block for search results contents
      -->
    <div class="pagetitle">
      <a href="index.php">Home</a> > 
      <a href="search.php">Search Results</a> 
    </div>

    <!--Main page contents -->
    <div class="searchresults">
      
      

      <!--Filter and Sort Search Results -->
      <div class="searchoptions">

<form action="search.php" method="get">



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

        <div class="searchoptions-item">
        <button type="submit" value="Submit">Submit</button>  
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
    <script src="js/scriptsearch.js"></script> 

  </body>
</html>