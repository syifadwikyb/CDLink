const track = document.getElementById('slider-track'); // Elemen track slider
const slides = Array.from(track.children); // Array dari slide
const nextButton = document.getElementById('next'); // Tombol next
const prevButton = document.getElementById('prev'); // Tombol prev
const dots = document.querySelectorAll('.dot'); // Indikator slide

const slidesToShow = 3; // Jumlah slide yang ditampilkan
const slideWidth = track.offsetWidth / slidesToShow; // Lebar setiap slide
let currentIndex = slidesToShow; // Indeks slide saat ini (dimulai dari duplikat pertama)

// Duplikasi slide untuk efek loop tak terbatas
const firstSlides = slides.slice(0, slidesToShow).map(slide => slide.cloneNode(true));
const lastSlides = slides.slice(-slidesToShow).map(slide => slide.cloneNode(true));
firstSlides.forEach(slide => track.appendChild(slide));
lastSlides.forEach(slide => track.insertBefore(slide, slides[0]));

function moveToSlide(index, noTransition = false) {
    if (noTransition) {
        track.style.transition = 'none'; // Hapus transisi jika noTransition adalah true
    } else {
        track.style.transition = 'transform 0.5s ease-in-out'; // Tambahkan transisi
    }
    track.style.transform = `translateX(-${index * slideWidth}px)`; // Pindahkan track
    currentIndex = index; // Update indeks slide saat ini
    updateDots(); // Update indikator
}

function updateDots() {
    const actualIndex = (currentIndex - slidesToShow + slides.length) % slides.length; // Hitung indeks slide sebenarnya
    dots.forEach((dot, idx) => {
        dot.classList.toggle('bg-orange-600', idx === actualIndex); // Set warna abu-abu gelap untuk dot aktif
        dot.classList.toggle('bg-slate-300', idx !== actualIndex); // Set warna abu-abu terang untuk dot tidak aktif
    });
}

function nextSlide() {
    if (currentIndex < slides.length + slidesToShow) {
        moveToSlide(currentIndex + 1); // Geser ke slide berikutnya
    }
}

function prevSlide() {
    if (currentIndex > 0) {
        moveToSlide(currentIndex - 1); // Geser ke slide sebelumnya
    }
}

nextButton.addEventListener('click', () => {
    nextSlide();
    if (currentIndex === slides.length + slidesToShow) {
        setTimeout(() => moveToSlide(slidesToShow, true), 500); // Pindah ke slide pertama tanpa transisi
    }
});

prevButton.addEventListener('click', () => {
    prevSlide();
    if (currentIndex === 0) {
        setTimeout(() => moveToSlide(slides.length, true), 500); // Pindah ke slide terakhir tanpa transisi
    }
});

setInterval(() => {
    nextSlide();
    if (currentIndex === slides.length + slidesToShow) {
        setTimeout(() => moveToSlide(slidesToShow, true), 500); // Pindah ke slide pertama tanpa transisi
    }
}, 3000); // Slide otomatis setiap 3 detik

// Variabel untuk drag/swipe
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let dragging = false;

// Event Listener untuk drag/swipe dengan mouse
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
        if (movedBy < -100 && currentIndex < slides.length + slidesToShow) {
            nextSlide();
        } else if (movedBy > 100 && currentIndex > 0) {
            prevSlide();
        } else {
            moveToSlide(currentIndex);
        }
        prevTranslate = currentTranslate; // Perbarui posisi translate sebelumnya
        dragging = false;
    }
});

window.addEventListener('mousemove', (e) => {
    if (dragging) {
        const currentPosition = e.pageX;
        currentTranslate = prevTranslate + currentPosition - startPos;
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
});

// Event Listener untuk swipe dengan touch
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
        if (movedBy < -100 && currentIndex < slides.length + slidesToShow) {
            nextSlide();
        } else if (movedBy > 100 && currentIndex > 0) {
            prevSlide();
        } else {
            moveToSlide(currentIndex);
        }
        prevTranslate = currentTranslate; // Perbarui posisi translate sebelumnya
        dragging = false;
    }
});

window.addEventListener('touchmove', (e) => {
    if (dragging) {
        const currentPosition = e.touches[0].clientX;
        currentTranslate = prevTranslate + currentPosition - startPos;
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
});

function animation() {
    track.style.transform = `translateX(${currentTranslate}px)`;
    if (dragging) requestAnimationFrame(animation);
}