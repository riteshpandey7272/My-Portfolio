let hamberger=document.querySelector('.hamberger');
let times=document.querySelector('.times');
let mobileNav=document.querySelector('.mobile-nav');
let menu = document.querySelector('.menu');

    hamberger.addEventListener('click',function (){
        mobileNav.classList.add('open');
    });
    
    times.addEventListener('click',function (){
        mobileNav.classList.remove('open');
    });

    menu.addEventListener('click', function(){
        mobileNav.classList.remove('open');
    })