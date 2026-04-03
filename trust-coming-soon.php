<?php include 'parts/shared/html-header.php'; ?>

<style>
    :root {
        --trust-blue: #1b365d;
        --trust-gold: #c5a059;
        --logo-yellow: #fdd017;
        --logo-green: #4db848;
        --logo-light-blue: #0077c0;
    }

    body {
        background: linear-gradient(-45deg, var(--logo-yellow), var(--logo-green), var(--logo-light-blue), var(--trust-blue));
        background-size: 400% 400%;
        animation: logoGradient 15s ease infinite;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    @keyframes logoGradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .coming-soon-container {
        max-width: 800px;
        width: 90%;
        padding: 60px 40px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 30px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 20px;
        animation: fadeInUp 1s ease-out;
    }

    .trust-logo {
        max-width: 240px;
        margin-bottom: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .trust-logo:hover {
        transform: scale(1.03);
    }

    .coming-soon-tag {
        display: inline-block;
        padding: 6px 24px;
        background: var(--trust-blue);
        color: #fff;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(27, 54, 93, 0.2);
    }

    h1 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 800;
        color: var(--trust-blue);
        font-size: clamp(2rem, 5vw, 3rem);
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .description {
        font-size: 17px;
        line-height: 1.7;
        color: #2d3748;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .divider {
        width: 60px;
        height: 4px;
        background: var(--logo-yellow);
        margin: 0 auto 40px;
        border-radius: 2px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .social-links a {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: white;
        color: var(--trust-blue);
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        font-size: 18px;
    }

    .social-links a:hover {
        background: var(--trust-blue);
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }

    .back-home {
        margin-top: 50px;
        display: inline-block;
        color: var(--trust-blue);
        font-weight: 700;
        text-decoration: none;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        white-space: nowrap;
        transition: opacity 0.3s ease;
    }

    .back-home:hover {
        text-decoration: underline;
        opacity: 0.8;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 600px) {
        .coming-soon-container {
            padding: 40px 20px;
        }
        h1 {
            font-size: 24px;
        }
        .description {
            font-size: 15px;
        }
    }
</style>

<div class="coming-soon-container">
    <img src="images/new/og/trust-logo.jpg" alt="BRCT Logo" class="trust-logo">
    
    <div class="coming-soon-tag">Coming Soon</div>
    
    <h1>The Bhaskar Rao <br><span style="color: var(--logo-light-blue)">Charitable Trust</span></h1>
    
    <div class="divider"></div>
    
    <p class="description">
        The Bhaskar Rao Charitable Trust was founded with a singular vision: to create a safer and more prosperous environment for the marginalized sections of society. Our work spans across rural development, providing scholarships to bright students, and organizing health camps for those in need.
    </p>

    <div class="social-links">
        <a href="https://www.facebook.com/IPSBhaskarRao/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://x.com/Nimmabhaskar22" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/bhaskarrao/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/bhaskar-rao-ips/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>

    <a href="https://pitchfact.co/sites/bhaskar-rao/v7" class="back-home"><i class="feather icon-feather-arrow-left me-1"></i> Back to Main Site</a>
</div>

<?php include 'parts/shared/html-footer.php'; ?>
