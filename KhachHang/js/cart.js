var btn = document.querySelectorAll("button")
btn.forEach(function(button, index){
    button.addEventListener("click", function(event){
        var btnItem = event.target;
        var product = btnItem.parentElement;
        var productImg = product.querySelector("img").src;
        var productName = product.querySelector("h5").innerText;
        var productPrice = product.querySelector("span").innerText;
        addcart(productPrice, productImg, productName)
    })
})

function addcart(productPrice, productImg, productName){
    var addtr = document.createElement("tr");
    var cartItem = document.querySelectorAll("tbody tr");
    for (var i = 0; i<cartItem.length; i++){
        var productT = document.querySelectorAll(".title");
        if(productT[i].innerHTML == productName){
            alert("Sản phẩm của bạn đã có trong giỏ hàng");
            return;
        }
    }
    var trcontent = ' <tr><td><img src="'+productImg+'" alt=""> <br><p class="title">'+productName+'</p> </td><td><span>'+productPrice+'</span><sup>đ</sup></td><td><input type="number" value="1" min="1"></td><td class="choice"><span class="delete">Xoá</span></td></tr>';
    addtr.innerHTML = trcontent;
    var carttable = document.querySelector("tbody");
    carttable.append(addtr);

    carttotal();
    deleteCart();
}

// -------------------tính tổng-----------------------

function carttotal(){
    var cartItem = document.querySelectorAll("tbody tr");
    var totalC = 0;

    for (var i = 0; i < cartItem.length; i++){
        var inputValue = cartItem[i].querySelector("input").value;
        var productPrice = cartItem[i].querySelector("span").innerHTML;
        // console.log(productPrice)
        totalA = inputValue * productPrice* 1000;
        totalC = totalC + totalA;
    }
    var carttotalA = document.querySelector(".tongtien span");
    carttotalA.innerHTML = totalC.toLocaleString('de-DE');
    inputchange();
}

function inputchange(){//khi thay đổi sl thì tiền thay đổi theo
    var cartItem = document.querySelectorAll("tbody tr");
    for (var i = 0; i<cartItem.length; i++){
        var inputValue = cartItem[i].querySelector("input");
        inputValue.addEventListener("change", function(){
            carttotal();
        })
    }
}

// -----------------------------xoá----------------------

function deleteCart(){
    var cartItem = document.querySelectorAll("tbody tr");
    for (var i = 0; i<cartItem.length; i++){
        var productT = document.querySelectorAll(".delete");
        productT[i].addEventListener("click", function(event){
            var cartDelete = event.target;
            var cartitemDelete = cartDelete.parentElement.parentElement;
            cartitemDelete.remove();
            carttotal();
        })
    }
}

var cartclose = document.querySelector(".ti-close");
var cartshow = document.querySelector(".ti-shopping-cart");
cartshow.addEventListener("click", function(){
    document.querySelector(".cart").style.display = "block";
})
cartclose.addEventListener("click", function(){
    document.querySelector(".cart").style.display = "none";
})



