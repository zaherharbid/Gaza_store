
// Toggle heart icon on click
const heartIcons = document.querySelectorAll('.btn-icon');

heartIcons.forEach(icon => {
  icon.addEventListener('click', () => {
    icon.classList.toggle('active');
  });
});

// Add to cart button functionality (basic feedback)
const cartButtons = document.querySelectorAll('.btn-cart');

cartButtons.forEach(button => {
  button.addEventListener('click', () => {
    const productCard = button.closest('.product-card');
    const productName = productCard.querySelector('.name').textContent;
    alert(`"${productName}" has been added to your cart.`);
  });
});