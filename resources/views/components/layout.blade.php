<div class="container mx-auto px-4">
  <div class="header sticky z-20 top-0 flex justify-between items-center p-8 bg-transparent transition-all duration-300">
    <div>
      <p>Logo</p>
      {{-- <img src="{{ asset('asset/logo.svg') }}" alt=""> --}}
    </div>
    <div class="relative">
      <div class="hidden md:flex">
        <a href="/sign-up"><button class="rounded-3xl px-4 sm:px-8 lg:px-12 py-3 font-bold text-purple hover:text-light hover:bg-customgradient3">About me</button></a>
        <a href="/sign-in"><button class="rounded-3xl px-4 sm:px-8 lg:px-12 py-3 font-bold text-purple hover:text-light hover:bg-customgradient3">Sign in</button></a>
        <a href="/sign-up"><button class="rounded-3xl px-4 sm:px-8 lg:px-12 py-3 font-bold text-light bg-customgradient3">Sign up</button></a>
      </div>
      <div class="flex md:hidden md:space-x-4">
        <button id="bars-icon" class="fas fa-solid fa-bars text-2xl text-purple"></button>          
        <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
          <a href="/sign-up"><button class="flex rounded-lg py-2 w-full justify-center bg-light font-bold text-purple hover:text-white hover:bg-purple">About me</button></a>
          <a href="/sign-in"><button class="flex rounded-lg py-2 w-full justify-center bg-light font-bold text-purple hover:text-white hover:bg-purple">Sign in</button></a>
          <a href="/sign-up"><button class="flex rounded-lg py-2 w-full justify-center bg-purple font-bold text-white ">Sign up</button></a>
        </div>
      </div>
    </div>    
  </div>

  <div class="relative rounded-3xl bg-customgradient2 sm:pt-5">
    <div class="pl-4 sm:pl-10 hero flex flex-col lg:flex-row-reverse items-center justify-between">
      <div class="image z-10 mb-6 w-full lg:w-auto lg:mb-0 lg:ml-6">
        <img src="{{ asset('asset/man.png') }}" alt="" class="w-full lg:max-w-none lg:w-auto object-cover" style="max-width:600px;">
      </div>
      <div class="w-full lg:w-1/2 text-center lg:text-left">
        <h1 class="mb-3 font-bold text-3xl sm:text-4xl lg:text-5xl leading-normal">Ekspresikan Kreativitasmu dalam <span class="text-purple">Website</span> yang Memukau!</h1>
        <p class="mb-8 text-xl sm:text-2xl lg:text-3xl">Ekspresikan Kreativitasmu dalam Website yang Memukau!</p>
        <div class="md:pb-5 lg:pb-0 pb-5">
          <a href="/sign-up"><button class="rounded-xl px-8 sm:px-12 py-4 text-light bg-customgradient3">Get started for free</button></a>
        </div>  
      </div>
    </div>
  </div>

  <div class="tentang mt-10 flex flex-col items-center lg:flex-row lg:text-center">
    <img src="{{ asset('asset/tentang.svg') }}" class="w-full hidden lg:w-1/2 lg:flex" alt="">
    <div class="text-black -ml-0 pr-5 mt-6 text-center lg:-ml-36 lg:mt-0 lg:text-left">
        <h1 class="font-bold pb-4 text-3xl lg:text-4xl">Tentang Kami</h1>
        <p class="text-lg lg:text-xl">Web ini merupakan Ekspresikan Kreativitasmu dalam Website yang Memukau!Ekspresikan Kreativitasmu dalam Website yang Memukau! Web ini merupakan Ekspresikan Kreativitasmu dalam Website yang Memukau!Ekspresikan Kreativitasmu dalam Website yang Memukau!</p>
    </div>
  </div>
  <div class="text-center pb-5">
      <h1 class="font-bold mt-10 pb-4 text-3xl lg:text-4xl">The Best Creators Use Lynk.id</h1>
      <p class="text-lg lg:text-xl">See how our creators use Stan to superpower their businesses!</p>
  </div>
  {{-- Slider --}}
  <div class="flex justify-center max-h-screen">
      <div class="relative w-full sm:w-4/5 max-w-7xl">
        <div class="overflow-hidden"> <!-- Kontainer slider dengan overflow hidden -->
          <div class="flex mx-auto transition-transform duration-500 ease-in-out" id="slider-track"> <!-- Track slider dengan transisi -->
            <div class="w-1/2 md:w-1/3 flex-shrink-0 flex justify-center cursor-pointer"><img src="{{ asset('asset/haha.svg') }}" alt="Image 1" class="w-3/4">1</div> <!-- Slide 1 -->
            <div class="w-1/2 md:w-1/3 flex-shrink-0 flex justify-center cursor-pointer"><img src="{{ asset('asset/haha.svg') }}" alt="Image 2" class="w-3/4">2</div> <!-- Slide 2 -->
            <div class="w-1/2 md:w-1/3 flex-shrink-0 flex justify-center cursor-pointer"><img src="{{ asset('asset/haha.svg') }}" alt="Image 3" class="w-3/4">3</div> <!-- Slide 3 -->
            <div class="w-1/2 md:w-1/3 flex-shrink-0 flex justify-center cursor-pointer"><img src="{{ asset('asset/haha.svg') }}" alt="Image 4" class="w-3/4">4</div> <!-- Slide 4 -->
          </div>
        </div>
        <!-- Tombol navigasi sebelah kiri -->
        <button id="prev" class="absolute -left-6 sm:-left-10 top-1/2 transform -translate-y-1/2 bg-gray text-light p-2 rounded-full focus:outline-none">
          <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button id="next" class="absolute -right-6 sm:-right-10 top-1/2 transform -translate-y-1/2 bg-gray text-light p-2 rounded-full focus:outline-none">
          <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
        <!-- Indikator posisi slide -->
        <div class="flex justify-center mt-4 space-x-2">
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-gray rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-gray rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-gray rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-gray rounded-full"></span>
        </div>
      </div>
  </div> 
</div> 
    
    
<script>
  document.getElementById('bars-icon').addEventListener('click', function(event) {
      event.stopPropagation();
      var dropdown = document.getElementById('dropdown-menu');
      dropdown.classList.toggle('hidden');
  });

  document.addEventListener('click', function(event) {
      var dropdown = document.getElementById('dropdown-menu');
      if (!dropdown.classList.contains('hidden') && !event.target.closest('#dropdown-menu')) {
          dropdown.classList.add('hidden');
      }
  });

  window.addEventListener('scroll', function() {
      const header = document.querySelector('.header');
      if (window.scrollY > 0) {
        header.classList.add('bg-light', 'bg-opacity-90', 'shadow-md'); // Menambahkan kelas Tailwind CSS
      } else {
        header.classList.remove('bg-light', 'bg-opacity-90', 'shadow-md'); // Menghapus kelas Tailwind CSS
      }
    });


  // Slider
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
      dot.classList.toggle('bg-purple', idx === actualIndex); // Set warna abu-abu gelap untuk dot aktif
      dot.classList.toggle('bg-gray', idx !== actualIndex); // Set warna abu-abu terang untuk dot tidak aktif
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

  // Fungsi untuk drag mouse
  let isDragging = false;
  let startPos = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  track.addEventListener('mousedown', startDrag);
  track.addEventListener('mousemove', drag);
  track.addEventListener('mouseup', endDrag);
  track.addEventListener('mouseleave', endDrag);

  function startDrag(e) {
    isDragging = true; // Tandai bahwa drag telah dimulai
    startPos = e.pageX; // Simpan posisi awal
    track.style.transition = 'none'; // Hapus transisi saat drag
  }

  function drag(e) {
    if (isDragging) {
      const currentPosition = e.pageX; // Posisi saat ini dari mouse
      currentTranslate = prevTranslate + currentPosition - startPos; // Hitung posisi translasi saat ini
      track.style.transform = `translateX(${currentTranslate}px)`; // Pindahkan track sesuai translasi
    }
  }

  function endDrag() {
    isDragging = false; // Tandai bahwa drag telah selesai
    prevTranslate = currentTranslate; // Simpan posisi translasi terakhir
    track.style.transition = 'transform 0.5s ease-in-out'; // Tambahkan kembali transisi
    // Implementasikan inertia dan snap ke slide terdekat
  }

  // Pindah ke slide awal
  moveToSlide(slidesToShow, true);
</script>

