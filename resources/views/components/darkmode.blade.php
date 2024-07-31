<div class="container">
    <!-- Dark mode toggle button -->
    <input type="checkbox" id="dark-toggle" class="hidden">
    <label for="dark-toggle" class="fixed bottom-4 right-4 z-[9999] p-5 rounded-full bg-slate-800 dark:bg-white appearance-none animate-bounce">
        <i id="sun-icon" class="block text-yellow-500 fas fa-sun"></i>
        <i id="moon-icon" class="block text-abu-800 fas fa-moon"></i>
    </label>
</div>

<script>
    const darkToggle = document.querySelector('#dark-toggle');
    const html = document.querySelector('html');
    const sunIcon = document.querySelector('#sun-icon');
    const moonIcon = document.querySelector('#moon-icon');

    // Load the saved theme
    if (localStorage.getItem('theme') === 'dark') {
        darkToggle.checked = true;
        html.classList.add('dark');
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
    } else {
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
    }

    darkToggle.addEventListener('change', function() {
        if (darkToggle.checked) {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            moonIcon.classList.remove('hidden');
            sunIcon.classList.add('hidden');
        } else {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }
    });
</script>

