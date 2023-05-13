// Icon Buttons
const ratingButton = document.querySelector('#rating-btn');
const ratingExitButton = document.querySelector('#rating-exit');
const buyButton = document.querySelector('#buy-btn');
const buyExitButton = document.querySelector('#buy-exit');
const ratingDesc = document.querySelector('.rating-desc');
const radioInputs = document.querySelectorAll('.radio-input');

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


// Star Clicks
radioInputs.forEach(input => {
  input.addEventListener('click', () => {
    switch(input.value) {
      case '5':
        ratingDesc.textContent = 'It was awesome!';
        break;
      case '4':
        ratingDesc.textContent = 'It was worth the money!';
        break;
      case '3':
        ratingDesc.textContent = 'It was just okay';
        break;
      case '2':
        ratingDesc.textContent = 'It was poor quality';
        break;
      case '1':
        ratingDesc.textContent = 'It was terrible!';
        break;
      default:
        ratingDesc.textContent = '';
    }
  });
});




