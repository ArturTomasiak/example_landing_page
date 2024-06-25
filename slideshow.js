document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.slideshow-images img');
    const totalImages = images.length;
    let currentIndex = 0;
    let intervalId;

    function show_image(index) {
        images.forEach((img, i) => {
            if (i === index) {
                img.classList.add('active');
            } else {
                img.classList.remove('active');
            }
        });
    }

    function start_slide_show() {
        show_image(currentIndex);
        intervalId = setInterval(() => {
            currentIndex = (currentIndex < totalImages - 1) ? currentIndex + 1 : 0;
            show_image(currentIndex);
        }, 4500);
    }

    function reset() {
        clearInterval(intervalId);
        start_slide_show();
    }

    document.getElementById('left-btn').addEventListener('click', function() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalImages - 1;
        show_image(currentIndex);
        reset();
    });

    document.getElementById('right-btn').addEventListener('click', function() {
        currentIndex = (currentIndex < totalImages - 1) ? currentIndex + 1 : 0;
        show_image(currentIndex);
        reset();
    });

    start_slide_show();
});