// Initialize sal.js for scroll reveal anims
sal({
    threshold: .1
});

const rellax = new Rellax('.rellax');
const scroll = new SmoothScroll('a[href*="#"]');

const hamburgerButton = document.querySelector('.burger');
const mobileNav = document.querySelector('nav');
const navLinks = document.querySelectorAll('.nav-link');

// EVENT LISTENERS

hamburgerButton.addEventListener("click", toggleMobileNav);
navLinks.forEach(link => {
    link.addEventListener('click', closeMobileNav);
});

// FUNCTIONS

function toggleMobileNav() {
    if (mobileNav.classList.contains('open')) {
        closeMobileNav();
    } else {
        openMobileNav();
    }
}

function openMobileNav() {
    mobileNav.classList.add('open');
    hamburgerButton.classList.add('is-active');
    document.querySelector('body').style.overflowY = 'hidden';
}

function closeMobileNav() {
    mobileNav.classList.remove('open');
    hamburgerButton.classList.remove('is-active');
    document.querySelector('body').style.overflowY = 'scroll';
}

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    document.querySelector('.mobile-only').style.display = 'block';
}else{
    document.querySelector('.mobile-only').style.display = 'none';
}