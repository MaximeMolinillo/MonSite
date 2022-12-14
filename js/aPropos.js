// Animation header & Navbar**************************************************************************

const hamburgerToggler = document.querySelector(".hamburger")
const navLinksContainer = document.querySelector(".navlinks-container");

const toggleNav = () => {
    hamburgerToggler.classList.toggle("open")

    const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
    hamburgerToggler.setAttribute("aria-expanded", ariaToggle)

    navLinksContainer.classList.toggle("open")
}
hamburgerToggler.addEventListener("click", toggleNav)

new ResizeObserver(entries => {
    if (entries[0].contentRect.width <= 900) {
        navLinksContainer.style.transition = "transform 0.3s ease-out"
    } else {
        navLinksContainer.style.transition = "none"
    }
}).observe(document.body)


// Animation titre *************************************************************************************
const title = document.querySelector("h1")
const letters = [...document.querySelectorAll('h1 span')]

title.addEventListener("mouseenter", handleLetters);
title.addEventListener("mouseleave", handleLetters);

let isAnimatingIn = false;
let calledOut = false;
let animOpened = false;

function handleLetters() {
    if (animOpened) {
        animOut();
        animOpened = false;
        return;
    }

    if (isAnimatingIn) {
        calledOut = true;
        return;
    }

    isAnimatingIn = true;


    const animPromise = new Promise((resolve) => {
        animIn()
        setTimeout(() => {
            resolve()
        }, 750
        )
    })
    animPromise.then(() => {
        isAnimatingIn = false;

        if (calledOut) {
            animOut()
            calledOut = false;
        } else if (!calledOut) {

        }
    })
}

function animIn() {
    anime({
        targets: "h1 span",
        translateX: function () {
            return anime.random(-250, 250)
        },
        translateY: function () {
            return anime.random(-250, 250)
        },
        translateZ: function () {
            return anime.random(-2000, 750)
        },
        rotate: function () {
            return anime.random(-250, 250)
        },
        easing: "easeOutCirc",
        duration: 750
    })
}

function animOut() {
    anime({
        targets: "h1 span",
        translateX: 0,
        translateY: 0,
        translateZ: 0,
        rotate: 0,
        easing: "easeInQuad",
        duration: 750
    })
}



// Animation emoji ***********************************************************
const containerSlot = document.querySelector('.slot');
const btnConfettis = document.querySelector('.btnConfettis');
const emojis = ["????", "????", "????", "????"];


btnConfettis.addEventListener('click', fiesta)

function fiesta() {

    if (isTweening()) return;

    for (let i = 0; i < 50; i++) {
        const confetti = document.createElement('div');
        confetti.innerText = emojis[Math.floor(Math.random() * emojis.lenght)];
        containerSlot.appendChild(confetti);
    }

    animateConfettis();
}

function animateConfettis() {

    const TLCONF = gsap.timeline()

    TLCONF.to('.slot div', {
        y: "random(-100,100)",
        x: "random(-100,100)",
        z: "random(0,1000)",
        rotation: "random(-90,90)",
        duration: 1,

    })
        .to('slot div', { autoAlpha: 0, duration: 0.3 }, "-=0.2")
        .add(() => {
            containerSlot.innerHTML = "";
        });
}

function isTweening() {
    return gsap.isTweening('.slot div');
}


// Animation triangle *********************************************************
// const  top = document.querySelector('.pHaut');
// const lang =document.querySelector('.wrap-language');


// top.addEventListener("click", animTriangle);

function animTriangleTop() {
    document.querySelector(".qualit").style.opacity = "0";
    document.querySelector(".hobbies").style.opacity = "0";
    document.querySelector(".exp").style.opacity = "0";
    document.querySelector(".school").style.opacity = "0";

    document.querySelector(".wrap-language").style.opacity = "1";
}
function animTriangleLeft() {
    document.querySelector(".qualit").style.opacity = "0";
    document.querySelector(".hobbies").style.opacity = "0";
    document.querySelector(".wrap-language").style.opacity = "0";
    document.querySelector(".school").style.opacity = "0";

    document.querySelector(".exp").style.opacity = "1";
}
function animTriangleRight() {
    document.querySelector(".qualit").style.opacity = "0";
    document.querySelector(".hobbies").style.opacity = "0";
    document.querySelector(".wrap-language").style.opacity = "0";
    document.querySelector(".exp").style.opacity = "0";

    document.querySelector(".school").style.opacity = "1";
}
function animTriangleBottom() {
    document.querySelector(".qualit").style.opacity = "0";
    document.querySelector(".wrap-language").style.opacity = "0";
    document.querySelector(".exp").style.opacity = "0";
    document.querySelector(".school").style.opacity = "0";

    document.querySelector(".hobbies").style.opacity = "1";
}



// // ANimation Logo Techno ******************************************

// const lang1 = document.querySelector('lang1');

// window.addEventListener('load', () => {
//     const TimeLine = gsap.timeline({paused: true});

//     TimeLine
//     .straggerFrom(lang1, 1, {top: -50,  ease: "power2.out"}, 0.3 )

//     TimeLine.play();
// })