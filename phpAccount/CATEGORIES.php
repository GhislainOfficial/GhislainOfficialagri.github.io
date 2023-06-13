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
        <!--Categories-->
        <section class="categories" id="categories">
            <div class="heading">
                <h1><BR>Browse Our Hottest Products<br><span>In each Categories</span></h1>
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