let items = [
  { quantity: 1, pricePerItem: 200 },
  { quantity: 2, pricePerItem: 350 },
  { quantity: 1, pricePerItem: 150 }
];

function renderCartTotals() {
  let subtotal = 0;
  items.forEach((item, i) => {
    const qty = item.quantity;
    const price = item.pricePerItem * qty;

    document.getElementById(`qty-${i}`).innerText = qty;
    document.getElementById(`price-${i}`).innerText = price;

    subtotal += price;
  });

  const discount = subtotal * 0.05;
  const delivery = 30;
  const total = subtotal - discount + delivery;

  document.getElementById('subtotal').innerText = `${subtotal} $`;
  document.getElementById('discountAmount').innerText = `${discount.toFixed(0)}`;
  document.getElementById('total').innerText = `${total.toFixed(0)} $`;
}

function increase(index) {
  items[index].quantity++;
  renderCartTotals();
}

function decrease(index) {
  if (items[index].quantity > 1) {
    items[index].quantity--;
    renderCartTotals();
  }
}

function removeItem(index) {
  const itemElement = document.querySelector(`.item[data-index='${index}']`);
  if (itemElement) itemElement.remove();
  items.splice(index, 1);

  // إعادة ضبط ترتيب الفهارس والأحداث
  document.querySelectorAll('.item').forEach((item, i) => {
    item.dataset.index = i;
    item.querySelector('.item-controls button:nth-child(1)').setAttribute('onclick', `increase(${i})`);
    item.querySelector('.item-controls button:nth-child(3)').setAttribute('onclick', `decrease(${i})`);
    item.querySelector('.delete-btn').setAttribute('onclick', `removeItem(${i})`);
    item.querySelector('span[id^=qty-]').id = `qty-${i}`;
    item.querySelector('span[id^=price-]').id = `price-${i}`;
  });

  renderCartTotals();
}

document.addEventListener('DOMContentLoaded', renderCartTotals);
