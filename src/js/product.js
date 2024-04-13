function productsFilter() {
    const searchTerm = document.getElementById('searchInput').value.trim().toLowerCase();

    const products = document.querySelectorAll('.col-sm-6.col-lg-4');
    let matchingProducts = 0;

    products.forEach(product => {
        const titleElement = product.querySelector('.card-title');
        if (titleElement) {
            const title = titleElement.textContent.trim().toLowerCase();
            const display = title.includes(searchTerm) ? 'block' : 'none';
            product.style.display = display;

            if (display === 'block') {
                matchingProducts++;
            }
        }
    });

    const noProductsMessage = document.getElementById('no-products-message');
    noProductsMessage.style.display = matchingProducts === 0 ? 'block' : 'none';
}
