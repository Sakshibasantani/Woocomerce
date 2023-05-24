
<?php

// Enqueue necessary scripts and styles
function my_slideshow_enqueue_scripts() {
    // Enqueue jQuery if it's not already loaded
    if (!wp_script_is('jquery', 'enqueued')) {
        wp_enqueue_script('jquery');
    }

    // Enqueue your custom slideshow script
    wp_enqueue_script('my-slideshow-script', plugin_dir_url(__FILE__) . 'js/my-slideshow-script.js', array('jquery'), '1.0', true);

    // Enqueue your custom slideshow style
    wp_enqueue_style('my-slideshow-style', plugin_dir_url(__FILE__) . 'css/my-slideshow-style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'my_slideshow_enqueue_scripts');

// Shortcode for displaying the slideshow
function my_slideshow_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'images' => '',
        'autoplay' => 'false',
        'duration' => 3000
    ), $atts);

    // Convert the images attribute string into an array of image URLs
    $images = explode(',', $atts['images']);

    // Generate the HTML markup for the slideshow
    ob_start();
    ?>
    <div class="my-slideshow">
        <?php foreach ($images as $image) : ?>
            <img src="<?php echo esc_attr($image); ?>" alt="Slideshow Image">
        <?php endforeach; ?>
    </div>

    <script>
    jQuery(document).ready(function($) {
        $('.my-slideshow').slideshow({
            autoplay: <?php echo $atts['autoplay']; ?>,
            duration: <?php echo $atts['duration']; ?>
        });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('my_slideshow', 'my_slideshow_shortcode');
?>
