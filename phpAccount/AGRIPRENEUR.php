<?php
include('partials/headeragri.php')
?>
    <!--Navbar-->
        <header>
            <a href="AGRIPRENEUR.php" class="logo"><i class='bx bxs-leaf'></i>AgriTech</a>
            <!--Menu Icon-->
            <div class="bx bx-menu" id="menu-icon"></div>
            <!--Nav List-->
            <ul class="navbar">
                <li><a href="AGRIPRENEUR.php" class="home-active">Home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#customers">Customers</a></li>
            </ul>
            <!--Profile-->
            <div class="profile">
                <a href="index.php"><img src="images/loginicon.png"></a>
                <a href="index.php"><span>Login</span></a>
                <a href="index.php"><i class='bx bx-caret-down'></i></a>
            </div>
        </header>
        <!--Home-->
        <section class="home swiper" id="home">
            <div class="swiper-wrapper">
                <!--Slide 1-->
                <div class="swiper-slide container">
                    <div class="home-text">
                        <span>We are Dedicated</span>
                        <h1>Choose to improve <br> our 4 Sub-sectors <br> of Agriculture</h1>
                    </div>
                        <img src="images/Frontpage.png">

                </div>
                <!--Slide 2-->
                <div class="swiper-slide container">
                    <div class="home-text">
                        <span>We are Dedicated</span>
                        <h1>Choose to improve <br> our Farming <br> Industry</h1>
                        <a href="FARMING.php" class="btn">Explore Now<i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                    <img src="images/1farming.png">

                </div>
                <!--Slide 3-->
                <div class="swiper-slide container">
                    <div class="home-text">
                        <span>We are Dedicated</span>
                        <h1>Choose to improve <br> our Fishing <br> Industry</h1>
                        <a href="FISHERY.php" class="btn">Explore Now<i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                    <img src="images/2fishery.png">

                </div>
                <!--Slide 4-->
                <div class="swiper-slide container">
                    <div class="home-text">
                        <span>We are Dedicated</span>
                        <h1>Choose to improve <br> our Livestock <br> Industry</h1>
                        <a href="LIVESTOCK.php" class="btn">Explore Now<i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                    <img src="images/3livestock.png">

                </div>
                <!--Slide 5-->
                <div class="swiper-slide container">
                    <div class="home-text">
                        <span>We are Dedicated</span>
                        <h1>Choose to improve <br> our Forestry <br> Industry</h1>
                        <a href="FORESTRY.php" class="btn">Explore Now<i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                    <img src="images/4forestry.png" >

                </div>
                
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>

        </section>
        <!--Categories-->
        <section class="categories" id="categories">
            <div class="heading">
                <h1>Browse Our Hottest Products<br><span>In each Categories</span></h1>
                <a href="ALL.php" class="btn">See All<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <!--Container-->
            <div class="categories-container">
                <!--Box 1-->
                <div class="box box1">
                    <a href="TOOLS.php"><img src="images/tools.png" alt=""></a>
                    <h2>Tools</h2>
                    <span>6 Items</span>
                    <i class='bx bx-right-arrow-alt'></i>      
                </div>
                <!--Box 2-->
                <div class="box box2">
                    <a href="EQUIPMENTS.php"><img src="images/equipments.png" alt=""></a>
                    <h2>Equipments</h2>
                    <span>4 Items</span>
                    <i class='bx bx-right-arrow-alt'></i>      
                </div>
                <!--Box 3-->
                <div class="box box3">
                    <a href="FEEDS.php"><img src="images/feeds.png" alt=""></a>
                    <h2>Feeds</h2>
                    <span>4 Items</span>
                    <i class='bx bx-right-arrow-alt'></i>      
                </div>
                <!--Box 4-->
                <div class="box box4">
                    <a href="SEEDLINGS.php"><img src="images/seedlings.png" alt=""></a>
                    <h2>Seedlings</h2>
                    <span>6 Types</span>
                    <i class='bx bx-right-arrow-alt'></i>      
                </div>
            </div>
        </section>
        <!--About-->
        <section class="about" id="about">
            <img src="images/agriculture.png" alt="">
            <div class="about-text">
            <span>About Us</span>
            <p>According to Chapter 8 of the Philippine Development Plan (PDP) 2017-2022, Expanding Economic Opportunities in Agriculture, Forestry, and Fisheries, the agriculture, forestry, and fisheries (AFF) sector is critical in generating employment for roughly one-third of the country's labor force, thereby reducing poverty and inequality for three-fourths of the poor who live in rural areas. AFF is also critical in terms of supplying raw materials to the manufacturing and service sectors, resulting in forward links in terms of higher-paying and more stable job opportunities. In order to promote more inclusive development, efforts to revitalize the AFF and harness its growth potential must be increased. Given the sector's ties to agriculture, interventions and investments will be directed toward expanding existing opportunities and developing new ones, resulting in increased participation of small farmers and fisherfolk.</p>
            <a href="https://www.da.gov.ph/?fbclid=IwAR3zFbTz8Qf5qImtFVoRps3CnjUQph5FoyZv33twH2F8bjSSKnCH1as75hY" class="btn">Learn More<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </section>
        <!--Customers-->
        <section class="customers" id="customers">
            <br>
            <h2>Why Customer's Love Us?</h2>
            <!--Customer Content-->
            <div class="customers-container">
                <!--Review 1-->
                <div class="box">
                    <i class='bx bxs-quote-alt-left' ></i>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Thank you for a great service!. In this shop the products are way cheaper than others. 
                        The quality also were awesome. I swear, I will purchase again.</p>
                    <div class="review-profile">
                        <img src="images/customer1.jpg" alt="">
                        <h3>Jason Latagan</h3>
                    </div>
                </div>
                <!--Review 2-->
                <div class="box">
                    <i class='bx bxs-quote-alt-left' ></i>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>This shop makes me awe from the quality of the equipment to their service. 
                    The quality of the farming equipment that I have purchased was quite good. 
                    Also in this shop, the products are cheaper than other stores yet the products 
                    are all in good condition. They are all functioning well too. Thank you so much 
                    for this great equipment.</p>
                    <div class="review-profile">
                        <img src="images/customer2.jpg" alt="">
                        <h3>Mae Joy San Miguel</h3>
                    </div>
                </div>
                <!--Review 3-->
                <div class="box">
                    <i class='bx bxs-quote-alt-left' ></i>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>I recommended this shop! The products are functioning well and their service is great. 
                    They responded to my inquiry as fast as they could and they are really nice.</p>
                    <div class="review-profile">
                        <img src="images/customer3.jpg" alt="">
                        <h3>Rizza Delin</h3>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <section class="footer" id="footer">
            <div class="footer-box">
                <a href="AGRIPRENEUR.php" class="logo"><i class='bx bxs-leaf'></i>AgriTech</a>
                <p>Purok Central <br>Barangay Mayao Parada <br>Lucena City <br>Quezon Province 4301</p>
                <div class="social">
                    <a href="https://web.facebook.com/jooooomontalbo"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/mntlbghsln/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.youtube.com/channel/UCDDTcHCZ2tuCYGmJ-RiDmiw"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h2>Categories</h2>
                <a href="TOOLS.php">Tools</a>
                <a href="EQUIPMENTS.php">Equipments</a>
                <a href="FEEDS.php">Feeds</a>
                <a href="SEEDLINGS.php">Seedlings</a>
            </div>
            <div class="footer-box">
                <h2>Useful Links</h2>
                <a href="FARMING.php">Farming</a>
                <a href="FISHERY.php">Fishery</a>
                <a href="LIVESTOCK.php">Livestocks</a>
                <a href="FORESTRY.php">Forestry</a>
            </div>
            <div class="footer-box">
                <h2>Account</h2>
                <a href="dashboard.php">Logout</a>
            </div>
        </section>
        <!--Swiper Javascript-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <!--Link To JavaScript-->
        <script src="main.js"></script>
</body>
</html>