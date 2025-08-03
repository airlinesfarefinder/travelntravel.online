<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #deal_container {
        max-width: 1200px;
        margin: 40px auto 0;
        background: white;
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
    }

    #deal_container .header {
        text-align: center;
        padding: 30px 30px 20px;
        background: #0072c6;
        color: white;
        position: relative;
        overflow: hidden;
    }

    #deal_container .header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
      
        opacity: 0.3;
        animation: wave 6s ease-in-out infinite;
    }

    @keyframes wave {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(-20px); }
    }

    #deal_container .header h1 {
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    #deal_container .header-line {
        width: 60px;
        height: 2px;
        background: rgba(255, 255, 255, 0.7);
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    #deal_container .content {
        padding: 30px;
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }

    #deal_container .sidebar {
        flex: 0 0 220px;
        position: sticky;
        top: 30px;
    }

    #deal_container .sidebar h2 {
        font-size: 2.6rem;
        color: #2c3e50;
        margin-bottom: 15px;
        font-weight: 400;
    }

    #deal_container .sidebar p {
        color: #5a6c7d;
        line-height: 1.6;
        font-size: 1.95rem;
    }

    #deal_container .carousel-container {
        flex: 1;
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #deal_container .carousel {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform;
    }

    #deal_container .slide {
        min-width: 100%;
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/9;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #deal_container .slide img {
        width: 85%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
        display: block;
        margin: 0 auto;
            border-radius: 20px
    }

    #deal_container .slide:hover img {
        transform: scale(1.05);
    }

  

    #deal_container .slide:hover .slide-overlay {
        transform: translateY(0);
        opacity: 1;
    }

    #deal_container .slide-title {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 6px;
        color:#ffffff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    #deal_container .slide-description {
        font-size: 14px;
         color:#ffffff;
        opacity: 0.9;
        line-height: 1.3;
    }

    #deal_container .nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.95);
        border: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: #2c3e50;
        transition: all 0.3s ease;
        z-index: 10;
        backdrop-filter: blur(10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    #deal_container .nav-button:hover {
        background: white;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    #deal_container .nav-prev { left: 15px; }
    #deal_container .nav-next { right: 15px; }

    #deal_container .dots-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 0px;
        padding: 0 20px;
        margin-bottom: 20px;
    }

    #deal_container .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #cbd5e0;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    #deal_container .dot.active {
        background: #667eea;
        transform: scale(1.2);
    }

    #deal_container .dot::after {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;
        border-radius: 50%;
        background: rgba(102, 126, 234, 0.2);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #deal_container .dot.active::after {
        opacity: 1;
    }

#deal_container .slide-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
      background: #0072c6;/* Solid semi-transparent background */
    padding: 20px;
    color: white;
    opacity: 1;                     /* Always visible */
    transform: translateY(0);       /* No animation */
}


    @media (max-width: 768px) {
        #deal_container .content {
            flex-direction: column;
            padding: 25px 20px;
            gap: 25px;
        }

        #deal_container .sidebar,
        #deal_container .sidebar h2,
        #deal_container .sidebar p {
            text-align: center;
        }

        #deal_container .slide img {
            width: 100%;
        }

        #deal_container .slide {
            aspect-ratio: 4/3;
        }

#deal_container .nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.95);
        border: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: #2c3e50;
        transition: all 0.3s ease;
        z-index: 10;
        backdrop-filter: blur(10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }


        #deal_container .nav-prev { left: 0px; }
    #deal_container .nav-next { right: 0px; }
    }
</style>

<div id="deal_container">
    <div class="header">
        <h1>Unforgettable USA Flight Experiences</h1>
        <div class="header-line"></div>
    </div>

    <div class="content">
        <div class="sidebar">
            <h2>Our Destinations</h2>
            <p>The perfect blend of celebrated destinations and regions less travelled.</p>
        </div>

        <div class="carousel-container">
            <button class="nav-button nav-prev" onclick="prevSlide()">‹</button>

            <div class="carousel" id="carousel">
                <div class="slide">
                    <img src="./images/flight/mid1.jpg" alt="Flight to Alaska">
                    <div class="slide-overlay">
                        <div class="slide-title">Fly to Alaska</div>
                        <div class="slide-description">Explore breathtaking glaciers and rugged wilderness with flights to America's last frontier.</div>
                    </div>
                </div>
                <div class="slide">
                    <img src="./images/flight/a1.jpg" alt="East Coast USA">
                    <div class="slide-overlay">
                        <div class="slide-title">East Coast Highlights</div>
                        <div class="slide-description">Fly into major hubs like NYC, Boston, or D.C. and experience American history and modern culture.</div>
                    </div>
                </div>
                <div class="slide">
                    <img src="./images/flight/mountain-6815304_640.jpg" alt="West Coast USA">
                    <div class="slide-overlay">
                        <div class="slide-title">West Coast Adventures</div>
                        <div class="slide-description">Book flights to Los Angeles, San Francisco, or Seattle and explore iconic landmarks and coastlines.</div>
                    </div>
                </div>
                <div class="slide">
                    <img src="./images/flight/27421.jpg" alt="Southern USA">
                    <div class="slide-overlay">
                        <div class="slide-title">Discover the South</div>
                        <div class="slide-description">Fly to Texas, Florida, or Georgia and enjoy warm weather, culture, and hospitality.</div>
                    </div>
                </div>
            </div>

            <button class="nav-button nav-next" onclick="nextSlide()">›</button>
        </div>
    </div>

    <div class="dots-container" id="dotsContainer">
        <div class="dot active" onclick="goToSlide(0)"></div>
        <div class="dot" onclick="goToSlide(1)"></div>
        <div class="dot" onclick="goToSlide(2)"></div>
        <div class="dot" onclick="goToSlide(3)"></div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const carousel = document.getElementById('carousel');

    function updateCarousel() {
        const offset = -currentSlide * 100;
        carousel.style.transform = `translateX(${offset}%)`;
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateCarousel();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateCarousel();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateCarousel();
    }
</script>
