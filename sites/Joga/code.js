let menuBtn = document.querySelector('.header__burger');
let menu = document.querySelector('.nav__list');
let body = document.getElementsByTagName('body')[0];

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
    body.classList.toggle('lock');
    menu.classList.toggle('active');
})