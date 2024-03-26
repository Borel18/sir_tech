// cart open close
let carticon= document.querySelector("#cart-icon");
let cart= document.querySelector(".cart");
let closecart= document.querySelector("#close-cart");
// ouverture du panier
carticon.onclick=()=>{
    cart.classList.add("active")
};
// fermeture de panier
closecart.onclick=()=>{
    cart.classList.remove("active")
};
// ajouter a la carte
// cart working js
if(Document.readystate == "loading"){
    document.addEventListener("DOMContentLoaded",ready);
}else{
    ready();
}
// making function
function ready(){
    // remove items from cart
    var removecartbuttons= document.getElementsByClassName('cart-remove');
    for(var i = 0 ; i < removecartbuttons.length;i++){
        var button = removecartbuttons[i];
        button.addEventListener("click",removeCartItem);
    }
    // quantity changed
    var quantityinputs = document.getElementsByClassName('cart-quantity');
    for(var i = 0 ; i < quantityinputs.length;i++){
        var input = quantityinputs[i];
        input.addEventListener("change",quantitychanged);
    }
    // add to cart
    var addCart = document.getElementsByClassName('add-cart');
    for(var i = 0 ; i < addCart.length;i++){
        var button = addCart[i];
        button.addEventListener("click",addcartclicked);
    }
    
}

// remove cart items
function removeCartItem(event){
    var buttonclicked = event.target;
    buttonclicked.parentElement.remove();
    updatetotal();
}
// function quantity changed
function quantitychanged(event){
    var input=event.target;
    if(isNaN(input.value) || input.value<=0){
        input.value=1;
    }
    updatetotal();
    saveCartItems();
    updateCartItem ();
}
//  function addcart
function addcartclicked(event){
    var button =event.target;
    var shopProducts = button.parentElement;
    var title= shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price= shopProducts.getElementsByClassName('price')[0].innerText;
    var productimg= shopProducts.getElementsByClassName('product-img')[0].src;
    addProductToCart(title,price,productimg);
    updatetotal();
    saveCartItems();
    updateCartItem ();

}
function addProductToCart(title,price,productimg) {
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add('cart-box');
    var CartItems = document.getElementsByClassName('cart-content')[0];
    var CartItemsNames= CartItems.getElementsByClassName('cart-product-title');
    for(var i=0; i<CartItemsNames.length;i++){
        if(CartItemsNames[i].innerText == title){
            alert("vous avez deja ajouté ce produit a la carte");
            return;
        }
    }
    var cartBoxContent=` <img src="${productimg}" alt="" class="cart-img">
    <div class="detail-box">
        <div class="cart-product-title">${title}</div>
        <div class="cart-price">${price}</div>
        <input type="number" name="" id="" value="1" class="cart-quantity">
    </div>
    <!-- remove items -->
    <i class="fa-solid fa-light fa-trash cart-remove" ></i>`;
    cartShopBox.innerHTML= cartBoxContent;
    CartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart-remove')[0]
    .addEventListener('click',removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0]
    .addEventListener('change',quantitychanged);
    saveCartItems();
    updateCartItem ();
}


// update total
function updatetotal(){
    var cartcontent = document.getElementsByClassName('cart-content')[0];
    var cartboxes = cartcontent.getElementsByClassName('cart-box');
    var total=0;
    for(var i = 0 ; i < cartboxes.length;i++){
        var cartbox= cartboxes[i];
        var priceElement= cartbox.getElementsByClassName('cart-price')[0];
        var quantityElement= cartbox.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("$",""));
        var quantity = quantityElement.value;
        total = total + (price*quantity) ;
        
    }
    // if price contain some cent
    total = Math.round(total*100)/100;
    document.getElementsByClassName('total-price')[0].innerText="$"+total;
    // save total to localstorage
    localStorage.setItem("cartTotal", total);
}
//  keep items in cart
function saveCartItems(){
    var cartContent= document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var CartItems=[];

    for(var i =0 ; i< cartBoxes.length;i++){
        var cartBox = cartBoxes[i];
        var titleElement = cartBox.getElementsByClassName('cart-product-title')[0];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var productImg = cartBox.getElementsByClassName('cart-img')[0].src;

        var item = {
            title: titleElement.innerText,
            price: priceElement.innerText,
            quantity: quantityElement.value,
            productImg: productImg,
        };
        CartItems.push(item);
    }
    localStorage.setItem('cartItems', JSON.stringify(CartItems));
}
 //load to cart
 function loadCartItems () {
    var cartItems = localStorage.getItem('cartItems');
    if(cartItems){
        cartItems = JSON.parse(cartItems);

        for (var i=0 ;i< cartItems.length;i++ ){
            var item = cartItems[i];
            addProductToCart(item.title, item.price, item.productImg);

            var cartBoxes = document.getElementsByClassName('cart-box');
            var cartBox = cartBoxes[cartBoxes.length - 1];
            var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
            quantityElement.value = item.quantity;
        }
    }
    var cartTotal =localStorage.getItem('cartTotal');
    if(cartTotal) {
        document.getElementsByClassName('total-price')[0].innerText= "$"+ cartTotal;
    } 
    updateCartItem ();

 }
//quantity in cart icon
function updateCartItem (){
    var cartBoxes = document.getElementsByClassName('cart-box');
    var quantity = 0;

    for( var i=0; i< cartBoxes.length;i++ ){
        var cartBox = cartBoxes[i];
        var quantityElement= cartBox.getElementsByClassName('cart-quantity')[0];
        quantity+= parseInt(quantityElement.value);

    }
    var cartIcon = document.querySelector('#cart-icon');
    cartIcon.setAttribute('data-quantity', quantity);
}











