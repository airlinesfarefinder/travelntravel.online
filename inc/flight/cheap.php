<style>
    /* .flight-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        padding: 20px;
    } */

        .over{
            /* position:relative; */
        }

        .title1{
            text-align: center;
            margin-top:30px;
            margin-bottom: 25px;
        }
    .flight-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        height: 200px;
        cursor: pointer;
    }

    .flight-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Middle overlay gradient */
    .flight-card .gradient-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.0) 40%, rgba(0, 0, 0, 0.7) 100%);
        z-index: 1;
    }

    /* Text layer */
    .flight-card .text-overlay {
        position: absolute;
        bottom: 0;
        padding: 12px 16px;
        color: white;
        z-index: 2;
        width: 100%;
        box-sizing: border-box;
    }

    .text-overlay .city {
        font-weight: 800;
        font-size: 1.3rem;
        margin-bottom: 4px;
        color:#fff;
    }

    .text-overlay .price {
        font-size: 1.1rem;
        opacity: 0.9;
         color:#ffffff;
    }

    /* Mobile optimization */
    @media (max-width: 480px) {
        .flight-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="over">
<div class="container">

<div class="row">
    <div class="col-sm-12">
        <div class="title1">
            <h2>Cheap flights to New York</h2>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/3214.jpg" alt="Detroit">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Detroit, United States</div>
                    <div class="price">New York, United States from $404</div>
                </div>
            </div>
            <br/>
        </div>

        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/11395.jpg" alt="Miami">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Miami, United States</div>
                    <div class="price">New York, United States from $424</div>
                </div>
            </div> <br/>
        </div>

        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/1225.jpg" alt="Charlotte">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Charlotte, United States</div>
                    <div class="price">New York, United States from $394</div>
                </div>
            </div> <br/>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/modern-business-area-night-bangkok-thailand.jpg" alt="Atlanta">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Atlanta, United States</div>
                    <div class="price">New York, United States from $414</div>
                </div>
            </div>  <br/>
        </div>
        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/modern-business-area-night-bangkok-thailand (1).jpg" alt="Orlando">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Orlando, United States</div>
                    <div class="price">New York, United States from $395</div>
                </div>
            </div>  <br/>
        </div>

        <div class="col-sm-4">
            <div class="flight-card">
                <img src="./images/flight/skyline-downtown-new-york-new-york-usa.jpg" alt="Fort Lauderdale">
                <div class="gradient-overlay"></div>
                <div class="text-overlay">
                    <div class="city">Fort Lauderdale, United States</div>
                    <div class="price">New York, United States from $350</div>
                </div>
            </div>
            <br/>
        </div>
    </div>

</div>







</div>