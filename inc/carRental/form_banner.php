
    <style>
      

        #banner {
            position: relative;
            /* min-height: 100vh; */
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.8) 0%, rgba(118, 75, 162, 0.8) 100%),
                        url('./images/car/2148130153.jpg') center/cover;
            overflow: hidden;
        }
/* 
        #banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') center/cover;
            animation: float 6s ease-in-out infinite;
        } */

        /* @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        } */

        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            position: relative;
            z-index: 2;
        } */

        .hero-content {
            text-align: center;
            margin-bottom: 3rem;
            animation: slideInDown 1s ease-out;
             width:100%;
            margin-inline:auto;
            margin-top:40px;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content h1 {
            
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
           
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content .highlight {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-content .contact {
            display: inline-flex;
            align-items: center;
            text-align: center;
            gap: 0.5rem;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            border-radius: 50px;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 600;
           
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .hero-content .contact:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.2);
        }

        .search-form {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            animation: slideInUp 1s ease-out 0.3s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-title {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 4rem;
        }

        .form-title i {
            color: #667eea;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .input-group {
            position: relative;
            margin-bottom:20px;
        }

        .input-group.half {
            grid-column: span 1;
        }

        .input-group.full {
            grid-column: 1 / -1;
        }

        .date-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .input-field {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .input-field:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-1px);
        }

        .input-label {
            position: absolute;
            top: -22px;
            left: 12px;
            background: white;
            padding: 0 8px;
            font-size: 16px;
            font-weight: 600;
            color: #667eea;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            font-size: 1.1rem;
        }

        .input-field::placeholder {
            font-size: 16px;
            color: #888;
        }

        .contact-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .search-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1rem 3rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
            margin-left: auto;
            display: block;
            width: fit-content;
            text-align: center;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
        }

        .search-btn:active {
            transform: translateY(0);
        }

        /* Floating particles animation */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: floatUp 8s infinite linear;
        }

        .particle:nth-child(1) { left: 10%; width: 20px; height: 20px; animation-delay: 0s; }
        .particle:nth-child(2) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; }
        .particle:nth-child(3) { left: 80%; width: 25px; height: 25px; animation-delay: 4s; }
        .particle:nth-child(4) { left: 90%; width: 18px; height: 18px; animation-delay: 6s; }

        @keyframes floatUp {
            0% {
                bottom: -50px;
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                bottom: 100vh;
                opacity: 0;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
        

            .search-form {
                padding: 1.5rem;
                margin-top: 2rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .date-group {
                grid-template-columns: 1fr;
            }

            .contact-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .hero-content .contact {
                font-size: 2rem;
                padding: 0.8rem 1.5rem;
            }

            .search-btn {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 3rem;
                line-height: 1.2;
            }

            .search-form {
                border-radius: 16px;
                padding: 1rem;
            }

            .input-field {
                padding: 0.8rem 0.8rem 0.8rem 2.5rem;
            }
        }

        /* Advanced animations */
        .search-form {
            animation: fadeInScale 0.8s ease-out 0.5s both;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(30px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .input-group {
            animation: slideInStagger 0.6s ease-out both;
        }

        .input-group:nth-child(1) { animation-delay: 0.7s; }
        .input-group:nth-child(2) { animation-delay: 0.8s; }
        .input-group:nth-child(3) { animation-delay: 0.9s; }
        .input-group:nth-child(4) { animation-delay: 1s; }

        @keyframes slideInStagger {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

    <div id="banner">
        <!-- Floating particles -->
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
 
        <div class="container">
            <div class="hero-content">
                <h1> 
                   Unlock Freedom <span class="highlight">Beyond</span> the Map with Every Drive
                </h1>
                <a href="tel:(888) 257-3866" class="contact">
                    <i class="fas fa-phone-alt"></i>
                    Call us (888) 257-3866
                </a>
            </div>

            <form class="search-form">
                <div class="form-title">
                    <i class="fas fa-plane"></i>
                    Car Search
                </div>

                <div class="form-grid">
                    <div class="input-group">
                        <label class="input-label">From</label>
                        <i class="fas fa-plane-departure input-icon"></i>
                        <input type="text" class="input-field" placeholder="Destination" />
                    </div>

                    <div class="input-group">
                        <label class="input-label">To</label>
                        <i class="fas fa-plane-arrival input-icon"></i>
                        <input type="text" class="input-field" placeholder="Destination" />
                    </div>

                    <div class="input-group">
                        <label class="input-label">Travel Dates</label>
                        <div class="date-group">
                            <div style="position: relative;">
                                <i class="fas fa-calendar-alt input-icon"></i>
                                <input type="date" class="input-field" placeholder="Departure" style="padding-left: 3rem;" />
                            </div>
                            <div style="position: relative;">
                                <i class="fas fa-calendar-check input-icon"></i>
                                <input type="date" class="input-field" placeholder="Return" style="padding-left: 3rem;" />
                            </div>
                        </div>
                    </div>
<br/>
                    <div class="input-group">
                        <label class="input-label">Travellers</label>
                        <i class="fas fa-users input-icon"></i>
                        <input type="text" class="input-field" placeholder="1 Adult" />
                    </div>
                </div>

                <div class="contact-row">
                    <div class="input-group">
                        <label class="input-label">Contact Number</label>
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" class="input-field" placeholder="Your Contact Number" />
                    </div>

                    <div class="input-group">
                        <label class="input-label">Email Address</label>
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="input-field" placeholder="Your Email Address" />
                    </div>
                </div>

                <span type="s" class="search-btn">
                    <i class="fas fa-search"></i>
                    Search Cars
                </span>
            </form>
        </div>
    </div>

    <script>
        // Add interactive focus effects
        document.querySelectorAll('.input-field').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
                this.parentElement.style.zIndex = '10';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
                this.parentElement.style.zIndex = '1';
            });
        });




    </script>
