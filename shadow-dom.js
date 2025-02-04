class MyShadowDom extends HTMLElement {
  constructor() {
    super();
    const shadow = this.attachShadow({ mode: 'open' });

    shadow.innerHTML = `
      <style>
        @import url('./css/webflow.min.css');
        @import url('./css/main_style.css');
        @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
      </style>
      <script type="text/javascript" async="" src="./js/destination.js"></script>
        <div class="page-wrapper">
          <main class="main-wrapper">
            <section data-theme="inherit" class="home-scroll_section">
              <div id="w-node-d670f7ec-b074-6a51-8afe-3d329e5aadda-4dfc2b4b" class="container-large">
                <div class="padding-global">
                  <div class="home-scroll-layout grid-column-2 gap-large">
                    <div class="home-scroll_visual flex-vert-center-center">
                      <div class="home-scroll_img-wrap w-dyn-list">
                        <div role="list" class="home-scroll_img-list w-dyn-items">
                          <div role="listitem" class="home-scroll_img-item w-dyn-item">
                            <img src="./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp" class="home-scroll_img">
                          </div>
                          <div role="listitem" class="home-scroll_img-item w-dyn-item is-active">
                            <img src="./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp" class="home-scroll_img">
                          </div>
                          <div role="listitem" class="home-scroll_img-item w-dyn-item">
                            <img src="./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp" class="home-scroll_img">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="home-scroll_content">
                      <div class="home-scroll_text-wrap w-dyn-list">
                        <div role="list" class="home-scroll_text-list w-dyn-items">
                          <div role="listitem" class="home-scroll_text-item w-dyn-item">
                            <img src="./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp" class="home-scroll_photo">
                            <div>
                              <h2 class="heading-style-h5">Polpharma API</h2>
                              <div class="spacer-small"></div>
                              <p>We are proud of our 70 years of experience in supporting patients’ health with high quality APIs and becoming a leading European CDMO partner. Our core competencies are a solid foundation to assure customer satisfaction through the highest quality of products delivered...</p>
                            </div>
                          </div>
                          <div role="listitem" class="home-scroll_text-item w-dyn-item is-active">
                            <img src="./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp" class="home-scroll_photo">
                            <div>
                              <h2 class="heading-style-h5">API Manufacturing Sites</h2>
                              <div class="spacer-small"></div>
                              <p>Polpharma utilizes up-to-date technologies, which ensure the safety of products, employees, and the natural environment. We have the capabilities to provide customers with materials ranging from clinical quantities up to the in-market supply. We have full and vertical int... </p>
                            </div>
                          </div>
                          <div role="listitem" class="home-scroll_text-item w-dyn-item">
                            <img src="./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp" class="home-scroll_photo">
                            <div>
                              <h2 class="heading-style-h5">Polpharma Group</h2>
                              <div class="spacer-small"></div>
                              <p>For over 80 years, trusted by patients, healthcare professionals, and business partners alike. A leading regional (CEE and CIS) manufacturer of pharmaceuticals and a leader in the Polish &amp; Kazakhstan pharmaceutical market. Actively operating in Central and Eastern Europe...</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
        </div>
      <!-- JS Libraries -->
      <script src="./js/jquery-3.5.1.min.js" type="text/javascript"></script>
      <!-- GSAP -->
      <script src="./js/gsap.min.js"></script>
      <script src="./js/ScrollTrigger.min.js"></script>
      <script src="./js/main.js"></script>
    `;
  }
}

customElements.define('my-shadow-dom', MyShadowDom);