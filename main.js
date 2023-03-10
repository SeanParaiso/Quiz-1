var nav = document.querySelector('.nav');
var menu = document.querySelector('.menu');
menu.addEventListener('click',function(){
    nav.classList.toggle('active');
})

window.addEventListener('scroll',function(){
    var header = document.querySelector('.scroll');
    header.classList.toggle('sticky',window.scrollY>0)
})


window.addEventListener('scroll',function(){
    var scrolltop = document.querySelector('.scroll-up');
    if(this.scrollY >= 500){
        scrolltop.classList.add('show-scroll');
    }else{
        scrolltop.classList.remove('show-scroll');
    }
})


var section = document.querySelectorAll('section[id]');

function scrollactive(){
    var scrollY = window.scrollY;
    section.forEach(current =>{
        var sectionHeight = current.offsetHeight;
        var sectionTop = current.offsetTop - 100;
        sectionId = current.getAttribute('id')
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('nav a[href*=' +sectionId + ']').classList.add('link-active')
        } else {
            document.querySelector('nav a[href*=' +sectionId + ']').classList.remove('link-active')

        }
    })
}

window.addEventListener('scroll', scrollactive);