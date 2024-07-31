// Menangani toggle dark mode
const darkToggle = document.querySelector('#dark-toggle'); // Memilih elemen toggle dark mode
const html = document.querySelector('html'); // Memilih elemen html

darkToggle.addEventListener('click', function() {
    if (darkToggle.checked) { // Jika toggle dark mode diaktifkan
        html.classList.add('dark'); // Menambahkan kelas 'dark' ke elemen html
        localStorage.setItem('theme', 'dark'); // Menyimpan tema 'dark' ke localStorage
    } else { // Jika toggle dark mode dinonaktifkan
        html.classList.remove('dark'); // Menghapus kelas 'dark' dari elemen html
        localStorage.setItem('theme', 'light'); // Menyimpan tema 'light' ke localStorage
    }
    handleScroll(); // Memanggil fungsi handleScroll untuk memperbarui warna header
});

// Mempertahankan tema antara reload halaman
const currentTheme = localStorage.getItem('theme'); // Mendapatkan tema saat ini dari localStorage
if (currentTheme === 'dark') { // Jika tema saat ini adalah 'dark'
    html.classList.add('dark'); // Menambahkan kelas 'dark' ke elemen html
    darkToggle.checked = true; // Mengatur toggle dark mode ke checked
} else { // Jika tema saat ini adalah 'light'
    html.classList.remove('dark'); // Menghapus kelas 'dark' dari elemen html
    darkToggle.checked = false; // Mengatur toggle dark mode ke unchecked
}

// Menangani scroll untuk mengubah warna header
function handleScroll() {
    const header = document.querySelector('.header'); // Memilih elemen header
    if (window.scrollY > 0) { // Jika halaman di-scroll
        if (html.classList.contains('dark')) { // Jika tema saat ini adalah 'dark'
            header.classList.add('bg-slate-800', 'shadow-xl'); // Menambahkan kelas 'bg-slate-800' dan 'shadow-xl' ke header
            header.classList.remove('bg-white'); // Menghapus kelas 'bg-white' dari header
        } else { // Jika tema saat ini adalah 'light'
            header.classList.add('bg-white', 'shadow-xl'); // Menambahkan kelas 'bg-white' dan 'shadow-xl' ke header
            header.classList.remove('bg-slate-800'); // Menghapus kelas 'bg-slate-800' dari header
        }
    } else { // Jika halaman tidak di-scroll
        header.classList.remove('bg-white', 'bg-slate-800', 'shadow-xl'); // Menghapus semua kelas latar belakang dan bayangan dari header
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const barsIcon = document.getElementById('bars-icon');
    const dropdownMenu = document.getElementById('dropdown-menu');

    if (!barsIcon || !dropdownMenu) {
        console.error('Element not found');
        return;
    }

    barsIcon.addEventListener('click', function () {

        // Jika dropdown tidak tersembunyi, ubah ikon menjadi 'fa-times', jika tidak, kembalikan ke 'fa-bars'
        if (!dropdownMenu.classList.contains('hidden')) {
            barsIcon.classList.remove('fa-bars');
            barsIcon.classList.add('fa-times');
        } else {
            barsIcon.classList.remove('fa-times');
            barsIcon.classList.add('fa-bars');
        }
    });
});



// Event listener untuk scroll
window.addEventListener('scroll', handleScroll); // Menambahkan event listener untuk scroll yang memanggil fungsi handleScroll

// Panggilan awal untuk mengatur warna header yang benar saat halaman dimuat
handleScroll(); // Memanggil fungsi handleScroll untuk pertama kali