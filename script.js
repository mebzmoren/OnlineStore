const login = document.querySelector(".login");
const userBtn = document.querySelector("#acc-btn");
const categories =document.querySelector(".categories");
const cateBtn = document.querySelector("#cate_btn");

cateBtn.onclick = () => {
  categories.classList.toggle('active');
}

userBtn.onclick = () => {
  login.classList.toggle('active');
}

