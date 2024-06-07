//codigo menu
const logobtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");

logobtn.addEventListener("click", () => menu.classList.toggle("active"));

//codigo botao de login ou cadastro
'use strict'

        const loginContainer = document.getElementById('login-container')

        const moveOverlay = () => loginContainer.classList.toggle('move')

        document.getElementById('open-register').addEventListener('click', moveOverlay)
        document.getElementById('open-login').addEventListener('click', moveOverlay)

        document.getElementById('open-register-mobile').addEventListener('click', moveOverlay)
        document.getElementById('open-login-mobile').addEventListener('click', moveOverlay)



//codigo slider
