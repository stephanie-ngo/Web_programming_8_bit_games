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
        this.link = link;
    }

    //method to specify formatting of product
    returnImage(){
        var image = '<div class="productimage"><img src="../' + this.image + '" class="product"></div>';
        return image;
    }

    productDetails() {

        var nameLine = '<span><h4>' + this.name + "</span></h4>";
        var rating = "<span><h3>Rating: </h3>" + displayRating(this.rating) + "<br></span>";
        var price = "<span><h3>Price: </h3> <h4>$" + this.price + " CAD</h4></span>";
        var description = '<span><h3>Description: </h3>' + this.description + '</span>';

        return (  nameLine+ rating + price + description);
    }
}

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


//The split() function creates an array of string, after removing all the forward slash (/) from the url string. The pop() function will return the last element
//get name of product
let url = window.location.href;
let product = url.split('/').pop().split('.')[0];
console.log(product);

for (let i = 0; i < productsArray.length; i++) {

    let container = document.getElementsByClassName("product")[0];

    //print product information based on what product page you are on
    //if element in product array matches product, print its info
    if (productsArray[i].link == product) {

        //add image html to product div
        container.innerHTML = productsArray[i].returnImage();

        //add div element for product details to go in
        let productContainer = document.createElement("div");
        productContainer.setAttribute("class", "productdescription");
        container.appendChild(productContainer);
        //print product details to productdescription div
        document.getElementsByClassName("productdescription")[0].innerHTML = productsArray[i].productDetails();
    }
}

///////////NEED TO DO:
//Add quantity button
//Add to cart button
//Update price instantly based on the selected quantity