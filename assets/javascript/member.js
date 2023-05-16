// Icon Buttons
const qtyPlusButton = document.querySelector('#qty-plus-btn');
const qtyMinusButton = document.querySelector('#qty-minus-btn');

// Span Icons
const buyQuantity = document.querySelector('.buy-qty');

// Icon Toggle
qtyPlusButton.addEventListener('click', () => {
  if (buyQuantity.value >= 100) {
    buyQuantity.value = 100;
  } else {
    buyQuantity.value = parseInt(buyQuantity.value) + 1;
  }
});

qtyMinusButton.addEventListener('click', () => {
  if (buyQuantity.value <= 0) {
    buyQuantity.value = 0;
  } else {
    buyQuantity.value = parseInt(buyQuantity.value) - 1;
  }
});