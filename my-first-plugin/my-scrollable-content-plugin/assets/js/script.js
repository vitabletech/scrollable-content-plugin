document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.home-scroll_img-list');
    const scrollContent = document.querySelector('.home-scroll_text-list');

    if (scrollContainer && scrollContent) {
        // Example of a simple scroll effect
        let scrollPosition = 0;

        function scrollContent() {
            scrollPosition += 1; // Adjust scroll speed here
            scrollContainer.scrollLeft = scrollPosition;
            scrollContent.scrollLeft = scrollPosition;

            // Loop the scroll
            if (scrollPosition >= scrollContainer.scrollWidth) {
                scrollPosition = 0;
            }

            requestAnimationFrame(scrollContent);
        }

        scrollContent();
    }
});