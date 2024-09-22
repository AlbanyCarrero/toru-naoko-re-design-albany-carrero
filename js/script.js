//NAVBAR SCROLL COLOR//

const navEl = document.querySelector('.navbar');

function handleScroll() {
  if (window.innerWidth >= 991) {
    if (window.scrollY >= 56) {
      navEl.classList.add('navbar-scrolled');
    } else {
      navEl.classList.remove('navbar-scrolled');
    }
  } else {
    navEl.classList.remove('navbar-scrolled');
  }
}

window.addEventListener('scroll', handleScroll); 

window.addEventListener('load', () => {
  handleScroll();
});

window.addEventListener('resize', () => {
  handleScroll();
});

//SWIPER//
var swiper = new Swiper(".mySwiper1", {
  effect: "coverflow",
  grabCursor: false,
  centeredSlides: true,
  //slidesPerView: "auto",//
  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  //spaceBetween: 30,//
  loop: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper", {
  centeredSlides: true,
  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});


var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber=0;

next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
        if(!validateform()){
            return false
        }
       formnumber++;
       updateform();
       progress_forward();
       contentchange();
    });
}); 

var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumber--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#input-first-name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumber++;
       updateform(); 
    });
});
 

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('active');
    })
    main_form[formnumber].classList.add('active');
} 
 
function progress_forward(){
    step_list[formnumber].classList.add('active');
}  

function progress_backward(){
    var form_num = formnumber+1;
    step_list[form_num].classList.remove('active');
} 
 
var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange(){
     step_num_content.forEach(function(content){
        content.classList.remove('active'); 
        content.classList.add('d-none');
     }); 
     step_num_content[formnumber].classList.add('active');
 } 
 
 
function validateform(){
    validate=true;
    var validate_inputs=document.querySelectorAll(".main.active input");

    return validate;
}

