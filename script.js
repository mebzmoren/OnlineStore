const userBtn = document.querySelector('#acc-btn');
const userPopBtn = document.querySelector('#exit-btn');
const memberBtn = document.querySelector('#member-btn');
const sellerBtn = document.querySelector('#seller-btn');
const cateBtn = document.querySelector('#cate-btn');
const priceBtn = document.querySelector('#price-btn');
const colorBtn = document.querySelector('#color-btn');
const sizeBtn = document.querySelector('#size-btn');
const memberExitBtn = document.querySelector('#member-exit');
const registerExitBtn = document.querySelector('#register-exit');
const sellerExitBtn = document.querySelector('#seller-exit');

const loginModal = document.querySelector('.user-pop')
const memberModal = document.querySelector('.login');
const sellerModal = document.querySelector('.seller');
const registerModal = document.querySelector('.register');
const cateModal = document.querySelector('.categories');
const priceModal = document.querySelector('.price-filter');
const colorModal = document.querySelector('.colors');
const sizeModal = document.querySelector('.sizes');
const toggleColor = document.querySelector('toggle-color');

const priceToggle = document.querySelector('#price-toggle');
const colorToggle = document.querySelector('#color-toggle');
const sizeToggle = document.querySelector('#size-toggle');
const cateToggle = document.querySelector('#cate-toggle');

// Popup Modals
userBtn.onclick = () => {
  loginModal.classList.toggle('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  cateModal.classList.remove('active');
}

memberBtn.onclick = () => {
  loginModal.classList.remove('active');
  memberModal.classList.toggle('active');
  sellerModal.classList.remove('active');
  cateModal.classList.remove('active');
}

sellerBtn.onclick = () => {
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  sellerModal.classList.toggle('active');
  cateModal.classList.remove('active');
}

cateBtn.onclick = () => {
  cateToggle.classList.toggle('fa-angle-down');
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  cateModal.classList.toggle('active');
  toggleColor.classList.toggle('active');
}

userPopBtn.onclick = () => {
  loginModal.classList.remove('active');
}

memberExitBtn.onclick = () => {
  memberModal.classList.remove('active');
}

sellerExitBtn.onclick = () => {
  sellerModal.classList.remove('active');
}

registerExitBtn.onclick = () => {
  registerModal.classList.remove('active');
}

// Filters
priceBtn.onclick = () => {
  priceToggle.classList.toggle('fa-angle-up');
  priceModal.classList.toggle('active');
}

colorBtn.onclick = () => {
  colorToggle.classList.toggle('fa-angle-up');
  colorModal.classList.toggle('active');
}

sizeBtn.onclick = () => {
  sizeToggle.classList.toggle('fa-angle-up');
  sizeModal.classList.toggle('active');
}