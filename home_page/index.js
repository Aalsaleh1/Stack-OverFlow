document.addEventListener("DOMContentLoaded", function () {
  const menu = document.getElementById("humbergericon");
  const card = document.getElementById("card1");
  menu.addEventListener("click", () => {
    card.classList.toggle("active");
  });
});
document.getElementById("Signin").addEventListener("click",()=>{window.location.href="../logIn_SignIn/sign_up.php"});
document.getElementById("Login").addEventListener("click",()=>{window.location.href="../logIn_SignIn/log_in.php"});