<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<div class="container mx-auto">
  <div class="px-10 lg:px-0">
    <div data-aos="zoom-in" class="relative rounded-lg lg:rounded-3xl bg-customgradient2 dark:bg-customgradient1">
      <div class="hero pl-0 flex flex-col items-center justify-between lg:pl-10 lg:flex-row-reverse ">
        <div class="image z-10 mb-6 w-full lg:w-auto lg:mb-0 lg:ml-6">
          <img src="{{ asset('asset/boy.png') }}" alt="" class="w-full lg:max-w-none lg:w-auto object-cover" style="max-width:600px;">
        </div>
        <div class="w-full lg:w-1/2 text-center lg:text-left">
          <h1 class="mb-3 font-bold text-3xl sm:text-4xl lg:text-5xl leading-normal text-dark dark:text-white">Ekspresikan Kreativitasmu dalam <span class="text-purple dark:text-orange-500">Website</span> yang Memukau!</h1>
          <p class="mb-8 text-xl sm:text-2xl lg:text-3xl text-dark dark:text-white">Ekspresikan Kreativitasmu dalam Website yang Memukau!</p>
          <div class="md:pb-5 lg:pb-0 pb-5">
            <a href="/register"><button class="rounded-lg lg:rounded-xl px-8 sm:px-12 py-4 text-light font-bold bg-purple dark:bg-orange-500">Get started for free</button></a>
          </div>  
        </div>
      </div>
    </div>
    <p class="pt-16" id="aboutme"></p>
    <div data-aos="zoom-in" class="tentang mt-10 flex flex-col dark:bg-slate-800 bg-light items-center rounded-lg lg:flex-row lg:rounded-none lg:text-center">
      <img src="{{ asset('asset/tentang.svg') }}" class="w-full hidden lg:w-1/2 lg:flex" alt="">
      <div class="text-black p-5 text-center lg:-ml-36 lg:mt-0 lg:text-left">
          <h1 class="font-bold pb-4 text-3xl lg:text-4xl dark:text-orange-500">Tentang Kami</h1>
          <p class="text-lg lg:text-xl dark:text-white">Web ini merupakan Ekspresikan Kreativitasmu dalam Website yang Memukau!Ekspresikan Kreativitasmu dalam Website yang Memukau! Web ini merupakan Ekspresikan Kreativitasmu dalam Website yang Memukau!Ekspresikan Kreativitasmu dalam Website yang Memukau!</p>
      </div>
    </div>
    <p class="pt-20" id="template"></p>
    <div data-aos="zoom-in" class="text-center pb-5">
        <h1 class="font-bold mt-10 pb-4 text-3xl lg:text-4xl dark:text-orange-500">The Best Creators Use Lynk.id</h1>
        <p class="text-lg lg:text-xl dark:text-white">See how our creators use Stan to superpower their businesses!</p>
    </div>
    {{-- Slider --}}
    <div data-aos="zoom-in" class="flex justify-center max-h-screen">
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
        <button id="prev" class="absolute -left-6 sm:-left-10 top-1/2 transform -translate-y-1/2 bg-abu text-light dark:text-black dark:bg-white p-2 rounded-full focus:outline-none">
          <svg class="w-8 h-8 lg:w-12 lg:h-12 lg:active:w-10 lg:active:h-10 sm:active:w-10 sm:active:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button id="next" class="absolute -right-6 sm:-right-10 top-1/2 transform -translate-y-1/2 bg-abu text-light dark:text-black dark:bg-white p-2 rounded-full focus:outline-none">
          <svg class="w-8 h-8 lg:w-12 lg:h-12 lg:active:w-10 lg:active:h-10 sm:active:w-10 sm:active:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
        <!-- Indikator posisi slide -->
        <div class="flex justify-center mt-4 space-x-2">
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-white rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-white rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-white rounded-full"></span>
          <span class="dot h-2 w-2 sm:h-3 sm:w-3 bg-white rounded-full"></span>
        </div>
      </div>
    </div> 
  </div>
</div> 
    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@vite('resources/js/dropdown.js')
@vite('resources/js/slider.js')