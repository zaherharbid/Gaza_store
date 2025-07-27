// Color selection
const colorButtons = document.querySelectorAll('.color-btn');
colorButtons.forEach(button => {
  button.addEventListener('click', () => {
    colorButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    console.log(`Selected color: ${button.dataset.color}`);
  });
});

// Size selection
const sizeButtons = document.querySelectorAll('.size-btn');
sizeButtons.forEach(button => {
  button.addEventListener('click', () => {
    sizeButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    console.log(`Selected size: ${button.textContent}`);
  });
});

// Add to cart button
const addToCartBtn = document.querySelector('.add-to-cart');
addToCartBtn.addEventListener('click', () => {
  const selectedColor = document.querySelector('.color-btn.active')?.dataset.color;
  const selectedSize = document.querySelector('.size-btn.active')?.textContent;
  alert(`Added to cart:\nColor: ${selectedColor}\nSize: ${selectedSize}`);
});

const heartIcon = document.getElementById('like-icon');

heartIcon.addEventListener('click', () => {
  heartIcon.classList.toggle('active');
});