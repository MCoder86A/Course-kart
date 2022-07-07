// import "animejs";



$(function(){
    animateAboutUs();
    animatefooterMenu();
    animateCorona();
});

function animateCorona() {
    let el = document.querySelector(".sld .wall .svg svg");
    el.addEventListener('mouseover',()=>{
        anime({
            targets: el,
            rotate: '+=160',
            duration: 1000,
            easing : 'easeOutSine'
        })
    });
}

function animatefooterMenu() {
    let el = document.querySelector(".footer .list");
    let list = el.getElementsByClassName("item");
    for(let i=0; i<list.length; i++){
        list[i].addEventListener('mouseover',()=>{
            anime({
                targets: list[i],
                border: {
                    value: '1px solid rgb(65, 244, 70, 1)',
                    duration: 1000,
                },
                borderRadius:{
                    value: '0.8em',
                    duration: 1000,
                }
            })
        });
        list[i].addEventListener('mouseleave', ()=>{
            anime({
                targets: list[i],
                border: {
                    value: '1px solid rgb(65, 244, 70, 0)',
                    duration: 2000,
                },
                borderRadius:{
                    value: '0.1em',
                    duration: 2000,
                }
            })
        });
    }
};

function animateAboutUs() {
    let el = document.querySelector(".footer .about");
    let w = el.offsetWidth;
    let h = el.offsetHeight;
    $('.footer .about').hover(()=>{
        anime({
            targets : '.footer .about',
            width: {
                value: w+5,
                duration: 200
            },
            height: {
                value: h+0,
                duration: 100
            },
            borderColor: {
                value: 'rgb(65, 244, 70)',
                duration: 200,
            },
            borderRadius: {
                value: '1em',
                duration: 200,
            },
            easing: 'linear',
        });
    })
    $('.footer .about').mouseleave(()=>{
        anime({
            targets : '.footer .about',
            width: {
                value: w,
                duration: 200
            },
            height: {
                value: h,
                duration: 100
            },
            borderColor: {
                value: 'rgb(255, 255, 255)',
                duration: 200,
            },
            borderRadius: {
                value: '0em',
                duration: 200,
            },
            easing: 'linear',
        });
    });
};