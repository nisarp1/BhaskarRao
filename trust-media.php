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
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px" style="font-size: 3.5rem; line-height: 3.7rem;">Media Center</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Capturing the stories of change, community service, and our journey towards a better Karnataka.</p>
                <?php include 'parts/shared/trust-menu.php'; ?>

            </div>
            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative z-index-2 text-end" style="padding-top: 80px;">
                <div class="d-inline-block position-relative">
                    <img src="images/new/banners/innerpage-banner.webp" class="border-radius-15px box-shadow-quadruple-large border border-4 border-white" style="max-height: 400px; object-fit: cover;" alt="Banner">
                    <div class="position-absolute left-minus-10px top-minus-10px w-100 h-100 border-radius-15px z-index-minus-1" style="background-color: #f4730e;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section (Redesigned Gallery) -->
<section class="bg-gradient-solitude-blue-fair-pink py-5 gallery-box">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">VISUAL EVIDENCE</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Trust Media <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Gallery.</span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center g-4" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
            
            <!-- Gallery Group 1: Educational Support -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/services/1.jpg" data-group="edu-gallery" title="Supporting rural education through scholarship programs and infrastructure development.">
                        <img src="images/new/services/1.jpg" class="gallery-featured-img" alt="Educational Support">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 4 Images</span>
                            <p class="gallery-caption">Educational Initiatives</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/services/2.jpg" data-group="edu-gallery" title="Distribution of learning kits to primary school students." class="d-none"></a>
                    <a href="images/new/services/4.jpg" data-group="edu-gallery" title="Renovating community study centers in Chamarajpet." class="d-none"></a>
                    <a href="images/new/services/5.jpg" data-group="edu-gallery" title="Mentorship sessions for aspiring civil service candidates." class="d-none"></a>
                </div>
            </div>

            <!-- Gallery Group 2: Health & Wellness -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/services/2.jpg" data-group="health-gallery" title="Comprehensive health camps providing free screenings and medicines to the elderly.">
                        <img src="images/new/services/2.jpg" class="gallery-featured-img" alt="Health & Wellness">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 3 Images</span>
                            <p class="gallery-caption">Health & Wellness</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/news/2.jpg" data-group="health-gallery" title="Specialized dental and vision checkup drives for children." class="d-none"></a>
                    <a href="images/new/news/1.jpg" data-group="health-gallery" title="Emergency ambulance services supported by the Foundation." class="d-none"></a>
                </div>
            </div>

            <!-- Gallery Group 3: Community Empowerment -->
            <div class="col">
                <div class="gallery-featured-item">
                    <a href="images/new/services/4.jpg" data-group="impact-gallery" title="Direct action and empowerment drives to uplift the marginalized sections of society.">
                        <img src="images/new/services/4.jpg" class="gallery-featured-img" alt="Community Empowerment">
                        <div class="gallery-overlay">
                            <span class="gallery-counter">Gallery • 4 Images</span>
                            <p class="gallery-caption">Community Impact</p>
                        </div>
                    </a>
                    <!-- Hidden Slider Images -->
                    <a href="images/new/services/5.jpg" data-group="impact-gallery" title="Self-help group workshop for women entrepreneurs." class="d-none"></a>
                    <a href="images/new/rao.jpg" data-group="impact-gallery" title="Shri Bhaskar Rao reviewing the development progress with trust volunteers." class="d-none"></a>
                    <a href="images/new/news/3.jpg" data-group="impact-gallery" title="Sustainable livelihood programs launched in rural Karnataka." class="d-none"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<!-- start section (News & Media) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">IN THE PRESS</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Trust News & <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Coverage.</span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center g-4">
            <!-- News 1 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">March 15, 2024</div>
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">New Scholarship Program Launched for Rural Students</h6>
                    <p class="mb-20px">The Trust has announced over 500 new scholarships for the upcoming academic year.</p>
                    <a href="#" class="btn btn-link btn-extra-large text-dark-gray text-brand-blue-hover">Read More<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
            <!-- News 2 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">Feb 28, 2024</div>
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">Health Camp Reaches 2,000 Citizens in Chamarajpet</h6>
                    <p class="mb-20px">Successfully concluded a three-day intensive health screening camp with specialized doctors.</p>
                    <a href="#" class="btn btn-link btn-extra-large text-dark-gray text-brand-blue-hover">Read More<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
            <!-- News 3 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400, "easing": "easeOutQuad" }'>
                <div class="bg-gradient-solitude-blue-fair-pink p-4 border-radius-10px h-100">
                    <div class="fs-13 fw-700 text-gradient-saffron mb-10px text-uppercase">Jan 10, 2024</div>
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">Annual Impact Report Highlights Growth</h6>
                    <p class="mb-20px">Our 2023 report shows a 40% increase in social outreach efficiency and volunteer participation.</p>
                    <a href="#" class="btn btn-link btn-extra-large text-dark-gray text-brand-blue-hover">Read More<i class="feather icon-feather-arrow-right icon-small ms-5px"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section (Social) -->
<section class="py-5 bg-gradient-solitude-blue-fair-pink">
    <div class="container text-center">
        <h3 class="alt-font fw-600 text-dark-gray mb-30px ls-minus-1px">Follow our <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Social Updates.</span></h3>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-facebook me-10px"></i>Facebook</a>
            <a href="#" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-twitter-x me-10px"></i>Twitter (X)</a>
            <a href="#" class="btn btn-large btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow"><i class="bi bi-instagram me-10px"></i>Instagram</a>
        </div>
    </div>
</section>
<!-- end section -->

<?php include 'parts/shared/footer.php'; ?>
<?php include 'parts/shared/html-footer.php'; ?>