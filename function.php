<?php
function generate_dynamic_content_shortcode() {
    // Example data (replace with dynamic data as needed)
    $images = [
        ["src" => "./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp", "is_active" => false],
        ["src" => "./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp", "is_active" => true],
        ["src" => "./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp", "is_active" => false],
    ];

    $texts = [
        [
            "src" => "./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp",
            "title" => "Polpharma API",
            "content" => "We are proud of our 70 years of experience in supporting patients’ health with high quality APIs..."
        ],
        [
            "src" => "./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp",
            "title" => "API Manufacturing Sites",
            "content" => "Polpharma utilizes up-to-date technologies, which ensure the safety of products, employees, and the natural environment..."
        ],
        [
            "src" => "./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp",
            "title" => "Polpharma Group",
            "content" => "For over 80 years, trusted by patients, healthcare professionals, and business partners alike..."
        ],
    ];

    // Generate the dynamic content
    $imageHtml = '';
    foreach ($images as $image) {
        $activeClass = $image['is_active'] ? 'is-active' : '';
        $imageHtml .= <<<HTML
        <div role="listitem" class="home-scroll_img-item w-dyn-item $activeClass">
            <img src="{$image['src']}" class="home-scroll_img">
        </div>
        HTML;
    }

    $textHtml = '';
    foreach ($texts as $index => $text) {
        $activeClass = $index === 1 ? 'is-active' : '';
        $textHtml .= <<<HTML
        <div role="listitem" class="home-scroll_text-item w-dyn-item $activeClass">
            <img src="{$text['src']}" class="home-scroll_photo">
            <div>
                <h2 class="heading-style-h5">{$text['title']}</h2>
                <div class="spacer-small"></div>
                <p>{$text['content']}</p>
            </div>
        </div>
        HTML;
    }

    return <<<HTML
    <div class="page-wrapper">
        <main class="main-wrapper">
            <section data-theme="inherit" class="home-scroll_section">
                <div id="w-node-d670f7ec-b074-6a51-8afe-3d329e5aadda-4dfc2b4b" class="container-large">
                    <div class="padding-global">
                        <div class="home-scroll-layout grid-column-2 gap-large">
                            <!-- Dynamic Image Section -->
                            <div class="home-scroll_visual flex-vert-center-center">
                                <div class="home-scroll_img-wrap w-dyn-list">
                                    <div role="list" class="home-scroll_img-list w-dyn-items">
                                        $imageHtml
                                    </div>
                                </div>
                            </div>
                            <!-- Dynamic Text Section -->
                            <div class="home-scroll_content">
                                <div class="home-scroll_text-wrap w-dyn-list">
                                    <div role="list" class="home-scroll_text-list w-dyn-items">
                                        $textHtml
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    HTML;
}

// Register the shortcode
// add_shortcode('dynamic_content', 'generate_dynamic_content_shortcode');
