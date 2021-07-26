////////////////////////////////
//define class constructor and methods
////////////////////////////////
class Product {
  constructor(name, image, rating, price, description, link) {
      this.name = name;
      this.image = image;
      this.rating = rating;
      this.price = price
      this.description = description;
      this.link = "products/" + link + ".html";
  }

  //method to specify formatting of product
  productDetailsSearchPage() {
           
      var nameLine = '<a href="' + this.link + '"><span><h2>' + this.name + "<span><h2></a>";
      var image = '<span><a href="'+ this.link + '"><img src="' + this.image + '" class="searchresultimage"></a></span>';
      var rating = "<span><h2>Rating: </h2>" + displayRating(this.rating) + "<br></span>";
      var price = "<span><h2>Price: </h2> $" + this.price + " CAD</span>";
      var pageLink = '<span><h2><a href="' + this.link + '">Add to Cart</a><span><h2>'; 

      return (nameLine + image + rating + price + pageLink);
  }
}


////////////////////////////////
//array of product objects
////////////////////////////////
var productsArray = [];
productsArray[0] = new Product("Grey Sony PS1 Analog Controller Playstation",
  "images/searchresult/product.jpg",
  5,
  12.99,
  "Description",
  "Grey-Sony-PS1-Analog-Controller-Playstation");
productsArray[1] = new Product("PlayStation System PS1 Console",
  "images/searchresult/product1.jpg",
  4,
  64.99,
  "Description",
  "playstation-system-ps1-console");
productsArray[2] = new Product("Game Boy Pocket Green MGB-001 System Console",
  "images/searchresult/product2.jpg",
  2,
  89.99,
  "Description",
  "game-boy-pocket-green-mgb001-system-console");
productsArray[3] = new Product("Nintendo 64 System Jungle Green Console N64",
  "images/searchresult/product3.jpg",
  3,
  249.99,
  "Description",
  "nintendo-64-system-jungle-green-console-n64");
productsArray[4] = new Product("Gamecube System Platinum Silver Console",
  "images/searchresult/product4.jpg",
  1,
  119.99,
  "Description",
  "gamecube-system-platinum-silver-console");
productsArray[5] = new Product("Gameboy Advance SP Replacement Battery",   // ADD NEW ITEMS FROM HERE!!!
  "images/searchresult/product5.jpg",
  5,
  16.99,
  "Description",
  "gameboy-advance-sp-replacement-battery");



////////////////////////////////
//functions to sort and filter
////////////////////////////////

//display ratings as star images
function displayRating(rating) {
  var ratingHTML = "";
  for (let i = 0; i < rating; i++) {
      ratingHTML = ratingHTML.concat('<span class="fa fa-star checked"></span>');
  }
  for (let i = 0; i < (5 - rating); i++) {
      ratingHTML = ratingHTML.concat('<span class="fa fa-star"></span>')
  }
  return ratingHTML;
}

//filter products by rating
function filterRating(stars) {

  let filteredProducts = [];
  for (let i = 0; i < productsArray.length; i++) {
      if (productsArray[i].rating >= stars) {
          filteredProducts.push(productsArray[i]);
      }
  }
  return filteredProducts;
}

//filter products by price range
function filterPrice(low, high) {

  let filteredProducts = [];
  for (let i = 0; i < productsArray.length; i++) {
      if (productsArray[i].price >= low && productsArray[i].price <= high) {
          filteredProducts.push(productsArray[i]);
      }
  }
  return filteredProducts;
}

//sort products by rating
function sortRating(productsArray) {
  return productsArray.sort(function(b, a) {
      return a.rating - b.rating
  });

}

//sort by price, highest to lowest
function sortPriceHighLow() {
  return productsArray.sort(function(b, a) {
      return a.price - b.price
  });

}

//sort by price, lowest to highest
function sortPriceLowHigh() {
  return productsArray.sort(function(a, b) {
      return a.price - b.price
  });

}

//clear page contents
function clearPage() {
  document.getElementById("productGrid").innerHTML = "";
}

//display products in grid on search results page
function displayProduct(filteredProducts) {
  for (let i = 0; i < filteredProducts.length; i++) {
      let container = document.getElementById("productGrid");
      let productContainer = document.createElement("div");
      productContainer.setAttribute("class", "grid-item");
      container.appendChild(productContainer);

      // document.getElementsByClassName("grid-item")[i].innerHTML = filteredProducts[i].productDetailsSearchPage() + '<form><input type="submit" value="Add to Cart"></form>';
      document.getElementsByClassName("grid-item")[i].innerHTML = filteredProducts[i].productDetailsSearchPage();

  }
}

////////////////////////////////
//display all products when page loads
////////////////////////////////

displayProduct(productsArray);