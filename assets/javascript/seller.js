// Icon Buttons
const discountButton = document.querySelector('#discount-btn');

// Exit Buttons
const discountExitButton= document.querySelector('#discount-exit');

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