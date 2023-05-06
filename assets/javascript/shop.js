// Icon Buttons
const ratingButton = document.querySelector('#rating-btn');
const priceButton = document.querySelector('#price-btn');
const colorButton = document.querySelector('#color-btn');
const sizeButton = document.querySelector('#size-btn');
const filterButton = document.querySelector('#filter-btn');

// Modals
const priceModal = document.querySelector('.price-filter');
const colorModal = document.querySelector('.colors');
const sizeModal = document.querySelector('.sizes');
const filterModal = document.querySelector('.filter');

// Blocks
const filterName = document.querySelector('.header-filter-name');
const filters = document.querySelector('.bottom-filter');
const shopMain = document.querySelector('.products');
const filterHeader = document.querySelector('.header-filter');
const productMainGrid = document.querySelector('.grid-main');

// Toggles
const priceToggle = document.querySelector('#price-toggle');
const colorToggle = document.querySelector('#color-toggle');
const sizeToggle = document.querySelector('#size-toggle');

// Filters
filterButton.addEventListener('click', () => {
  filterModal.classList.toggle('active');
  filterHeader.classList.toggle('active');
  filterButton.classList.toggle('active');
  filterName.classList.toggle('active');
  filters.classList.toggle('active');
  shopMain.classList.toggle('active');
  productMainGrid.classList.toggle('active');
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

// Popup Modals
