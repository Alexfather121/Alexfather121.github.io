let menubtn = document.querySelector('.header__menu');
let header_brg = document.querySelector('.header__burger');
let body = document.getElementsByTagName('body')[0];
let headerlist = document.querySelector('.header__list');

menubtn.addEventListener('click',function(){
    menubtn.classList.toggle('active');
    header_brg.classList.toggle('active');
    body.classList.toggle('lock');
    headerlist.classList.toggle('active');
})