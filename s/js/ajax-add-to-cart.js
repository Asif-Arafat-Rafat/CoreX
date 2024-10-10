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