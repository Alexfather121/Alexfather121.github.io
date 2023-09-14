	let burger = document.getElementsByClassName('header__burger')[0];
	let nav__list = document.getElementsByClassName('menu__list')[0];
	let body = document.getElementsByTagName('body')[0];

	burger.addEventListener('click', function(){
            burger.classList.toggle('active');
			nav__list.classList.toggle('active');
        })

	body.addEventListener('click', function(evt){
		if(evt.target != burger && burger.classList.contains('active')){
			burger.classList.remove('active');
			nav__list.classList.remove('active');
		};
        })