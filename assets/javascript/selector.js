// Selector Buttons
const buySelectorButton = document.querySelector('.buy-selector');
const likedSelectorButton = document.querySelector('.liked-selector');

// Modals
const buySelectModal = document.querySelector('.buy-order');
const likedSelectModal = document.querySelector('.liked-grid');

// Popup Modals
buySelectorButton.addEventListener('click', () => {
  buySelectModal.classList.toggle('active');
  likedSelectModal.classList.remove('active');
  buySelectorButton.classList.toggle('active');
  likedSelectorButton.classList.toggle('active');
});

likedSelectorButton.addEventListener('click', () => {
  buySelectModal.classList.toggle('active');
  likedSelectModal.classList.toggle('active');
  buySelectorButton.classList.toggle('active');
  likedSelectorButton.classList.toggle('active');
});