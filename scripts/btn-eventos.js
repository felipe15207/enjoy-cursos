//codigo menu
const logobtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");

logobtn.addEventListener("click", () => menu.classList.toggle("active"));

$(document).ready(function(){
    $(".user-container").click(function(){
        $(".caixa-login-cadastro").toggle(); // Use toggle() em vez de show()
    });
});