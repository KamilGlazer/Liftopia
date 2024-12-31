function toggleMenu() {
    var menu = document.getElementById('userMenu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}

document.addEventListener('click', function(event) {
    var menu = document.getElementById('userMenu');
    var userIcon = document.querySelector('.user');

    if (!userIcon.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = 'none';
    }
});