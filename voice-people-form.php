<?php include 'parts/shared/html-header.php'; ?>
<?php include 'parts/shared/header.php'; ?>

<!-- start page title -->
<section class="p-0 cover-background inner-hero-header position-relative overflow-hidden" style="background-image: url('images/new/slider/1.png');">
    <div class="bg-hero-gradient-overlay"></div>
    <img src="images/new/slider/4.png" class="hero-foreground-img" alt="Bhaskar Rao"
        data-anime='{ "opacity": [0, 1], "scale": [1.1, 1], "duration": 1000, "delay": 0, "easing": "easeOutQuint" }'>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block inner-hero-label fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor-thick pb-5px mb-25px">Bhaskar Rao IPS (Retd.)</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px" style="font-size: 3.5rem; line-height: 3.7rem;">Voice of the People</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Your concerns, your ideas, and your feedback are the fuel for our progress. Speak up for a better Chamarajpet.</p>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<section class="bg-gradient-solitude-blue-fair-pink">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">Interactive Citizen Forum</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Your Concerns are Our Priority: <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Report & Resolve</span></h3>
                <p class="fs-18">This portal is designed to make governance accessible. Shri Bhaskar Rao believes that no problem is too small and no area is too remote. Use our simple online form to report issues directly to our team.</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mt-5">
            <!-- Feature 1 -->
            <div class="col md-mb-30px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="premium-value-card text-center h-100">
                    <i class="bi bi-chat-left-dots-fill value-icon"></i>
                    <h5 class="alt-font text-dark-gray fw-700 mb-15px">Submit a Grievance</h5>
                    <p class="mb-0">Use our simple online form to report issues directly to our team regarding sanitation, roads, safety, water, or corrupt practices.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col md-mb-30px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="premium-value-card text-center h-100">
                    <i class="bi bi-lightbulb-fill value-icon"></i>
                    <h5 class="alt-font text-dark-gray fw-700 mb-15px">Attach Photos & Geography</h5>
                    <p class="mb-0">Easily upload pictures and pin your location to help our team verify and act on the grievance quickly.</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="premium-value-card text-center h-100">
                    <i class="bi bi-check-all value-icon"></i>
                    <h5 class="alt-font text-dark-gray fw-700 mb-15px">Track Your Complaint</h5>
                    <p class="mb-0">Every submission generates a unique ID, allowing you to track its status—from "Acknowledged" to "Resolved."</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<section class="py-5" id="submission-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 md-mb-50px">
                <h4 class="alt-font text-dark-gray fw-600 mb-20px">Your feedback drives us.</h4>
                <p class="fs-17 w-90">Please provide as much detail as possible so we can route your message to the correct department within our ward offices.</p>
                <div class="bg-very-light-gray p-4 border-radius-8px border-start border-4 border-color-brand-blue mt-30px">
                    <p class="fs-16 mb-0 text-dark-gray font-style-italic">"I promise to personally review the most critical issues weekly. Transparency is not just a word for us; it's a daily practice."</p>
                    <div class="mt-15px text-uppercase fs-13 fw-700 ls-1px text-dark-gray">Bhaskar Rao IPS (Retd.)</div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="#" method="post" class="row contact-form-style-02">
                    <div class="col-md-6 mb-30px">
                        <input class="input-name border-radius-4px border-color-extra-medium-gray bg-white form-control required" type="text" name="name" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="input-email border-radius-4px border-color-extra-medium-gray bg-white form-control required" type="email" name="email" placeholder="Your Email*">
                    </div>
                    <div class="col-md-12 mb-30px">
                        <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white" type="tel" name="phone" placeholder="Your Phone Number">
                    </div>
                    <div class="col-md-12 mb-30px">
                        <select name="category" class="form-select border-radius-4px border-color-extra-medium-gray bg-white">
                            <option value="">Select Category</option>
                            <option value="sanitation">Sanitation & Waste Disposal</option>
                            <option value="roads">Roads & Potholes</option>
                            <option value="safety">Street Lighting & Safety</option>
                            <option value="water">Water Supply</option>
                            <option value="corruption">Corrupt Practices by Local Officials</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-30px">
                        <textarea class="border-radius-4px border-color-extra-medium-gray bg-white form-control" name="comment" rows="4" placeholder="Description of your concern*"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-medium btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100" type="submit">Submit Voice<span class="bg-blue-licorice text-white"><i class="feather icon-feather-arrow-right"></i></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- start town halls section -->
<section class="py-5 bg-gradient-solitude-blue-fair-pink">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">Open Door Policy</span>
                <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px">Weekly Town <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Halls.</span></h3>
                <p class="fs-18">As part of his commitment to transparency, Shri Bhaskar Rao holds standard "Janatha Darshana" (People's Meetings). Dates and locations for the upcoming weekly meetings are posted here.</p>
            </div>
        </div>
    </div>
</section>
<!-- end town halls section -->
<!-- start quote section -->
<section class="py-5 bg-quote-brand position-relative overflow-hidden">
    <div class="bg-hero-gradient-overlay opacity-8"></div>
    <div class="container position-relative z-index-2">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-10 text-center text-lg-start md-mb-50px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <i class="bi bi-quote text-white fs-80 opacity-2 mb-20px d-block d-lg-inline-block"></i>
                <h4 class="alt-font text-white fw-500 mb-30px ls-minus-1px lh-40">"True leadership is not about power, but the <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">empowerment of the smallest voice</span> in the community. Our mission is to build a safer, smarter, and more inclusive future for all."</h4>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                    <span class="w-50px h-1px bg-white opacity-5 me-20px"></span>
                    <span class="fs-20 text-white fw-600 text-uppercase ls-2px alt-font">Bhaskar Rao IPS (Retd.)</span>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="position-relative">
                    <img src="images/new/rao.jpg" class="border-radius-10px box-shadow-quadruple-large" alt="Bhaskar Rao">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end quote section -->
<?php include 'parts/shared/footer.php'; ?>
<?php include 'parts/shared/html-footer.php'; ?>