<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About TravelExpert Pro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
            opacity: 0.2;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.95;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out 0.6s both;
            box-shadow: 0 4px 15px rgba(238, 90, 82, 0.4);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(238, 90, 82, 0.6);
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: #2c3e50;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        /* Company Info Grid */
        .company-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        .company-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .company-text h3 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .company-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .company-image:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
        }

        .company-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .company-image:hover img {
            transform: scale(1.05);
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .feature-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .team-member {
            text-align: center;
            position: relative;
        }

        .team-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .team-photo:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .team-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-member h4 {
            font-size: 1.3rem;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .team-member p {
            color: #666;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item h3 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Animations */
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

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .company-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 30px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .container {
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 80px 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .cta-button {
                padding: 12px 30px;
                font-size: 0.9rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-item h3 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>About TravelExpert Pro</h1>
            <p>Your trusted partner in crafting unforgettable journeys across the globe with premium service and unmatched expertise.</p>
            <a href="#learn-more" class="cta-button">Discover Our Story</a>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section" id="learn-more">
        <div class="container">
            <h2 class="section-title">Who We Are</h2>
            <div class="company-grid">
                <div class="company-text fade-in">
                    <h3>At TravelExpert Pro</h3>
                    <p>We specialize in delivering world-class travel solutions that transform your wanderlust into reality. Our commitment revolves around providing seamless, cost-effective, and luxury travel booking services. Our core mission is clear: To revolutionize your global exploration by delivering exceptional flight deals and personalized travel experiences.</p>
                    
                    <p>Understanding that travel planning can be overwhelming and exhausting, we've designed our services to streamline the entire process for you. From comprehensive customer assistance to effortless booking procedures, we ensure your journey begins smoothly from the very first click.</p>
                </div>
                <div class="company-image fade-in">
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Travel Planning Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features">
        <div class="container">
            <h2 class="section-title">What Sets Us Apart</h2>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">🛫</div>
                    <h4>Smart Booking Platform</h4>
                    <p>Our advanced platform enables instant fare comparisons, optimal route discovery, and secure bookings within minutes, ensuring you get the best deals available.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">💎</div>
                    <h4>Premium Quality Service</h4>
                    <p>We never compromise on service excellence or quality. Every booking comes with our guarantee of superior customer experience and attention to detail.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🌟</div>
                    <h4>24/7 Expert Support</h4>
                    <p>Our dedicated support specialists are available around the clock to assist with reservations, itinerary modifications, and any travel-related inquiries throughout your journey.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-member fade-in">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="CEO">
                    </div>
                    <h4>Michael Chen</h4>
                    <p>Chief Executive Officer</p>
                </div>
                <div class="team-member fade-in">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b75a3b0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="CTO">
                    </div>
                    <h4>Sarah Johnson</h4>
                    <p>Head of Operations</p>
                </div>
                <div class="team-member fade-in">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Lead Developer">
                    </div>
                    <h4>David Rodriguez</h4>
                    <p>Travel Experience Director</p>
                </div>
                <div class="team-member fade-in">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Marketing Director">
                    </div>
                    <h4>Emily Watson</h4>
                    <p>Customer Success Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats">
        <div class="container">
            <h2 class="section-title">Our Impact in Numbers</h2>
            <div class="stats-grid">
                <div class="stat-item fade-in">
                    <h3>50K+</h3>
                    <p>Happy Travelers</p>
                </div>
                <div class="stat-item fade-in">
                    <h3>150+</h3>
                    <p>Destinations Covered</p>
                </div>
                <div class="stat-item fade-in">
                    <h3>24/7</h3>
                    <p>Customer Support</p>
                </div>
                <div class="stat-item fade-in">
                    <h3>98%</h3>
                    <p>Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach((el) => {
            observer.observe(el);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive hover effects
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-10px) scale(1)';
            });
        });
    </script>
</body>
</html>