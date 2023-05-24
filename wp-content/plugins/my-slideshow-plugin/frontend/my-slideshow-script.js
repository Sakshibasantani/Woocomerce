(function($) {
    $.fn.slideshow = function(options) {
        // Default settings
        var settings = $.extend({
            autoplay: false,
            duration: 3000
        }, options);

        // Iterate over each slideshow element
        return this.each(function() {
            var slideshow = $(this);
            var slides = slideshow.find('img');
            var currentSlide = 0;

            // Show the first slide
            slides.eq(0).show();

            // Function to transition to the next slide
            function nextSlide() {
                slides.eq(currentSlide).fadeOut();
                currentSlide = (currentSlide + 1) % slides.length;
                slides.eq(currentSlide).fadeIn();
            }

            // Start autoplay if enabled
            if (settings.autoplay) {
                setInterval(nextSlide, settings.duration);
            }
        });
    };
})(jQuery);


