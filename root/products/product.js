////////////////////////////////
//define class constructor and methods
////////////////////////////////
// class Product {
// 	constructor(name, image, rating, price, description, link) {
// 		this.name = name;
// 		this.image = image;
// 		this.rating = rating;
// 		this.price = price;
// 		this.description = description;
// 		this.link = link;
// 	}

// 	//method to specify formatting of product image
// 	returnImage() {
// 		var image = '<div class="productimage"><img src="../' + this.image + '" class="product"></div>';
// 		return image;
// 	}

//     //returns product details with HTML tags for formatting
// 	productDetails() {

// 		var nameLine = '<span><h4>' + this.name + "</span></h4>";
// 		var rating = "<span><h3>Rating: </h3>" + displayRating(this.rating) + "<br></span>";
// 		var price = '<span><h3>Price: </h3> <h4 id="productPrice">$' + this.price + " CAD</h4></span>";
// 		var description = '<span><h3>Description: </h3>' + this.description + '</span>';

// 		return (nameLine + rating + price + description);
// 	}
// }

//returns the HTML to display the rating as stars. checks to see how many stars are yellow based on rating, then if there are less than 5 stars in the rating, make the rest of the stars black
// function displayRating(rating) {
// 	var ratingHTML = "";
// 	for (let i = 0; i < rating; i++) {
// 		ratingHTML = ratingHTML.concat('<span class="fa fa-star checked"></span>');
// 	}
// 	for (let i = 0; i < (5 - rating); i++) {
// 		ratingHTML = ratingHTML.concat('<span class="fa fa-star"></span>')
// 	}
// 	return ratingHTML;
// }

//returns HTML for the quantity button
// function displayQuantityButton() {
// 	var quantityHTML = '<form name="quantity"><select id="quantity" name="quantity" onchange="returnQuantity(); displayPrice();"> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option></select> <input type="submit" value="Add to Cart"> </form>'
// 	return quantityHTML;
// }

//returns the value of the selected option in a drop-down list
function returnQuantity() {
	if (document.getElementById("quantity") == null) {
		return 1;
	} else {
		var index = document.getElementById("quantity").selectedIndex;
		var quantity = document.getElementsByTagName("option")[index].value;
		return quantity;
	}
}

//changes the inner HTML of the tag with id 'productPrice' to the new price, which is the quantity selected multiplied by the price of the product being displayed on the page
//the toFixed() method limits the number of decimal places to 2
function displayPrice() {
	for (let i = 0; i < productsArray.length; i++) {
		if (productsArray[i].link == product) {
			document.getElementById("productPrice").innerHTML = '$' + eval(returnQuantity() * productsArray[i].price).toFixed(2) + " CAD";
		}

	}
}


////////////////////////////////
//array of product objects
////////////////////////////////
// var productsArray = [];
// productsArray[0] = new Product("Grey Sony PS1 Analog Controller Playstation",
// 	"images/searchresult/product.jpg",
// 	5,
// 	12.99,
// 	"Batteries: 1 Lithium ion nattery (included); Dimensions: 3.66 x 5.83 x 2.1 (in); Weight: 4.7 oz.",
// 	"Grey-Sony-PS1-Analog-Controller-Playstation");
// productsArray[1] = new Product("PlayStation System PS1 Console",
// 	"images/searchresult/product1.jpg",
// 	4,
// 	64.99,
// 	"CPU: 32-bit RISC; RAM: 2MB, 1MB VRAM; Sound: 16-bit; Dimensions: 2.5 x 10.75 x 7.5 (in).",
// 	"playstation-system-ps1-console");
// productsArray[2] = new Product("Game Boy Pocket Green MGB-001 System Console",
// 	"images/searchresult/product2.jpg",
// 	2,
// 	89.99,
// 	"CPU Speed: 4.2/8.4 MHz; Resolution: 160x144px; RAM: 32KB; Dimensions: 5.26 x 3.07 x 1.08 (in).",
// 	"game-boy-pocket-green-mgb001-system-console");
// productsArray[3] = new Product("Nintendo 64 System Jungle Green Console N64",
// 	"images/searchresult/product3.jpg",
// 	3,
// 	249.99,
// 	"CPU Speed: 95.75MHz; Resolution: 640x480px; RAM: 36 MB; Dimensions: 10.2 x 7.5 x 2.9 (in).",
// 	"nintendo-64-system-jungle-green-console-n64");
// productsArray[4] = new Product("Gamecube System Platinum Silver Console",
// 	"images/searchresult/product4.jpg",
// 	1,
// 	119.99,
// 	"CPU Speed: 485 MHz; RAM: 40MB, 4MB VRAM; Dimensions: 4.3 x 5.9 x 6.3 (in).",
// 	"gamecube-system-platinum-silver-console");
// productsArray[5] = new Product("Gameboy Advance SP Replacement Battery",
// 	"images/searchresult/product5.jpg",
// 	5,
// 	16.99,
// 	"Capacity: 850mAh; Volts: 3.7V; Lithium ion cell; Dimensions: 1.94 x 1.11 x 0.19 (in); Weight: 2.12 oz.",
// 	"gameboy-advance-sp-replacement-battery");


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
        //sets the class attribute = productdescription
		productContainer.setAttribute("class", "productdescription");
        //appends new node 
		container.appendChild(productContainer);
		//print product details to productdescription div
		document.getElementsByClassName("productdescription")[0].innerHTML = productsArray[i].productDetails() + displayQuantityButton();
	}
}