<?php include 'parts/shared/html-header.php'; ?>
<?php include 'parts/shared/header.php'; ?>

<style>
    .gallery-featured-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 1 / 1;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .gallery-featured-item:hover {
        transform: translateY(-10px);
    }
    .gallery-featured-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .gallery-featured-item:hover .gallery-featured-img {
        transform: scale(1.1);
    }
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: #fff;
        z-index: 2;
    }
    .gallery-caption {
        font-family: var(--alt-font);
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 0;
        color: #ffffff !important;
    }
    .gallery-counter {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.8;
    }
    /* Magnific Popup Custom Styling to match Brand */
    .mfp-title {
        font-family: var(--alt-font) !important;
        font-weight: 600 !important;
        padding-top: 10px !important;
    }
</style>

<!-- start page title -->
<section class="p-0 cover-background inner-hero-header position-relative overflow-hidden" style="background-image: url('images/new/slider/1.png');">
    <div class="bg-hero-gradient-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block inner-hero-label fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor-thick pb-5px mb-25px">Bhaskar Rao IPS (Retd.)</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px" style="font-size: 3.5rem; line-height: 3.7rem;">News & Events</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Tracking the public journey of Shri Bhaskar Rao—from cycling for social change to media features.</p>
                <?php include 'parts/shared/governance-menu.php'; ?>

            </div>
            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative z-index-2 text-end" style="padding-top: 80px;">
                <div class="d-inline-block position-relative">
                    <img src="images/new/banners/news-events.jpg" class="border-radius-15px box-shadow-quadruple-large border border-4 border-white" style="max-height: 400px; object-fit: cover;" alt="Banner">
                    <div class="position-absolute left-minus-10px top-minus-10px w-100 h-100 border-radius-15px z-index-minus-1" style="background-color: #f4730e;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section (News & Media) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">IN THE PRESS</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Bhaskar Rao in the <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Media.</span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center g-4">
            <!-- News 1 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">January 12, 2026</div>
                    <img src="images/new/news/1.jpg" class="w-100 border-radius-6px mb-20px" alt="News 1">
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">BJP delegation meets Ktaka Guv over ‘hate speech’ bill</h6>
                    <p class="mb-20px">Shri Bhaskar Rao joins senior BJP leadership in presenting a memorandum to the Governor regarding legislative concerns.</p>
                    <a href="https://www.socialnews.xyz/2026/01/12/bjp-delegation-meets-ktaka-guv-asks-him-not-to-sign-hate-speech-bill/" target="_blank" class="text-saffron fw-700 text-uppercase ls-1px fs-14 mt-3 d-inline-block text-decoration-none">Social News XYZ<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
            <!-- News 2 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">December 2, 2025</div>
                    <img src="images/new/news/2.jpg" class="w-100 border-radius-6px mb-20px" alt="News 2">
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">Bhaskar Rao calls for Transparency in State Governance</h6>
                    <p class="mb-20px">Interacting with India Today, Rao discusses the 'caretaker' role of administration during political shifts.</p>
                    <a href="https://www.indiatoday.in/india/video/karnataka-power-tussle-bjps-bhaskar-rao-calls-siddaramaiah-caretaker-cm-amid-rift-ytvd-2829577-2025-12-02" target="_blank" class="text-saffron fw-700 text-uppercase ls-1px fs-14 mt-3 d-inline-block text-decoration-none">India Today<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
            <!-- News 3 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">September 9, 2025</div>
                    <img src="images/new/news/3.jpg" class="w-100 border-radius-6px mb-20px" alt="News 3">
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">Rao Addresses Communal Harmony in Maddur</h6>
                    <p class="mb-20px">Faulting the current administration for tensions, Rao advocates for police-led efficiency in crisis zones.</p>
                    <a href="https://thesouthfirst.com/karnataka/ex-adgp-turned-bjp-leader-bhaskar-rao-faults-congress-government-for-communal-tension-in-maddur/" target="_blank" class="text-saffron fw-700 text-uppercase ls-1px fs-14 mt-3 d-inline-block text-decoration-none">The South First<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section (Redesigned Gallery) -->
<section class="bg-gradient-solitude-blue-fair-pink py-5 gallery-box">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">IMPACT STORIES</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">The People's <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Gallery.</span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center g-4" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
            
            <!-- Gallery Group 1: Community Initiatives -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/services/1.jpg" data-group="community-gallery" title="Shri Bhaskar Rao interacting with citizens during a Chamarajpet outreach drive.">
                        <img src="images/new/services/1.jpg" class="gallery-featured-img" alt="Community Outreach">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 4 Images</span>
                            <p class="gallery-caption">Community Outreach</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/services/2.jpg" data-group="community-gallery" title="Distribution of essential supplies to local families." class="d-none"></a>
                    <a href="images/new/services/4.jpg" data-group="community-gallery" title="Town Hall session addressing local infrastructure needs." class="d-none"></a>
                    <a href="images/new/services/5.jpg" data-group="community-gallery" title="Volunteers joining the 'Chamarajpet First' initiative." class="d-none"></a>
                </div>
            </div>

            <!-- Gallery Group 2: Public Rallies -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/rao.jpg" data-group="rally-gallery" title="A gathering of supporters during the State Policy awareness rally.">
                        <img src="images/new/rao.jpg" class="gallery-featured-img" alt="Public Rallies">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 3 Images</span>
                            <p class="gallery-caption">Public Leadership</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/slider/4.png" data-group="rally-gallery" title="Shri Bhaskar Rao addressing a major convention in Bengaluru." class="d-none"></a>
                    <a href="images/new/slider/2.png" data-group="rally-gallery" title="Engagement with the youth leadership wings of the state." class="d-none"></a>
                </div>
            </div>

            <!-- Gallery Group 3: Cycling for Social Change -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/services/3.jpg" data-group="cycling-gallery" title="Pedalling for Progress: The 1,756 km cycle jatha from Bidar to Bengaluru.">
                        <img src="images/new/services/3.jpg" class="gallery-featured-img" alt="Cycling Campaign">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 4 Images</span>
                            <p class="gallery-caption">Pedalling for Change</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/news/1.jpg" data-group="cycling-gallery" title="Awareness session on the Swachh Bharat mission during the tour." class="d-none"></a>
                    <a href="images/new/news/2.jpg" data-group="cycling-gallery" title="Planting saplings alongside fellow cyclists across Karnataka." class="d-none"></a>
                    <a href="images/new/news/3.jpg" data-group="cycling-gallery" title="The Tour of Nilgiris: Showcasing sustainable transportation." class="d-none"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<!-- start section (Cycling Highlights - Detailed) -->
<section class="bg-white py-5">
    <div class="container">
        <div class="row align-items-center bg-gradient-solitude-blue-fair-pink border-radius-10px p-5 box-shadow-extra-large">
            <div class="col-lg-6 md-mb-30px">
                <img src="images/new/slider/sustainability.jpg" class="border-radius-10px box-shadow-quadruple-large" alt="Cycling Campaign">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <h4 class="alt-font text-dark-gray fw-600">Sustainability & Progress</h4>
                <p class="fs-17">Beyond policy, Shri Bhaskar Rao advocates for a cleaner, greener Karnataka through active participation in major environmental and cultural campaigns.</p>
                <ul class="p-0 list-style-02 mb-30px">
                    <li class="pb-5px fs-16 text-dark-gray ls-minus-05px fw-600"><i class="feather icon-feather-check-circle icon-small me-10px text-brand-blue"></i>1,756 km "Swachh Bharat" Cycle Jatha</li>
                    <li class="pb-5px fs-16 text-dark-gray ls-minus-05px fw-600"><i class="feather icon-feather-check-circle icon-small me-10px text-brand-blue"></i>7,500+ Saplings Planted State-wide</li>
                    <li class="pb-5px fs-16 text-dark-gray ls-minus-05px fw-600"><i class="feather icon-feather-check-circle icon-small me-10px text-brand-blue"></i>Promoting "Kannada Ulisi, Kannada Belesi"</li>
                </ul>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="btn btn-medium btn-rounded with-rounded bg-gradient-saffron text-white border-0 btn-box-shadow">Connect with us<span class="bg-white text-saffron"><i class="feather icon-feather-arrow-right"></i></span></a>
                    <a href="javascript:void(0);" class="btn btn-medium btn-rounded with-rounded btn-transparent-white-light text-saffron btn-box-shadow" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="T912dduUqxw">Watch Video<span class="bg-gradient-saffron text-white" style="-webkit-text-fill-color: white !important; color: white !important;"><i class="bi bi-play-fill fs-18"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section (Social) -->
<section class="py-5 bg-gradient-solitude-blue-fair-pink">
    <div class="container text-center">
        <h3 class="alt-font fw-600 text-dark-gray mb-30px ls-minus-1px">Follow Shri Bhaskar Rao's <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Live Updates.</span></h3>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="https://www.facebook.com/IPSBhaskarRao/" target="_blank" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-facebook me-10px"></i>Facebook</a>
            <a href="https://x.com/Nimmabhaskar22" target="_blank" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-twitter-x me-10px"></i>Twitter (X)</a>
            <a href="https://www.instagram.com/bhaskarrao/?hl=en" target="_blank" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-instagram me-10px"></i>Instagram</a>
            <a href="https://www.linkedin.com/in/bhaskar-rao-ips/" target="_blank" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-linkedin me-10px"></i>LinkedIn</a>
            <a href="https://en.wikipedia.org/wiki/Bhaskar_Rao" target="_blank" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="fa-brands fa-wikipedia-w me-10px"></i>Wikipedia</a>
        </div>
    </div>
</section>
<!-- end section -->

<?php include 'parts/shared/footer.php'; ?>
<?php include 'parts/shared/html-footer.php'; ?>