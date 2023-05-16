// Icon Buttons
const discountButton = document.querySelector('#discount-btn');
const plusButton = document.querySelector('#plus-btn');
const minusButton = document.querySelector('#minus-btn');

// Exit Buttons
const discountExitButton = document.querySelector('#discount-exit');

// Span Icons
const num = document.querySelector('.num');

// Modals
const discountPopModal = document.querySelector('.discount-modal');

// Exit Toggle
discountExitButton.addEventListener('click', () => {
  discountPopModal.classList.remove('active');
});

// Icon Toggle
discountButton.addEventListener('click', () => {
  discountPopModal.classList.toggle('active');
});

plusButton.addEventListener('click', () => {
  if (num.value >= 100) {
    num.value = 100;
  } else {
    num.value = parseInt(num.value) + 1;
  }
});

minusButton.addEventListener('click', () => {
  if (num.value <= 0) {
    num.value = 0;
  } else {
    num.value = parseInt(num.value) - 1;
  }
}); 