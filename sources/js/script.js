const fullScreen = document.getElementById("fullScreen");
const exitFullScreen = document.getElementById("fullScreenExit");
exitFullScreen.style.display = "none";

fullScreen.addEventListener("click", () => {
    document.documentElement.requestFullscreen();
    fullScreen.style.display = "none";
    exitFullScreen.style.display = "flex";
})

exitFullScreen.addEventListener("click", () => {
    document.exitFullscreen();
    fullScreen.style.display = "flex";
    exitFullScreen.style.display = "none";
})

const settings = document.getElementById("settings");
const settingsPage = document.querySelector(".setting-page");
settings.addEventListener("click", () => {
    settingsPage.style.display = "flex";
})

const blob = document.getElementById("blob");
if (blob) {
    document.addEventListener("pointermove", (e) => {
        const x = e.clientX - 100;
        const y = e.clientY - 100;
        console.log("x :", x, "y :", y);
        blob.style.transform = `translate(${x}px, ${y}px)`;
    });
}

window.addEventListener('scroll', function () {
    const header = document.getElementById('Header');
    let scrollY = window.scrollY;
    // console.log(scrollY);

    if (scrollY > 200) {
        header.classList.add('fixed-head');
        header.classList.remove('normal-head');
    } else {
        header.classList.remove('fixed-head');
        header.classList.add('normal-head');
    }
});

const navFeatures = document.querySelectorAll(".btn-features")
const contentFeatures = document.querySelectorAll(".content-features")
navFeatures[0].classList.add("features-active");
contentFeatures[0].style.display = "flex";
navFeatures.forEach((feature, index) => {
    feature.addEventListener("click", () => {
        let featureMuch = index;
        navFeatures.forEach(featuresAutoRemove => featuresAutoRemove.classList.remove("features-active"));
        feature.classList.add("features-active");
        contentFeatures.forEach(featuresConAutoRemove => featuresConAutoRemove.style.display = "none");
        contentFeatures[featureMuch].style.display = "flex";
    })
})

const navbar = document.querySelectorAll(".link");
const sections = document.querySelectorAll('section');

let isClicking = false;

navbar.forEach(navLink => {
    navLink.addEventListener('click', () => {
        isClicking = true;
        navbar.forEach(linkAutoRemove => linkAutoRemove.classList.remove('links-active'));
        navLink.classList.add('links-active');
        setTimeout(() => { isClicking = false; }, 500);
    });
});

const observerNav = new IntersectionObserver((entries) => {
    if (isClicking) return;
    // console.log(entries);
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navbar.forEach(li => li.classList.remove('links-active'));
            const activeLink = Array.from(navbar).find(li =>
                li.querySelector('a').getAttribute('href').toLowerCase() === `#${entry.target.id.toLowerCase()}`
            );
            if (activeLink) activeLink.classList.add('links-active');
        }
    });
}, { threshold: 0.55 });

sections.forEach(section => observerNav.observe(section));

// const observerAnimation = new IntersectionObserver((entries, obs) => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             entry.target.classList.add('active');
//             obs.unobserve(entry.target);
//         }
//     });
// });

// document.querySelector('.header, .home, .').forEach(el => {
//     observerAnimation.observe(el);
// });

window.addEventListener("animationend", () => {

})

const cards = document.querySelectorAll('.product-card');
// console.log("card :",cards);
    cards.forEach(card => {
    const desc = card.querySelector('.description-product');
    // console.log("desc :", desc);
    card.addEventListener('mouseenter', () => {
        desc.style.display = "flex";
        const rect = card.getBoundingClientRect();
        if (rect.right + desc.offsetWidth > window.innerWidth) {
            desc.classList.add("desc-product-left");
        } else {
            desc.classList.add("desc-product-right");
        }
    });
    card.addEventListener("mouseleave", () => {
        desc.classList.remove("desc-product-right");
        desc.classList.remove("desc-product-left"); 
        desc.style.display = "none";
        // setTimeout(() => {
        //     desc.classList.remove("desc-product-right");
        //     desc.classList.remove("desc-product-left"); 
        //     desc.style.display = "none";
        // }, 100)
    })
});