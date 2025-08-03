<style>
    .main-content {

        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
    }

    .footer {
        margin-top: 50px;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="40" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="40" cy="80" r="1.5" fill="rgba(255,255,255,0.05)"/></svg>');
        pointer-events: none;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px 20px;
        position: relative;
        z-index: 1;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-section {
        animation: fadeInUp 0.6s ease-out;
    }

    .footer-section:nth-child(1) {
        animation-delay: 0.1s;
    }

    .footer-section:nth-child(2) {
        animation-delay: 0.2s;
    }

    .footer-section:nth-child(3) {
        animation-delay: 0.3s;
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

    .brand-section {
        max-width: 280px;
    }

    .logo {
        width: 150px;
        height: auto;
        margin-bottom: 20px;
        filter: brightness(1.1);
    }

    .brand-description {
        color: #b8c5d6;
        font-size: 15px;
        line-height: 1.7;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .section-title {
        color: #ffffff;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
        text-align: center;
    }


    .footer-links {
        list-style: none;
        text-align: center;
        padding-left: 0px !important;
    }

    .footer-links li {
        margin-bottom: 12px;
        position: relative;
        transition: all 0.3s ease;

    }

    /* .footer-links li::before {
            content: '→';
            position: absolute;
            left: -20px;
            color: #ff6b6b;
            font-weight: bold;
            opacity: 0;
            transition: all 0.3s ease;
        } */

    .footer-links li:hover::before {
        opacity: 1;
        left: -15px;
    }

    .footer-links li:hover {
        transform: translateX(10px);
    }

    .footer-links a {
        color: #b8c5d6;
        text-decoration: none;
        font-size: 14px;
        text-transform: capitalize;
        transition: all 0.3s ease;
        display: block;
        padding: 5px 0;
    }

    .footer-links a:hover {
        color: #ffffff;
        text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
    }

    .payment-logos {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-top: 20px;
    }

    .payment-logo {
        width: 60px;
        height: 40px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .payment-logo:hover {
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding: 0px 0px;
        text-align: center;
        background: rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
    }

    .copyright {
        color: #b8c5d6;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    /* Mobile Responsive Design */
    @media (max-width: 768px) {
        .footer-container {
            padding: 20px 15px;
        }

        .footer-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .brand-section {
            max-width: 100%;
            text-align: center;
        }

        .section-title {
            font-size: 16px;
            text-align: center;
        }

        .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-links {
            text-align: center;
            padding-left: 0px !important;
        }

        .footer-links li {}

        .footer-links li::before {
            display: none;
        }

        .footer-links li:hover {
            transform: none;
        }

        .payment-logos {
            grid-template-columns: repeat(3, 1fr);
            justify-items: center;
        }

        .payment-logo {
            width: 70px;
            height: 45px;
        }

        .brand-description {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .footer-container {
            /* padding: 10px 10px ; */
        }

        .payment-logos {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .payment-logo {
            width: 80px;
            height: 50px;
        }

        .section-title {
            font-size: 15px;
        }

        .footer-links a {
            font-size: 13px;
        }


        .footer-links {
            text-align: center;
            padding-left: 0px !important;
        }

        .brand-description {
            font-size: 13px;
        }
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Loading animation */
    .footer-section {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>


<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Brand Section -->
            <div class="footer-section brand-section">
                <img src="assets/img/bold45.png" alt="Company Logo" class="logo">
                <p class="brand-description">
                 We bring you up-to-date travel offers from a wide range of agencies, so you can pick the option that fits your preferences perfectly.
                </p>

            </div>

            <!-- Quick Links Section -->
            <div class="footer-section">
                <h3 class="section-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                    <li><a href="baggage-policy.php">Baggage Policy</a></li>
                    <li><a href="cookie-policy.php">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Payment Methods Section -->
            <div class="footer-section">
                <h3 class="section-title">Payment & Security</h3>
                <div class="payment-logos">
                    <div class="payment-logo" style="background-image:url('assets/img/cards/amex.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/cards/discover.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/cards/master.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/cards/master_v1.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/cards/paypal.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/cards/visa.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/certification/cruiselines.png')"></div>
                    <div class="payment-logo" style="background-image:url('assets/img/certification/godaddy.png')"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-container">
            <p class="copyright">
                © 2025 travelntravel.online. All rights reserved.
            </p>
        </div>
    </div>
</footer>