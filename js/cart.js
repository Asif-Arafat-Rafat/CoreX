const cartOpen = document.querySelector(".cartBtn");
const cartClose = document.querySelector(".close-btn");
const cart= document.querySelector(".cart");
cartOpen.addEventListener('click',()=>{
    var xhr= new XMLHttpRequest();
    xhr.open('GET','./backend/formconn/get-cart.php',true);
    xhr.onreadystatechange=function () {
        if(xhr.readyState===4&&xhr.status==200){
            document.querySelector('.cartItems').innerHTML=xhr.responseText;
        }
    }
    xhr.send();
    cart.classList.add('open');

})
cartClose.addEventListener('click',()=>{
    cart.classList.remove('open')
})
