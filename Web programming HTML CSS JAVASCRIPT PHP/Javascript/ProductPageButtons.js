//To delete a row/product from the page.
function deleteProduct(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("productsTable").deleteRow(i);
  }

//To delete all the products from the page
function deleteAll(r){
    var i = r.parentNode.parentNode.rowIndex + 2;
    for (p = 3; p< 20 ; p++){
        document.getElementById("productsTable").deleteRow(i);
    }
    
}

//to add a row/product to the page for all products
function createProduct1(){
    var table = document.getElementById("productsTable");
    //Creates the row
    var row = table.insertRow(3);
    //Creates the colums of the row
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);

    //fills the colums with content
    cell1.innerHTML = "xx";
    cell2.innerHTML = "xx";
    cell3.innerHTML = "xx";
    cell4.innerHTML = "xx";
    cell5.innerHTML = "xx";
    cell6.innerHTML = "xx";
    cell7.innerHTML = "xx";
    cell8.innerHTML = "xx";
    cell9.innerHTML = "xx";
}

function createProduct2(){
    var table = document.getElementById("productsTable");
    //Creates the row
    var row = table.insertRow(3);
    //Creates the colums of the row
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);

    //fills the colums with content
    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    cell4.innerHTML = "";
    cell5.innerHTML = "";
    cell6.innerHTML = "";
    cell7.innerHTML = "";
    cell8.innerHTML = "";
}

//The dropdown menu button
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
    for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        }
      }
    }
  }