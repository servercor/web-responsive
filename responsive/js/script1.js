let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

/** formulario flotante */
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
/**fin formulario flotante */

/**seleccion de video */
let videoBtn = document.querySelectorAll('.vid-btn');
/**fin de seleccion de video */

/**inicio menu flotante */
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
/**fin menu flotante */

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{ /**menu flotante */
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    });

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');  /** el fa-times jala extencion de otra web el x */
    searchBar.classList.toggle('active');
    });

    formBtn.addEventListener('click', () =>{
        loginForm.classList.add('active');
    });

    formClose.addEventListener('click', () =>{
        loginForm.classList.remove('active');
    });

/** JS seleccion de video */
    videoBtn.forEach(btn =>{
        btn.addEventListener('click', ()=>{
            document.querySelector('.controls .active').classList.remove('active');
            btn.classList.add('active');

            let src = btn.getAttribute('data-src');
            document.querySelector('#video-slider').src = src;
    
        });
    });
    /**fin de seleccion de video */

    /** inicio de SWIPER */

    var swiper = new Swiper(".review-slider", {
        spaceBetween: 20,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    /**fin de SWIPER */

/**brand SLIDER */
    var swiper = new Swiper(".brand-slider", {
        spaceBetween: 20,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            450: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    