const go = (elem) => {
    var div = document.querySelector(elem);
    window.scroll({
        top: div.offsetTop + div.clientHeight - 30,
        left: 0,
        behavior: 'smooth'
    });
};

const openMenuBtn = document.querySelector('.hiddenMenu');
const openIcon = document.querySelector('.hiddenMenu img');
const menu = document.querySelector('.otherLinks');
const links = document.querySelectorAll('.otherLinks a');
openMenuBtn.addEventListener('click', openMenu);
var open = false;
function openMenu() {
    if (open === false) {
        for (let i = 0; i < 4; i++) {
            links[i].style.opacity = 1;
        }
        menu.style.width = "70vw";
        menu.style.opacity = 1;
        openIcon.src = "./imagens/x.svg";
        open = true;
    } else {
        for (let i = 0; i < 4; i++) {
            links[i].style.opacity = 0;
        }
        menu.style.width = 0;
        menu.style.opacity = 0;
        openIcon.src = "./imagens/menu.svg";
        open = false;
    }
}





