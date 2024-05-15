let btn_left = document.querySelector('.buy__slider__btn.left');
let btn_right = document.querySelector('.buy__slider__btn.right');
let sld_prod = document.querySelectorAll('.slider_product'); //число элементов слайдера
let sld_cover = document.querySelector('.buy__slider__cover'); //оболочка слайдера

function btn(){

let step = sld_prod[0].clientWidth;

let rex = /translateX\((.*?)px\)/;

let sld_width = step * sld_prod.length;
let wind_width = sld_cover.offsetWidth;

let n_count = Math.ceil((sld_width - wind_width) / step);

let curr = 0;

if(!curr){
    btn_left.classList.add('lock');
}



btn_left.addEventListener('click',function(evt){

    if(!curr || curr == 0){
        btn_left.classList.add('lock');
        evt.preventDefault();
        return 0;
    }

    n_count+=1;

    if(n_count == 0){
        btn_right.classList.add('lock');
        evt.preventDefault();
        return 0;
    }

    curr += step;

    sld_cover.setAttribute("style", "transform: translateX(" + curr + "px)");

    if(!curr || curr == 0){
        btn_left.classList.add('lock');
    }
    if(n_count >= 0){
        btn_right.classList.remove('lock');
        evt.preventDefault();
        return 0;
    }

    evt.preventDefault();

})

btn_right.addEventListener('click',function(evt){

    if(n_count <= 0){
        btn_right.classList.add('lock');
        evt.preventDefault();
        return 0;
    }
    n_count-=1;
    curr -= step;

    sld_cover.setAttribute("style", "transform: translateX(" + curr + "px)");

    if(curr){
        btn_left.classList.remove('lock');
    }

    if(!curr || curr == 0){
        btn_left.classList.add('lock');
    }
    if(n_count <= 0){
        btn_right.classList.add('lock');
        evt.preventDefault();
        return 0;
    }

    evt.preventDefault();
})
};

btn();

body.addEventListener("resize", (event) => {btn});