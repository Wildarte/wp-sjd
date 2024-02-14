$(document).ready(function(){
    $(".carousel_dest").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(".destaques_page").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    const btn_menu = document.querySelector('.btn_menu');
    const nav_menu = document.querySelector('nav.menu');
    const btn_close_menu = document.querySelector('.btn_close_menu');

    btn_menu.addEventListener('click', () => {
        nav_menu.classList.add('open_menu')
    });

    btn_close_menu.addEventListener('click', () => {
        nav_menu.classList.remove('open_menu')
    });


    const btn_search = document.querySelector('.btn_search');
    const over_search = document.querySelector('.over_search');
    const btn_close_search = document.querySelector('.btn_close_search');

    btn_search.addEventListener('click', () => {

        over_search.classList.add('open_search')

    });

    btn_close_search.addEventListener('click', () => {

        over_search.classList.remove('open_search')

    });


    //========================= page secretarias ==================================
    const container_comp = document.querySelector('.container_comp');
    if(container_comp){
        
        const card_comp = document.querySelectorAll('.card_comp');
        const btn_card_comp_more = document.querySelectorAll('.btn_card_comp_more');
        const desc_card_comp = document.querySelectorAll('.desc_card_comp');
        const over_card_comp = document.querySelectorAll('.over_card_comp');
        const btn_close_card_comp = document.querySelectorAll('.btn_close_card_comp');
        const btn_card_comp_more_mobile = document.querySelectorAll('.btn_card_comp_more_mobile');

        btn_card_comp_more.forEach((item, index) => {

            item.addEventListener('click', () => {

                card_comp[index].classList.add('open_card_comp');
                desc_card_comp[index].classList.add('open_desc_card_comp');
                over_card_comp[index].classList.add('open_over_card_comp');
                btn_close_card_comp[index].classList.add('d-block')

            });

            btn_close_card_comp[index].addEventListener('click', () => {
                card_comp[index].classList.remove('open_card_comp');
                desc_card_comp[index].classList.remove('open_desc_card_comp');
                over_card_comp[index].classList.remove('open_over_card_comp');
                btn_close_card_comp[index].classList.remove('d-block')
            });

        });

        btn_card_comp_more_mobile.forEach((item, index) => {
            item.addEventListener('click', () => {
                if(desc_card_comp[index].classList.contains('open_desc_card_comp')){
                    desc_card_comp[index].classList.remove('open_desc_card_comp');
                    item.innerHTML = "Ver Mais";
                }else{
                    desc_card_comp[index].classList.add('open_desc_card_comp');
                    item.innerHTML = "Ocultar";
                }
                
            })
        })

    }

});