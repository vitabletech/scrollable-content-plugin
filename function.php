<?php
function generateDynamicContent($images, $texts) {
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
