const track = document.getElementById('slider-track');
const slides = Array.from(track.children);
let slideWidth;

function setSlidesToShow() {
    const width = window.innerWidth;
    if (width >= 1024) {
        slideWidth = track.offsetWidth / 4;
    } else if (width >= 768) {
        slideWidth = track.offsetWidth / 2;
    } else {
        slideWidth = track.offsetWidth / 1;
    }
    slides.forEach(slide => {
        slide.style.minWidth = `${slideWidth}px`;
    });
}

function startAutoSlide() {
    track.style.transition = 'transform 0.5s linear';
    track.style.transform = `translateX(-${slideWidth}px)`;
    setTimeout(() => {
        track.appendChild(track.firstElementChild);
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        setTimeout(startAutoSlide, 50);
    }, 3000);
}

setSlidesToShow();
startAutoSlide();

window.addEventListener('resize', () => {
    setSlidesToShow();
});

// Drag functionality
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let dragging = false;

function animation() {
    track.style.transform = `translateX(${currentTranslate}px)`;
    if (dragging) requestAnimationFrame(animation);
}

track.addEventListener('mousedown', (e) => {
    startPos = e.pageX;
    dragging = true;
    animationID = requestAnimationFrame(animation);
    track.style.transition = 'none';
});

window.addEventListener('mouseup', () => {
    cancelAnimationFrame(animationID);
    if (dragging) {
        const movedBy = currentTranslate - prevTranslate;
        if (movedBy < -100 && slides.length > 0) {
            slides.push(slides.shift());
        } else if (movedBy > 100 && slides.length > 0) {
            slides.unshift(slides.pop());
        }
        currentTranslate = 0;
        prevTranslate = 0;
        dragging = false;
        track.style.transition = 'transform 0.5s linear';
        track.style.transform = 'translateX(0)';
    }
});

window.addEventListener('mousemove', (e) => {
    if (dragging) {
        const currentPosition = e.pageX;
        currentTranslate = prevTranslate + currentPosition - startPos;
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
});

track.addEventListener('touchstart', (e) => {
    startPos = e.touches[0].clientX;
    dragging = true;
    animationID = requestAnimationFrame(animation);
    track.style.transition = 'none';
});

window.addEventListener('touchend', () => {
    cancelAnimationFrame(animationID);
    if (dragging) {
        const movedBy = currentTranslate - prevTranslate;
        if (movedBy < -100 && slides.length > 0) {
            slides.push(slides.shift());
        } else if (movedBy > 100 && slides.length > 0) {
            slides.unshift(slides.pop());
        }
        currentTranslate = 0;
        prevTranslate = 0;
        dragging = false;
        track.style.transition = 'transform 0.5s linear';
        track.style.transform = 'translateX(0)';
    }
});

window.addEventListener('touchmove', (e) => {
    if (dragging) {
        const currentPosition = e.touches[0].clientX;
        currentTranslate = prevTranslate + currentPosition - startPos;
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
});
