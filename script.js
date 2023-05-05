// Icon Buttons
const accountButton = document.querySelector('#acc-btn');
const shopButton = document.querySelector('#shop-btn');
const exitButton = document.querySelector('#exit-btn');
const memberButton = document.querySelector('#member-btn');
const sellerButton = document.querySelector('#seller-btn');
const ratingButton = document.querySelector('#rating-btn');
const categoriesButton = document.querySelector('#cate-btn');
const priceButton = document.querySelector('#price-btn');
const colorButton = document.querySelector('#color-btn');
const sizeButton = document.querySelector('#size-btn');
const filterButton = document.querySelector('#filter-btn');

// Exit Buttons
const memberExitButton = document.querySelector('#member-exit');
const registerExitButton = document.querySelector('#register-exit');
const sellerExitButton = document.querySelector('#seller-exit');
const ratingExitButton = document.querySelector('#rating-exit');
const orderExitButton = document.querySelector('#order-exit');

// Modals
const loginModal = document.querySelector('.user-pop');
const memberModal = document.querySelector('.login');
const sellerModal = document.querySelector('.seller');
const registerModal = document.querySelector('.register');
const shopModal = document.querySelector('.shopping-cart');
const ratingModal = document.querySelector('.rating');
const categoriesModal = document.querySelector('.categories');
const priceModal = document.querySelector('.price-filter');
const colorModal = document.querySelector('.colors');
const sizeModal = document.querySelector('.sizes');
const filterModal = document.querySelector('.filter');
const filters = document.querySelector('.bottom-filter');

// Toggles
const toggleColor = document.querySelector('toggle-color');
const priceToggle = document.querySelector('#price-toggle');
const colorToggle = document.querySelector('#color-toggle');
const sizeToggle = document.querySelector('#size-toggle');
const categoriesToggle = document.querySelector('#cate-toggle');

// Filters
filterButton.addEventListener('click', () => {
  filterModal.classList.toggle('active');
  filterButton.classList.toggle('active');
})

priceButton.addEventListener('click', () => {
  priceToggle.classList.toggle('fa-angle-up');
  priceModal.classList.toggle('active');
});

colorButton.addEventListener('click', () => {
  colorToggle.classList.toggle('fa-angle-up');
  colorModal.classList.toggle('active');
});

sizeButton.addEventListener('click', () => {
  sizeToggle.classList.toggle('fa-angle-up');
  sizeModal.classList.toggle('active');
});

// Exit Buttons
exitButton.addEventListener('click', () => {
  loginModal.classList.remove('active');
});

memberExitButton.addEventListener('click', () => {
  memberModal.classList.remove('active');
});

sellerExitButton.addEventListener('click', () => {
  sellerModal.classList.remove('active');
});

registerExitButton.addEventListener('click', () => {
  registerModal.classList.remove('active');
});

ratingExitButton.addEventListener('click', () => {
  ratingModal.classList.remove('active');
});

orderExitButton.addEventListener('click', () => {
  shopModal.classList.remove('active');
});


// Popup Modals
categoriesButton.addEventListener('click', () => {
  categoriesToggle.classList.toggle('fa-angle-up');
  categoriesToggle.classList.toggle('fa-angle-down');
  shopModal.classList.remove('active');
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.toggle('active');
  toggleColor.classList.toggle('active');
});

shopButton.addEventListener('click', () => {
  shopModal.classList.toggle('active');
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
});

accountButton.addEventListener('click', () => {
  loginModal.classList.toggle('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

memberButton.addEventListener('click', () => {
  loginModal.classList.remove('active');
  memberModal.classList.toggle('active');
  sellerModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

sellerButton.addEventListener('click', () => {
  sellerModal.classList.toggle('active');
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.remove('active');
  shopModal.classList.remove('active');
});

ratingButton.addEventListener('click', () => {
  sellerModal.classList.remove('active');
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  categoriesModal.classList.remove('active');
  ratingModal.classList.toggle('active');
  shopModal.classList.remove('active');
});
