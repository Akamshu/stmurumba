// Counter Animation
document.querySelectorAll('.counter').forEach(counter => {
    let target = +counter.dataset.target;
    let count = 0;

    let update = () => {
        if (count < target) {
            count += Math.ceil(target / 100);
            counter.innerText = count;
            setTimeout(update, 40);
        } else {
            counter.innerText = target;
        }
    };
    update();
});

// Simple Testimonial Rotation
const testimonials = [
    `"St. Murumba has transformed my child's confidence." - Mrs. Okafor`,
    `"Excellent teachers and safe environment." - Mr. Ade`,
    `"Best decision we made for our child." - Mrs. Bello`
];

let i = 0;
setInterval(() => {
    document.getElementById('testimonial').innerHTML = `<p>${testimonials[i]}</p>`;
    i = (i + 1) % testimonials.length;
}, 4000);


// Simple Counter Animation
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    counter.innerText = '0';
    const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const c = +counter.innerText;
        const increment = target / 100;
        if(c < target) {
            counter.innerText = `${Math.ceil(c + increment)}`;
            setTimeout(updateCounter, 10);
        } else {
            counter.innerText = target;
        }
    };
    updateCounter();
});

// Simple Slide Switcher
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));
    slides[index].classList.add('active');
    dots[index].classList.add('active');
}

setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000);


const modal = document.getElementById("videoModal");
const openBtn = document.getElementById("openPlayer");
const closeBtn = document.querySelector(".close-modal");
const fullPlayer = document.getElementById("fullPlayer");
const bgVideo = document.getElementById("schoolVideo");

// Open the Player
openBtn.onclick = function() {
    modal.style.display = "block";
    fullPlayer.play();
    bgVideo.pause(); // Pause background video to save CPU/Focus
}

// Close the Player
closeBtn.onclick = function() {
    modal.style.display = "none";
    fullPlayer.pause();
    fullPlayer.currentTime = 0; // Reset video
    bgVideo.play(); // Resume background video
}

// Close if user clicks outside the video box
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        fullPlayer.pause();
        bgVideo.play();
    }
}

// This will now automatically loop through 5 slides instead of 3
function nextSlide() {
    let next = (currentSlideIndex + 1) % slides.length; 
    showSlide(next);
}