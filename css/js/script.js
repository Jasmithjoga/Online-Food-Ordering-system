let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(name, price){
    cart.push({name, price});
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("Added to cart");
}

function loadCart(){
    let table = document.getElementById("cartTable");
    let total = 0;

    table.innerHTML = "";

    cart.forEach(item => {
        total += item.price;
        table.innerHTML += `<tr>
            <td>${item.name}</td>
            <td>$${item.price}</td>
        </tr>`;
    });

    document.getElementById("total").innerText = "Total: $" + total;
}

function prepareOrder(){
    let total = cart.reduce((sum, item)=> sum+item.price,0);

    document.getElementById("itemsInput").value = JSON.stringify(cart);
    document.getElementById("totalInput").value = total;

    localStorage.removeItem("cart");

    return true;
}
