const cartBtn= document.querySelector('.cartBtn');
cartBtn.addEventListener('click',function() {
    fetch('./backend/formconn/get-cart.php').then(response=>{
        if(!response.ok){
            throw new Error('Network not working')
        }
        return response.json();
    })
    .then(data=>{
        document.querySelector('#cartCount').textContent=data.cartCount;
    })
    .catch(error=>{
        console.log("ERROR1");
    })
})
document.querySelectorAll('.addToCart').forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.getAttribute('data-product-id');
        const productPrice = this.getAttribute('data-price');
        
        fetch('./backend/formconn/add-to-cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                productId: productId,
                productPrice: productPrice
            }),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle data response here without alerts
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
}); 