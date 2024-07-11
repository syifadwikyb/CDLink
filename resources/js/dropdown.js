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