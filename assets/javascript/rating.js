// Icon Buttons
const ratingButton = document.querySelector('#rating-btn');
const ratingExitButton = document.querySelector('#rating-exit');

// Modals
const ratingModal = document.querySelector('.rating');

// Pop up Modals
ratingButton.addEventListener('click', () => {
  ratingModal.classList.toggle('active');
});

ratingExitButton.addEventListener('click', () => {
  ratingModal.classList.remove('active');
});
