<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="This is the description">
        <meta charset="UTF-8">
        <LINK rel="shortcut icon" type="x-icon" href="images/leaf-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Seedlings Store</title>
        <!--Link to CSS-->
        <link rel="stylesheet" href="SEEDLINGS.CSS"/>
        <!--Box Icons-->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--Link Swiper's CSS-->
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <script src="SEEDLINGS.JS" async></script>
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
        <section class="container content-section">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2 class="section-header">Seedlings</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Green Ash Tree Seedling</span>
                    <img class="shop-item-image" src="pictures/Green Ash Small Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱1059.60</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Silver Birch Tree Seedling</span>
                    <img class="shop-item-image" src="pictures/Silver Birch Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱1115.40</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Redwood Tree Seedling</span>
                    <img class="shop-item-image" src="pictures/Coast Redwood Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱850.25</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Valley Oak Tree Seedling</span>
                    <img class="shop-item-image" src="pictures/Valley Oak Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱1059.45</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">English Oak Tree Seedling</span>
                    <img class="shop-item-image" src="pictures/English Oak Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱1029.75</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Pacific Madrone Seedling</span>
                    <img class="shop-item-image" src="pictures/Pacific Madrone Tree Seedling.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱1059.60</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
        <section class="container content-section">
            <h2 class="section-header">YOUR CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">

            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
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