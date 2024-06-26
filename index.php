<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto mobile accessries</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="Login/login.css"> -->
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="">
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Menu Icons -->
            <i class='bx bx-menu' id="menu-icon"></i>
            <!-- Logo -->
            <a href="#" class="logo">Skan<span>Accessries</span></a>
            <nav class="navbar active">
                <!-- Nav list -->
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="accessries.php">Accessries</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Help</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="login.php" id="login-button">Login</a></li>
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

    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listcart">
          
        </div>
        <div class="btnn">
            <button class="close">CLOSE</button>
            <button class="checkOut"><a href="checkout.php"> CHECK OUT </a></button>
        </div>
    </div>


    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>We Have Everything<br>Your <span>Vehicle </span>Need</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br> Optio voluptatibus sint error, libero fuga
                ullam <br> alias laudantium tempore sed ad illo.</p>
            <!-- home Btn -->
            <a href="#" class="btn">Discover Now</a>
        </div>
    </section>
    <!-- Car Section -->
    <section class="cars" id="cars">
        <div class="heading">
            <span>All Accessries</span>
            <h2>We have all types of accessries</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, alias.</p>
        </div>
        <!-- Bikes Container -->
        <div class="bikes-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="Photos/activa-05.png" alt="">
                <h2>Activa Accessries</h2>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="Photos/pngwing.com.png" alt="">
                <h2>Bike Accessries</h2>
            </div>
        </div>
    </section>

    <!-- parts section -->
    <section class="parts" id="parts">
        <div class="heading">
            <span>What We Offer</span>
            <h2>Our Accessries Are Always Excellent</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, doloremque.</p>
        </div>
        <!-- Parts Container -->
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
        
    </section>

    <!-- About -->
    <section class="about container" id="about">
        <div class="about img">
            <img src="Photos/hq720.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>Cheap Prices With<br>Quality Accessries</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, illo!</p>
            <!-- About Button -->
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <!-- Blog Container -->
    <section class="blog" id="blog">
        <div class="heading">
            <span>Blog & News</span>
            <h2>Our Blog Content</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, doloremque.</p>
        </div>
        <!-- Blog Container -->
        <div class="blog-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="Photos/image6.png" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get Accessries At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, corrupti!</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="Photos/image7.png" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get Accessries At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, corrupti!</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="Photos/image5.png" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get Accessries At Low Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, corrupti!</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>
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

            <div class="feedback">
            <input type="text" class="feedback" id="" placeholder="Type Your FeedBack..." >
            <div class="send">
            <i class='bx bx-send'></i>
        </div>
        </div>
        </div>
        
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; SkanAccessries All Right Reserved</p>
    </div>
    <!-- Link to js -->
    <script src="main.js"></script>
    <script src="atc.js"></script>
</body>

</html>