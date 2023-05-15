// Icon Buttons
const likeButtons = document.querySelector('.like');

// Icon click
likeButtons.forEach(button => {
  button.addEventListener('click', () => {
    button.classList.toggle('fa-solid');
  });
});