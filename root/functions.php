<?php


//display correct amount of stars corresponding to rating

function displayRating($rating) {

    for ($x = 0; $x < $rating; $x++) {
        echo "<span class='fa fa-star checked'></span>";
      }

    for ($x = 0; $x < (5-$rating); $x++) {
        echo '<span class="fa fa-star"></span>';
      }

  }



?>