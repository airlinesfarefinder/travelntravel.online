<style>
    #hero {
        margin: 70px 0px;
        position: relative;
        display: block;
    }

    .hero_container {
        position: relative;
        display: block;
        background: url('./images/flight/banner20255.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        min-height: 300px;
        border-radius: 15px;
        max-width: 1100px;
        margin-inline: auto;
    }

    .hero_overlay {
        position: absolute;
        top: 50%;
        left: 160px;
        transform: translateY(-50%);
        color: #ffffff;
        font-weight: bold;
        padding: 14px 31px;
        z-index: 1;
        text-align: left;
    }

    .day {
        font-size: 40px;
        font-weight: bold;
        color: white;
        margin: 0;
    }

    .fly {
        font-size: 30px;
        font-weight: bold;
        color: white;
        margin: 5px 0 15px;
    }

    .view {
        padding: 9px 20px;
        background: linear-gradient(135deg, #0072c6 0%, #00b9da 100%);
        cursor: pointer;
        text-align: center;
        font-size: 18px;
        border-radius: 8px;
        color: white;
        font-weight: bolder;
        display: inline-block;
    }

    .hero_overlay a {
        text-decoration: none;
    }

    @media (max-width: 767px) {


  .hero_container {
        position: relative;
        display: block;
        background: url('./images/flight/smart-banner 1.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        min-height: 300px;
        border-radius: 15px;
        max-width: 1100px;
        margin-inline: auto;
    }



        .hero_overlay {
            top: auto;
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
            padding: 12px 20px;
            text-align: center;
        }

        .day {
            width:320px;
            font-size: 30px;
            font-weight: 700;
            COLOR:#000000;
        }

        .fly {
            font-size: 20px;
               COLOR:#000000;
        }

        .view {
            font-size: 16px;
            padding: 8px 16px;
        }
    }
</style>

<div id="hero">
    <div class="container-fluid">
        <div class="hero_container">
            <div class="hero_overlay">
                <p class="day">Cheapest days</p>
                <p class="fly">to fly in 2025</p>
                <a href="tel:(888) 381-6477">
                    <p class="view">Call Now</p>
                </a>
            </div>
        </div>
    </div>
</div>
