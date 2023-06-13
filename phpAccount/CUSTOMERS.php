<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <LINK rel="shortcut icon" type="x-icon" href="images/leaf-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Productivity and Innovations</title>
    <!--Link to CSS-->
    <link rel="stylesheet" href="agriculture.css">
    <!--Box Icons-->
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!--Link Swiper's CSS-->
     <link rel="stylesheet" 
     href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <!--Navbar-->
        <header>
            <a href="AGRIPRENEUR.php" class="logo"><i class='bx bxs-leaf'></i>AgriTech</a>
            <!--Menu Icon-->
            <div class="bx bx-menu" id="menu-icon"></div>
            <!--Nav List-->
            <ul class="navbar">
                <li><a href="AGRIPRENEUR.php" class="home-active">Home</a></li>
                <li><a href="CATEGORIES.php">Categories</a></li>
                <li><a href="ABOUT.php">About</a></li>
                <li><a href="CUSTOMERS.php">Customers</a></li>
            </ul>
            <!--Profile-->
            <div class="profile">
                <a href="index.php"><img src="images/loginicon.png"></a>
                <a href="index.php"><span>Login</span></a>
                <a href="index.php"><i class='bx bx-caret-down'></i></a>
            </div>
        </header>
        <!--Customers-->
        <section class="customers" id="customers">
            <h2><BR>Why Customer's Love Us?</h2>
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