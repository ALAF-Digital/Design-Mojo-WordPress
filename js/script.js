// Nav Active //
const links = document.querySelectorAll(".navbar-nav .nav-item .nav-link");
    function removeActiveClass() {
        links.forEach(link => link.classList.remove("active"));
    }
    links.forEach(link => {
        link.addEventListener('click', function (event) {
            removeActiveClass();
            link.classList.add('active');
        });
    });
// Nav Active End //

// Partner Slide //

var swiper = new Swiper(".myswiper1", {
    slidesPerView: "5",
    spaceBetween: 1,
    loop: true,
    speed: 4000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        768: {
            slidesPerView: 16,
            spaceBetween: 1,
        },
    },
    
});

var swiper = new Swiper(".myswiper2", {
    slidesPerView: "5",
    spaceBetween: 1,
    loop: true,
    speed: 4000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
        reverseDirection: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    
    breakpoints: {
        768: {
            slidesPerView: 16,
            spaceBetween: 1,
        },
    },
});
// Partner Slide End //



// Our Services //
var swiper = new Swiper(".myswiper3", {
    slidesPerView: 1,
    spaceBetween: 3,
    loop: true,
    autoplay: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // centeredSlides:true,
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 38,
        },
    },
});
// Our Services End //

// Services //
var swiper = new Swiper(".new-swiper", {
    slidesPerView: 1,
    spaceBetween: 3,
    loop: true,
    autoplay: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // centeredSlides:true,
    breakpoints: {
        1540: {
            slidesPerView: 4,
            spaceBetween: 38,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 38,
        },
        991: {
            slidesPerView: 2,
            spaceBetween: 38,
        },
        // 768: {
        //     slidesPerView: 3,
        //     spaceBetween: 38,
        // },
    },
});
// Services //

// Customer //

var swiper = new Swiper(".myswiper4", {
    slidesPerView: "1",
    spaceBetween: 20,
    loop: true,
    speed: 5000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        2000: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".myswiper5", {
    slidesPerView: "1",
    spaceBetween: 20,
    loop: true,
    speed: 5000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
        reverseDirection: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        2000: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
});

// Customer End //

// Project //
var swiper = new Swiper(".myswiper6", {
    slidesPerView: "1",
    spaceBetween: 20,
    loop: true,
    speed: 5000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        2000: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".myswiper7", {
    slidesPerView: "1",
    spaceBetween: 20,
    loop: true,
    speed: 5000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
        reverseDirection: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        2000: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
});
// Project End //


// Development Slider //

var swiper = new Swiper(".myswiper8", {
    slidesPerView: "1",
    spaceBetween: 16,
    loop: true,
    speed: 4000, 
    // freeMode: true,
    // autoplay:true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
        // pauseOnMouseEnter: true,
    },
    // allowTouchMove: false,
    centeredSlides:true,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1440: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        2000: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
});

// Development Slider End //


// Our Slider //
var swiper = new Swiper(".myswiper9", {
    slidesPerView: "1",
    spaceBetween: 16,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      }
});

// Our Slider End //



// DropDown //

// document.querySelector(".nav-item.dropdownmy").addEventListener("click", () => {
//     document.querySelector("#shop-dropdown").classList.toggle("show")
// })
// document.querySelector(".nav-item.dropdownmy").addEventListener("mouseover", () => {
//     document.querySelector("#shop-dropdown").classList.toggle("show")
// })
// document.querySelector(".nav-item.dropdownmy").addEventListener("mouseout", () => {
//     document.querySelector("#shop-dropdown").classList.toggle("show")
// })



// Get the dropdown trigger and dropdown menu elements
const dropdownTrigger = document.querySelector(".nav-item.dropdownmy");
const dropdownMenu = document.querySelector("#shop-dropdown");


dropdownTrigger.addEventListener("click", () => {
    dropdownMenu.classList.toggle("show");
});


dropdownTrigger.addEventListener("mouseover", () => {
    dropdownMenu.classList.add("show"); 
});

dropdownMenu.addEventListener("mouseover", () => {
    dropdownMenu.classList.add("show");  
});

dropdownTrigger.addEventListener("mouseout", () => {
   
    setTimeout(() => {
        if (!dropdownMenu.matches(":hover")) {
            dropdownMenu.classList.remove("show");
        }
    }, 300);  
});

dropdownMenu.addEventListener("mouseout", () => {
    // Hide the dropdown when the mouse leaves the dropdown menu
    dropdownMenu.classList.remove("show");
});
