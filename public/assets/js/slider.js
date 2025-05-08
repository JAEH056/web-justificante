document.addEventListener('DOMContentLoaded', function () {
    let slideImages = document.querySelectorAll('.slides img');
    let next = document.querySelector('.next');
    let prev = document.querySelector('.prev');
    let dots = document.querySelectorAll('.dot');
    let counter = 0;
    let slideInterval;

    function showSlide(index) {
        slideImages.forEach(img => img.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        slideImages[index].classList.add('active');
        dots[index].classList.add('active');
    }

    function slideNext() {
        counter = (counter + 1) % slideImages.length;
        showSlide(counter);
    }

    function slidePrev() {
        counter = (counter - 1 + slideImages.length) % slideImages.length;
        showSlide(counter);
    }

    function autoSliding() {
        slideInterval = setInterval(slideNext, 3000);
    }

    const container = document.querySelector('.slide-container');
    container.addEventListener('mouseover', function () {
        clearInterval(slideInterval);
    });

    container.addEventListener('mouseout', autoSliding);

    function switchImage(currentImage) {
        const imageId = parseInt(currentImage.getAttribute('attr'));
        if (imageId !== counter) {
            counter = imageId;
            showSlide(counter);
        }
    }

    next.addEventListener('click', slideNext);
    prev.addEventListener('click', slidePrev);

    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            switchImage(this);
        });
    });

    autoSliding();
});