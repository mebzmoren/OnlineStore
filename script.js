const userBtn = document.querySelector("#acc-btn");
const exitBtn = document.querySelector("#exit-btn");
const memberBtn = document.querySelector("#member-btn");
const sellerBtn = document.querySelector("#seller-btn");
const cateBtn = document.querySelector("#cate-btn");

const loginModal = document.querySelector(".user-pop")
const memberModal = document.querySelector(".login");
const sellerModal = document.querySelector(".seller");
const cateModal = document.querySelector(".categories");

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
  loginModal.classList.remove('active');
  memberModal.classList.remove('active');
  sellerModal.classList.remove('active');
  cateModal.classList.toggle('active');
}

exitBtn.onclick = () => {
  loginModal.classList.remove('active');
}

