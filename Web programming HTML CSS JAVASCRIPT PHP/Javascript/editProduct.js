function productToEdit(product) {
    localStorage.setItem('productToEdit', product);
}

function fillInBlanks() {
    var item = localStorage.getItem('productToEdit');
    item = (parseInt(item)-1);
    var name = products[item].name;
    var price = products[item].price;
    var weight = products[item].weight;
    var itemID = products[item].id;
    var image = products[item].picture;
    image += '.png';

    document.getElementById('productName').value = name;
    document.getElementById('price').value = '$' + price;
    document.getElementById('itemId').value = itemID;
    document.getElementById('stock').value = 10;
    document.getElementById('pic2').innerHTML = image;
    document.getElementById('priceDes').value = 'Price';

    if (weight != undefined) {
       var quantity = products[item].quantity;
       document.getElementById('des1a').value = weight;
       document.getElementById('des1b').value = 'Weight';
       if (quantity != undefined) {
            document.getElementById('des2a').value = quantity;
            document.getElementById('des2b').value = 'Quantity';
            localStorage.removeItem('productToEdit');
            return;
       }
       var ppw = products[item].ppw;
       document.getElementById('des2a').value = ppw;
       document.getElementById('des2b').value = 'Price per weight';
       localStorage.removeItem('productToEdit');
       return;
    }
    var volume = products[item].volume;
    if (volume != undefined) {
        var ppv = products[item].ppv;
        document.getElementById('des1a').value = volume;
        document.getElementById('des1b').value = 'Volume';
        document.getElementById('des2a').value = ppv;
        document.getElementById('des2b').value = 'Price per volume';
        localStorage.removeItem('productToEdit');
        return;
    }
    var quantity = products[item].quantity;
    if (quantity != undefined) {
        var ppu = products[item].ppu;
        document.getElementById('des1a').value = quantity;
        document.getElementById('des1b').value = 'Quantity';
        document.getElementById('des2a').value = ppu;
        document.getElementById('des2b').value = 'Price per unit';
        localStorage.removeItem('productToEdit');
        return;
    }
    var type = products[item].type;
    if (type != undefined) {
        document.getElementById('des1a').value = type;
        localStorage.removeItem('productToEdit');
        return;
    }
    document.getElementById('des1a').value = 'whoops';
}

function saveEdits() {
    alert('Edits have been saved');
    document.getElementById('productName').value = '';
    document.getElementById('price').value = '';
    document.getElementById('itemId').value = '';
    document.getElementById('stock').value = '';
    document.getElementById('pic2').innerHTML = '';
    document.getElementById('priceDes').value = '';
    document.getElementById('des1a').value = '';
    document.getElementById('des1b').value = '';
    document.getElementById('des2a').value = '';
    document.getElementById('des2b').value = '';
}

function saveChanges() {
    var a = document.getElementById('productName').value;
    var b = document.getElementById('price').value;
    var c = document.getElementById('itemId').value;
    var d = document.getElementById('stock').value;
    var e = document.getElementById('pic2').innerHTML;
    var f = document.getElementById('priceDes').value;
    var g = document.getElementById('des1a').value;
    var h = document.getElementById('des1b').value;
    var i = document.getElementById('des2a').value;
    var j = document.getElementById('des2b').value;

    if (a && b && c && d && e && f && g && h && i && j) {
    alert('Changes have been saved, new item added to inventory');
    document.getElementById('productName').value = '';
    document.getElementById('price').value = '';
    document.getElementById('itemId').value = '';
    document.getElementById('stock').value = '';
    document.getElementById('pic2').innerHTML = '';
    document.getElementById('priceDes').value = '';
    document.getElementById('des1a').value = '';
    document.getElementById('des1b').value = '';
    document.getElementById('des2a').value = '';
    document.getElementById('des2b').value = '';
    } else {
        alert('One or more fields are empty, please enter all necessary information before saving')
    }

}
