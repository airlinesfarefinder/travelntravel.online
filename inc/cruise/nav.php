<style>
    #nav {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        margin-top: 30px;
    }

    #nav .inner {
        background: #ffffff;
        /* background: linear-gradient(21deg, #515359, #454040); */
        border-radius: 0px 0px;
    }


    #nav .menu ul {
        position: relative;
        display: block;
        width: 100%;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #nav .menu ul li {
        position: relative;
        display: block;
        float: left;
        margin: 0px 10px;
        padding: 15px 0px;
        font-size: 14px;
        font-weight: 500;
        text-transform: capitalize;
        color: #fff;
     
    }

    #nav .menu ul li.withicon {
        padding-left: 30px;
        font-weight: 700;
        font-size: 15px;
    }

    #nav .menu ul li .icon {
        position: absolute;
        top: calc(50% - 12.5px);
        left: 0;
        display: block;
        width: 25px;
        height: 25px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        /* filter: invert(1); */
        cursor: pointer;
    }

    #nav .menu ul li.icononly {
        position: relative;
        display: block;

    }

    #nav .logo {
        position: relative;
        display: block;
        width: 100%;
        height: 55px;
        background-image: url("./assets/img/bold45.png");
        background-position: left;
        background-repeat: no-repeat;
        background-size: contain;
         margin-bottom:0px !important;
    }

    #nav .menu.right {
        float: right;
        margin-right: 10px;
    }


         @media (max-width: 480px) {
   #nav .logo {
    
        width: 160px;
        height: 55px;
      
    }

      }
</style>



<div id="nav">
    <div class="container-fluid">
        <div class="row">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3  col-xs-5">
                            <a href="index.php">
                                <div class="logo"></div>
                            </a>
                        </div>


                        <div class="col-sm-6">
                            <div id="nav_menu" class="menu content">
                                <ul class="clearfix">
                                    <li>
                                        <a href="index.php">
                                            Home
                                        </a>
                                    </li>



                                    <li>
                                        <a href="us-flights.php">
                                            Flight
                                        </a>
                                    </li>


                                    <li>
                                        <a href="cruise.php">
                                            Cruise
                                        </a>
                                    </li>

                                    <li>
                                        <a href="car-rental.php">
                                            Car Rental
                                        </a>
                                    </li>


                                    <li>
                                        <a href="about.php">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-sm-3 col-xs-7">
                            <div class="menu right">
                                <ul class="clearfix">
                                    <li class="withicon">


                                        <span class="icon"
                                            style="background-image:url('assets/img/24-hours.png'); width:20px;"></span>

                                        <a href="tel:(888) 257-3866"> (888) 257-3866</a>


                                    </li>
                                    <li style="color:black;" id="nav_toggle" class="icononly" onclick="toggle_nav()">
                                        <span class="ico" style="background-image:url('assets/img/menu.png');
                                         
                                             width: 20px;
    display: block;
    height: 20px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
                                         
                                         
                                         ">


                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>