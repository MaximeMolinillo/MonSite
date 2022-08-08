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
    if(animOpened) {
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
const btnConfettis = document.querySelector('.btn-confettis');
const emojis = ["😀" ,"😛", "🍉", "🦊"];


btnConfettis.addEventListener('click', fiesta)

function fiesta(){

    for (let i=0; i<50; i++) {
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
        duration:1

    })
    to('slot div', {autoAlpha: 0, duration: 0.3}, "-=0.2")
.add(() => {
    containerSlot.innerHTML = "";
})};