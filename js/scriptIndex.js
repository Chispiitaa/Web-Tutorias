window.addEventListener('scroll', function() {
    const overlay = document.querySelector('.video-container .overlay');
    let scrollPosition = window.scrollY;
    overlay.style.background = `rgba(0, 0, 0, ${Math.min(scrollPosition / 500, 0.7)})`;
});
