const cartOpen = document.querySelector(".cartBtn");
const cartClose = document.querySelector(".close-btn");
const cart= document.querySelector(".cart");
cartOpen.addEventListener('click',()=>{
    cart.classList.add('open');
})
cartClose.addEventListener('click',()=>{
    cart.classList.remove('open')
})