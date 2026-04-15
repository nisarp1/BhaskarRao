<?php
$current_page = basename($_SERVER['PHP_SELF']);
$about_pages = ['about-introduction.php', 'about-mission-vision.php', 'ips-career.php', 'politics.php'];
$trust_pages = ['trust-about.php', 'trust-work.php', 'trust-media.php', 'trust-get-involved.php'];
$chamrajpet_pages = ['constituency.php'];
$media_pages = ['news-events.php', 'campaigns-events.php'];
$grievance_pages = ['voice-people-form.php', 'join-movement.php', 'volunteer-development.php'];
?>
<style>
    /* Active Link Styling - Subtle Saffron Color Change */
    .navbar-nav .nav-link {
        position: relative !important;
        transition: all 0.3s ease;
        font-weight: 600 !important;
        color: var(--deep-charcoal) !important;
    }
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link.parent-active {
        background: var(--saffron-gradient) !important;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        color: transparent !important;
        padding-bottom: 5px !important;
    }
    
    .statesman-signature {
        background: var(--saffron-gradient);
        -webkit-background-clip: text !important;
        background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        display: inline-block !important;
        font-family: 'Great Vibes', cursive !important;
        font-size: 34px !important;
        font-weight: 400 !important;
        line-height: 1 !important;
        letter-spacing: 0px !important;
        margin: 0 !important;
    }
    /* Perfect Alignment for Logo Components */
    .navbar-brand .default-logo,
    .navbar-brand .alt-logo,
    .navbar-brand .mobile-logo {
        display: flex !important;
        align-items: center !important;
        gap: 10px;
    }
    /* Dropdown Item Active Styling - Left Solid Border */
    .dropdown-menu li a.active {
        padding-left: 30px !important;
        background-image: none !important;
        background-color: transparent !important;
        -webkit-background-clip: border-box !important;
        background-clip: border-box !important;
        -webkit-text-fill-color: #f4730e !important;
        color: #f4730e !important;
        border-left: 3px solid #f4730e !important;
        border-image: none !important;
        font-weight: 700 !important;
    }
    /* Vertical Centering for the Entire Header Row */
    nav.navbar .container-fluid {
        display: flex !important;
        align-items: center !important;
        min-height: auto;
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }
    /* Whitish Liquid Glass transition when sticky */
    /* Make header sticky/fixed when scrolling */
    header.sticky {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      width: 100% !important;
      z-index: 999 !important;
    }

    /* Hide navbar when scrolling down */
    header.sticky .navbar {
      transform: translateY(-100%) !important;
      -webkit-transform: translateY(-100%) !important;
      transition: transform 0.3s ease-in-out !important;
    }

    /* Show navbar when scrolling up */
    header.sticky.sticky-appear .navbar {
      transform: translateY(0) !important;
      -webkit-transform: translateY(0) !important;
    }

    /* Sticky states - apply background & styling */
    header.sticky-active .glass-nav,
    header.header-sticky .glass-nav,
    header.sticky-appear .glass-nav {
      background: rgba(255, 255, 255, 0.9) !important;
      box-shadow: 0 10px 40px rgba(0,0,0,0.08);
      padding-top: 15px !important;
      padding-bottom: 15px !important;
      border-bottom: 1px solid rgba(0,0,0,0.05) !important;
    }

    header.sticky-active .glass-nav::before,
    header.header-sticky .glass-nav::before,
    header.sticky-active .glass-nav::after,
    header.header-sticky .glass-nav::after {
        height: 1px; /* Subtle gradient touch when sticky */
        opacity: 0.5;
    }
    .navbar-brand {
        display: flex !important;
        align-items: center !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    .navbar-collapse {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .navbar-nav {
        display: flex !important;
        align-items: center !important;
    }
    .header-push-button {
        display: flex !important;
        align-items: center !important;
        margin-left: auto !important;
    }
    /* Navigator Menu Separator: BJP Lotus */
    .navbar-nav > li:not(:last-child)::after {
        content: "";
        width: 14px;
        height: 14px;
        background: url('images/new/bjp-logo-saffron.svg') no-repeat center;
        background-size: contain;
        display: inline-block;
        margin-left: 8px;
        opacity: 0.3;
        vertical-align: middle;
        position: relative;
        top: -1px;
    }
    
    @media (max-width: 991px) {
        .navbar-nav > li::after {
            display: none !important;
        }
    }
    
    /* Remove vertical offsets */
    .navbar-brand span {
        line-height: 1 !important;
        display: inline-block;
    }
</style>
<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-sticky transition-all">
        <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg header-transparent bg-transparent glass-nav">
            <div class="container-fluid">
                <a class="navbar-brand p-0 m-0" href="index.php">
                    <div class="executive-logo">
                        <img src="images/new/logo-icon.png" alt="Bhaskar Rao Icon">
                        <div class="logo-text-block">
                            <span class="name-first">Bhaskar</span>
                            <span class="name-last">Rao <span class="name-title">IPS (Retd.)</span></span>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                        
                        <!-- About Dropdown -->
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="about-introduction.php" class="nav-link <?php echo (in_array($current_page, $about_pages)) ? 'parent-active active' : ''; ?>">About</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a href="about-introduction.php" class="<?php echo ($current_page == 'about-introduction.php') ? 'active' : ''; ?>">About Me</a></li>
                                <li><a href="about-mission-vision.php" class="<?php echo ($current_page == 'about-mission-vision.php') ? 'active' : ''; ?>">Mission & Vision</a></li>
                                <li><a href="ips-career.php" class="<?php echo ($current_page == 'ips-career.php') ? 'active' : ''; ?>">IPS Career</a></li>
                                <li><a href="politics.php" class="<?php echo ($current_page == 'politics.php') ? 'active' : ''; ?>">Political Career</a></li>
                            </ul>
                        </li>

                        <!-- BRCT -->
                        <li class="nav-item"><a href="https://trust.bhaskarrao.com/" target="_blank" class="nav-link">BRCT</a></li>

                        <li class="nav-item"><a href="constituency.php" class="nav-link <?php echo ($current_page == 'constituency.php') ? 'active' : ''; ?>">Chamrajpet</a></li>

                        <!-- Media Dropdown -->
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="news-events.php" class="nav-link <?php echo (in_array($current_page, $media_pages)) ? 'parent-active active' : ''; ?>">Media</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a href="news-events.php" class="<?php echo ($current_page == 'news-events.php') ? 'active' : ''; ?>">News & Media</a></li>
                                <li><a href="campaigns-events.php" class="<?php echo ($current_page == 'campaigns-events.php') ? 'active' : ''; ?>">Event Highlights</a></li>
                            </ul>
                        </li>

                        <!-- Your Voice Dropdown -->
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="voice-people-form.php" class="nav-link <?php echo (in_array($current_page, $grievance_pages)) ? 'parent-active active' : ''; ?>">Your Voice</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                                <li><a href="voice-people-form.php" class="<?php echo ($current_page == 'voice-people-form.php') ? 'active' : ''; ?>">Connect with Leader</a></li>
                                <li><a href="join-movement.php" class="<?php echo ($current_page == 'join-movement.php') ? 'active' : ''; ?>">Join the Movement</a></li>
                                <li><a href="volunteer-development.php" class="<?php echo ($current_page == 'volunteer-development.php') ? 'active' : ''; ?>">Skill Development</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="header-push-button d-none d-sm-block">
                    <a href="#vision-modal" data-bs-toggle="modal" class="btn btn-small btn-rounded with-rounded bg-gradient-saffron text-white border-0 btn-box-shadow fw-700 ls-0px">Join the Vision<span class="bg-white text-saffron"><i class="feather icon-feather-arrow-right"></i></span></a>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
