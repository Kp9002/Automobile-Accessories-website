<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="accessries.css">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Accessories Page</h1>
    <header>
        <div class="nav container">
            <!-- Menu Icons -->
            <i class='bx bx-menu' id="menu-icon"></i>
            <!-- Logo -->
            <a href="#" class="logo">Skan<span>Accessries</span></a>
            <nav class="navbar active">
                <!-- Nav list -->
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="#accessries">Accessries</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#help">Help</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="login.php">Login</a></li>
                <div id="marker"></div>
                </nav>
                <!-- Search Icon -->
                <i class='bx bx-search' id="search-icon"></i>
                <!-- Search box -->
                <div class="search-box container">
                    <input type="search" name="" id="" placeholder="Search here...">
                </div>
                <!-- Add To Cart -->
                <div class="icon-cart">
                    <i class='bx bx-cart' id="iconcart"></i>
                    <span class="cart">0</span>
                </div>
        </div>
        
    </header>

    <div class="side-menu">
        
    </div>

    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listcart">
          
        </div>
        <div class="btnn">
            <button class="close">CLOSE</button>
            <button class="checkOut">CHECK OUT</button>
        </div>
    </div>


    <main>
        <div class="parts-container container" id="accessries">
            <div class="box">
            <img src="Photos/image1.png" alt="">
            <h3>Auto Spare Part</h3>
            <div class="price">$120.99</div>
            <i class="bx bxs-star">(6 Reviews)</i>
            <a href="#" class="btn">Buy Now</a>
            <a class="details" href="#">
                View Details
                </a>
            <button class="addCart">
                Add To Cart
            </button>
        </div>
    </main>
    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo1">Skan<span>Accessries</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="#">Home</a>
                <a href="#">Cars</a>
                <a href="#">Parts</a>
                <a href="#">Sales</a>
            </div>
            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#">Privacy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <p>India</p>
                <p>United States</p>
                <p>Japan</p>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; SkanAccessries All Right Reserved</p>
    </div>
    <script src="atc.js"></script>
    <script src="main.js"></script>
</body>
</html>
