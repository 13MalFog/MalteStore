function saveToCart(productId) {

    console.log("Adding product to cart:", productId);
    let cart = document.cookie.split(";");
    for(let i = 0; i < cart.length; i++){
        let cookie = cart[i].split("=");
        if(cookie[0] = "cart_items"){
            value = cookie[1];
            break;
        }
    }

    let expireTime = new Date();
    expireTime.setTime(expireTime.getTime() + 10*24*60*60*1000)
    document.cookie = "cart_items=" + productId + "; expires=" + expireTime.toUTCString();
}