const login = document.querySelector(".login");
const userBtn = document.querySelector("#acc-btn");

const loginModal = document.querySelector(".hero.login")
const loginBtn = document.querySelector("#login_btn")

const categories =document.querySelector(".categories");
const cateBtn = document.querySelector("#cate_btn");

loginBtn.onclick = () => {
  loginModal.classList.toggle('active');
}

cateBtn.onclick = () => {
  categories.classList.toggle('active');
}

userBtn.onclick = () => {
  login.classList.toggle('active');
}

