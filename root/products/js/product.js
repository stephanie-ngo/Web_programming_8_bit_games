var price = document.getElementById('price').value;

function returnQuantity() {
	if (document.getElementById("quantity") == null) {
		return 1;
	} else {
		var index = document.getElementById("quantity").selectedIndex;
		var quantity = document.getElementsByTagName("option")[index].value;
		return quantity;
	}
}


function displayPrice() {
	document.getElementById("productPrice").innerHTML = '$' + eval(returnQuantity() * price).toFixed(2) + " CAD";
}