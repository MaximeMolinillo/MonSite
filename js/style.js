// Anim navbarre
// const navigation = document.querySelector('nav');

// window.addEventListener('scroll', () => {

//     if (window.scrollY > 30) {
//         navigation.classList.add('anim-nav');
//     } else {
//         navigation.classList.remove('anim-nav');
//     }

// })

// // Anim clic *********************************************

// window.addEventListener('click', (e) => {
//     // console.log(e);

//     const rond = document.createElement('div');
//     rond.className = 'clickAnim';
//     rond.style.top = `${e.pageY -50}px`;
//     rond.style.left = `${e.pageX -50}px`;
//     document.body.appendChild(rond);

//     setTimeout(() => {
//            rond.remove
//     }, 1500)
// })


// Anim input **************************************************************************

// const validationInput = document.querySelector('input');

// validationInput.addEventListener('input', (e) => {

//     if(e.target.value.lenght >= 3) {
//         validationInput.style.borderColor = "green";
//     }
//     else {
//         validationInput.style.borderColor = "red";
//     }
// })



// Anim texte*******************************************************
const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');
const l3 = document.querySelector('.l3');






window.addEventListener('load', () => {
    
    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
    .from(l1, 1 ,{width: 0, ease: "power2.out"}, '-=2')
    .from(l2, 1 ,{width: 0, ease: "power2.out"}, '-=1')
    .from(l3, 1 ,{width: 0, ease: "power2.out"}, '-=0')
    .from(logo, 1 ,{transform: "scale(0)", ease: "power2.out"}, '-=2')
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1')

    TL.play();
})


const txtAnim = document.querySelector('h1');
new Typewriter(txtAnim,  {
    deleteSpeed: 30
})
// changement de vitesse
.changeDelay(20)
.typeString('<span style="color: #00D5F7">Moi c\'est Maxime Molinillo,</span>  ')
.pauseFor(300)
.deleteChars(29)
.typeString('<strong> Developpeur Web</strong> Junior : ')
.pauseFor(800)

.typeString('<span style="color: #254BDD"> CSS</span> !')
.pauseFor(800)
.deleteChars(5)
.typeString('<span style="color: #C76395"> SASS</span> !')
.pauseFor(800)
.deleteChars(6)
.typeString('<span style="color: #EFD81D"> JavaScript</span> !')
.pauseFor(800)
.deleteChars(12)
.typeString('<span style="color: #00D5F7"> React</span> !')
.pauseFor(800)
.deleteChars(7)
.typeString('<span style="color: #4D598B"> PHP</span> !')
.pauseFor(800)
.deleteChars(5)
.typeString('<span style="color: #03A6E4"> SQL</span> !')
.pauseFor(800)
.deleteChars(5)
.typeString('<span style="color: #30353A"> WordPress</span> !')
.pauseFor(800)
.deleteChars(47)
.typeString('<span style="color: #591e98">Bienvenue sur mon site !</span> ')
.pauseFor(400)
.typeString('<br> Je vous laisse découvrir mes projets...')

.start()


//TUTO3************************





