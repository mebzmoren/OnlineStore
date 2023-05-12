// Icon Buttons
const ratingButton = document.querySelector('#rating-btn');
const ratingExitButton = document.querySelector('#rating-exit');
const buyButton = document.querySelector('#buy-btn');
const buyExitButton = document.querySelector('#buy-exit');

// Modals
const ratingModal = document.querySelector('.rating-pop');
const buyModal = document.querySelector('.modal-pop');

// Exit Buttons
ratingExitButton.addEventListener('click', () => {
  ratingModal.classList.remove('active');
});

buyExitButton.addEventListener('click', () => {
  buyModal.classList.remove('active');
});

// Pop up Modals
ratingButton.addEventListener('click', () => {
  ratingModal.classList.toggle('active');
});  

buyButton.addEventListener('click', () => {
  buyModal.classList.toggle('active');
}); 

