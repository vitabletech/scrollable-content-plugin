<?php
class MyScrollableContent {
    public function __construct() {
        add_shortcode('scrollable_content', [$this, 'render_scrollable_content']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_scripts() {
        wp_enqueue_style('my-scrollable-content-style', plugins_url('../assets/css/style.css', __FILE__));
        wp_enqueue_script('my-scrollable-content-script', plugins_url('../assets/js/script.js', __FILE__), ['jquery'], null, true);
    }

    public function render_scrollable_content() {
        $images = $this->get_images();
        $texts = $this->get_texts();

        $imageHtml = '';
        foreach ($images as $image) {
            $imageHtml .= '<div class="home-scroll_img-item"><img src="' . esc_url($image) . '" alt=""></div>';
        }

        $textHtml = '';
        foreach ($texts as $text) {
            $textHtml .= '<div class="home-scroll_text-item">' . esc_html($text) . '</div>';
        }

        ob_start();
        ?>
        <div class="home-scroll_container grid-column-2 gap-large">
            <div class="home-scroll_visual flex-vert-center-center">
                <div class="home-scroll_img-wrap w-dyn-list">
                    <div role="list" class="home-scroll_img-list w-dyn-items">
                        <?php echo $imageHtml; ?>
                    </div>
                </div>
            </div>
            <div class="home-scroll_content">
                <div class="home-scroll_text-wrap w-dyn-list">
                    <div role="list" class="home-scroll_text-list w-dyn-items">
                        <?php echo $textHtml; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    private function get_images() {
        // Placeholder for image retrieval logic
        return ['image1.jpg', 'image2.jpg', 'image3.jpg'];
    }

    private function get_texts() {
        // Placeholder for text retrieval logic
        return ['Text for image 1', 'Text for image 2', 'Text for image 3'];
    }
}