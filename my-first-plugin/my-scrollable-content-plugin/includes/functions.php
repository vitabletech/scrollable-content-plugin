<?php
// This file contains helper functions used by the plugin

function my_scrollable_content_get_images() {
    // Retrieve images from the database or other sources
    // Placeholder for actual image retrieval logic
    return array(
        'image1.jpg',
        'image2.jpg',
        'image3.jpg',
    );
}

function my_scrollable_content_get_texts() {
    // Retrieve texts from the database or other sources
    // Placeholder for actual text retrieval logic
    return array(
        'Text for image 1',
        'Text for image 2',
        'Text for image 3',
    );
}

function my_scrollable_content_render() {
    $images = my_scrollable_content_get_images();
    $texts = my_scrollable_content_get_texts();
    
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
    <div class="home-scrollable-content grid-column-2 gap-large">
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