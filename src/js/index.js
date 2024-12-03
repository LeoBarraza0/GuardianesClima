let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const itemCount = items.length;

function showNextItem() {
    items[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % itemCount;
    items[currentIndex].classList.add('active');
}

setInterval(showNextItem, 3000); // Cambiar imagen cada 3 segundos