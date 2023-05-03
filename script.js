const userBtn = document.querySelector("#acc-btn");

const loginModal = document.querySelector(".user-pop")

userBtn.onclick = () => {
  loginModal.classList.toggle('active');
}

