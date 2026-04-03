<?php include 'parts/shared/html-header.php'; ?>
<?php include 'parts/shared/header.php'; ?>

<!-- start page title -->
<section class="p-0 cover-background inner-hero-header position-relative overflow-hidden" style="background-image: url('images/new/slider/1.png');">
    <div class="bg-hero-gradient-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block inner-hero-label fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor-thick pb-5px mb-25px">Bhaskar Rao IPS (Retd.)</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px" style="font-size: 3.5rem; line-height: 3.7rem;">Events & Clubs</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">A legacy of discipline, innovation, and empathy in public service and governance.</p>
                <?php include 'parts/shared/governance-menu.php'; ?>

            </div>
            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative z-index-2 text-end" style="padding-top: 80px;">
                <div class="d-inline-block position-relative">
                    <img src="images/new/banners/campaigns-events.jpg" class="border-radius-15px box-shadow-quadruple-large border border-4 border-white" style="max-height: 400px; object-fit: cover;" alt="Banner">
                    <div class="position-absolute left-minus-10px top-minus-10px w-100 h-100 bg-gradient-saffron border-radius-15px z-index-minus-1" style="opacity: 0.5;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section (Upcoming Events) -->
<section class="py-5 bg-gradient-solitude-blue-fair-pink">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">STAY CONNECTED</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Upcoming <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Events & Clubs.</span></h3>
                <p class="fs-18">Join our community gatherings, workshops, and grassroots initiatives to be an active part of the movement.</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center g-4">
            <!-- Event 1 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/1.jpg" class="w-100" alt="Town Hall Meeting">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">15 APR, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Town Hall: Urban Development</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> Town Hall, Bengaluru | 10:00 AM</p>
                        <p class="mb-25px">A collective discussion on solving Chamarajpet's infrastructure challenges with citizen participation.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/2.jpg" class="w-100" alt="Citizen Leadership">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">22 APR, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Citizen Leadership Workshop</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> Constituency Office | 02:00 PM</p>
                        <p class="mb-25px">Equipping young leaders with the tools to navigate administrative systems and drive local change.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/3.jpg" class="w-100" alt="Clean & Green Drive">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">05 MAY, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Clean & Green Drive: Ward 135</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> Central Park, Ward 135 | 07:00 AM</p>
                        <p class="mb-25px">Join us for a community-led sanitation and plantation drive to reclaim our public spaces.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- Event 4 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/4.jpg" class="w-100" alt="Digital Literacy">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">12 MAY, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Digital Literacy Camp</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> GHS Chamarajpet | 11:00 AM</p>
                        <p class="mb-25px">Sponsoring basic coding and digital safety workshops for government high school students.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- Event 5 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 800, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/5.jpg" class="w-100" alt="First Aid Training">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">20 MAY, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Red Cross First Aid Training</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> Red Cross Office | 09:00 AM</p>
                        <p class="mb-25px">Certified basic life support and trauma response training for community volunteers.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- Event 6 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-white border-radius-10px overflow-hidden box-shadow-extra-large h-100 transition-inner-all">
                    <div class="position-relative">
                        <img src="images/new/events/6.jpg" class="w-100" alt="Grievance Meeting">
                        <div class="position-absolute top-20px left-20px bg-gradient-blue-ironstone-brown text-white border-radius-4px fw-700 fs-13 shadow-sm" style="padding: 5px 5px">02 JUN, 2024</div>
                    </div>
                    <div class="p-30px">
                        <h6 class="alt-font fw-700 text-dark-gray mb-10px">Ward 141 Grievance Meeting</h6>
                        <p class="fs-15 mb-20px"><i class="bi bi-geo-alt me-5px text-brand-blue"></i> Ward Office Premises | 04:00 PM</p>
                        <p class="mb-25px">An open session for Ward 141 residents to voice concerns and track ongoing project statuses.</p>
                        <a href="#volunteer-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100">Register Now<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- end section -->


<!-- end section -->







<?php include 'parts/shared/footer.php'; ?>

<!-- Volunteer/Event Registration Modal -->
<div class="modal fade" id="volunteer-modal" tabindex="-1" aria-labelledby="volunteer-modal-label" aria-hidden="true" style="z-index: 10000 !important;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-radius-10px overflow-hidden border-0">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <!-- Left Column: Branding -->
                    <div class="col-lg-5 bg-gradient-blue-ironstone-brown p-5 d-flex flex-column justify-content-center text-white md-display-none">
                        <h4 class="alt-font fw-600 mb-20px ls-minus-1px">Join the Event.</h4>
                        <p class="fs-16 opacity-8 mb-30px">Register today to secure your spot at our upcoming gatherings and lead the change in your community.</p>
                        <div class="feature-box feature-box-left-icon-middle mb-20px">
                            <div class="feature-box-icon me-15px">
                                <i class="feather icon-feather-calendar icon-small text-white opacity-4"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-white fs-15 ls-minus-05px fw-600">Reserved Seating</span>
                            </div>
                        </div>
                        <div class="feature-box feature-box-left-icon-middle mb-20px">
                            <div class="feature-box-icon me-15px">
                                <i class="feather icon-feather-info icon-small text-white opacity-4"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-white fs-15 ls-minus-05px fw-600">Event Briefing Kits</span>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Form -->
                    <div class="col-lg-7 p-5 bg-white position-relative">
                        <button type="button" class="btn-close me-10px mt-10px" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 10px; top: 10px;"></button>
                        <h5 class="alt-font text-dark-gray fw-700 mb-5px">Event Registration</h5>
                        <p class="mb-30px fs-15">Confirm your participation by filling out the form.</p>
                        <form action="#" method="post" class="row contact-form-style-02">
                            <div class="col-md-12 mb-20px">
                                <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="text" name="name" placeholder="Your Full Name*">
                            </div>
                            <div class="col-md-12 mb-20px">
                                <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="email" name="email" placeholder="Your Email Address*">
                            </div>
                            <div class="col-md-12 mb-20px">
                                <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="tel" name="phone" placeholder="Contact Number*">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-medium btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100" type="submit">Confirm Registration<span class="bg-blue-licorice text-white"><i class="feather icon-feather-chevron-right fs-18"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'parts/shared/html-footer.php'; ?>