(function(){new Swiper(".testimonialSwiper",{slidesPerView:2,spaceBetween:30,loop:!0,loopFillGroupWithBlank:!0,pagination:{el:".swiper-pagination",clickable:!0},autoplay:{delay:3e3,disableOnInteraction:!1},breakpoints:{"@0.00":{slidesPerView:1,spaceBetween:10},"@0.75":{slidesPerView:2,spaceBetween:20}}}),new Swiper(".homeSwiper",{spaceBetween:30,centeredSlides:!0,autoplay:{delay:3e3,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}})})();function l(){let t,r,i;t=document.querySelector("#switcher-ltr"),r=document.querySelector("#switcher-rtl"),i=document.querySelector("#reset-all"),r&&(r.addEventListener("click",()=>{let e=document.querySelector(".testimonialSwiper");e.setAttribute("dir","rtl"),e.classList.add("swiper-rtl"),document.querySelector(".swiper-wrapper").style.transform="translate3d(0px,0,0)"}),t&&t.addEventListener("click",()=>{document.querySelector(".testimonialSwiper").classList.remove("swiper-rtl"),document.querySelector(".swiper-wrapper").style.transform="translate3d(0px,0,0)"})),i&&i.addEventListener("click",()=>{let e=document.querySelector(".testimonialSwiper");document.querySelector(".swiper-wrapper").style.transform="translate3d(0px,0,0)",e.setAttribute("dir","ltr"),e.classList.remove("swiper-rtl")})}l();