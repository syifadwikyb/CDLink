window.addEventListener('scroll', function() {
const header = document.querySelector('.header');
if (window.scrollY > 0) {
    header.classList.add('bg-white', 'shadow-xl'); // Menambahkan kelas Tailwind CSS
} else {
    header.classList.remove('bg-white', 'shadow-xl'); // Menghapus kelas Tailwind CSS
}
});