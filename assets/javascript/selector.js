// Selector Buttons
const buySelectorButton = document.querySelector('#buy-selector');

// Modals
const buySelectModal = document.querySelector('.buy-order');

// Popup Modals
buySelectorButton.addEventListener('click', () => {
  buySelectModal.toggle('active');
  buySelectorButton.toggle('active');
}); 