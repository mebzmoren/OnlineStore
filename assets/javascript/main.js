// Icon Buttons
const accountButton = document.querySelector('#acc-btn');
const shopButton = document.querySelector('#shop-btn');
const exitButton = document.querySelector('#exit-btn');
const memberButton = document.querySelector('#member-btn');
const sellerButton = document.querySelector('#seller-btn');
const categoriesButton = document.querySelector('#cate-btn');
const redirectLogInButton = document.querySelector('#signin-btn');
const redirectRegisterButton = document.querySelector('#register-btn');
const redirectSellerButton = document.querySelector('#seller-redirect-btn');

// Exit Buttons
const loginExitButton = document.querySelector('#login-exit');
const registerExitButton = document.querySelector('#register-exit');
const sellerExitButton = document.querySelector('#seller-exit');
const orderExitButton = document.querySelector('#order-exit');

// Modals
const loginPopModal = document.querySelector('.user-pop');
const loginModal = document.querySelector('.login');
const sellerModal = document.querySelector('.seller');
const registerModal = document.querySelector('.register');
const categoriesModal = document.querySelector('.categories');
const shopModal = document.querySelector('.shopping-cart');

// Toggles
const toggleColor = document.querySelector('toggle-color');
const categoriesToggle = document.querySelector('#cate-toggle');

// Exit Buttons
exitButton.addEventListener('click', () => {
  loginPopModal.classList.remove('active');
});

loginExitButton.addEventListener('click', () => {
  loginModal.classList.remove('active');
});

sellerExitButton.addEventListener('click', () => {
  sellerModal.classList.remove('active');
});

registerExitButton.addEventListener('click', () => {
  registerModal.classList.remove('active');
});

orderExitButton.addEventListener('click', () => {
  shopModal.classList.remove('active');
});

// Popup Modals
categoriesButton.addEventListener('click', () => {
  categoriesToggle.classList.toggle('fa-angle-up');
  categoriesToggle.classList.toggle('fa-angle-down');
  categoriesButton.classList.toggle('active');
  categoriesModal.classList.toggle('active');
  shopModal.classList.remove('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.remove('active');
  sellerModal.classList.remove('active');
  toggleColor.classList.toggle('active');
});

shopButton.addEventListener('click', () => {
  shopModal.classList.toggle('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
});

accountButton.addEventListener('click', () => {
  loginPopModal.classList.toggle('active');
  registerModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

memberButton.addEventListener('click', () => {
  loginPopModal.classList.remove('active');
  registerModal.classList.toggle('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

redirectRegisterButton.addEventListener('click', () => {
  loginModal.classList.remove('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.toggle('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

redirectLogInButton.addEventListener('click', () => {
  loginModal.classList.toggle('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

redirectSellerButton.addEventListener('click', () => {
  sellerModal.classList.remove('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.toggle('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

sellerButton.addEventListener('click', () => {
  sellerModal.classList.toggle('active');
  loginPopModal.classList.remove('active');
  registerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});