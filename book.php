<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<!--header section start-->
<section class = "header">
    <a href="index.php" class="logo">Travel</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--header section end-->

<div class="heading" style="background:url(images/book.jpg)">
    <h1>Book Now</h1>
</div>

<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_forms.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter Your Email" name="email">
            </div>

            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter Your Number" name="phone">
            </div>

            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter Your Address" name="address">
            </div>

            <div class="inputBox">
                <span>Where To:</span>
                <input type="text" placeholder="Place You Want To Visit" name="location">
            </div>

            <div class="inputBox">
                <span>Participants:</span>
                <input type="number" placeholder="Number of Participants" name="guests">
            </div>
            <div class="inputBox">
                <span>Time of Arrival:</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>Time of Leaving:</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!--booking section ends-->






    
<!--footer section starts-->
<section class="footer">
    <div class="box-container">

        <div class="box">
        <h3>Quick Links</h3>
        <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
        <h3>Extra Links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> Ask Question</a>
        <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
        </div>

        <div class="box">
        <h3>Contact</h3>
        <a href="#"> <i class="fas fa-phone"></i> +603-9212 4900</a>
        <a href="#"> <i class="fas fa-phone"></i> +606-9212 4901</a>
        <a href="#"> <i class="fas fa-envelope"></i> raydan@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Bangsar, Selangor</a>
        </div>

        <div class="box">
        <h3>Follow Us</h3>
        <a href="#"> <i class="fab fa-facebook"></i> Facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span>Mr. Raydan </span>| All Right Reserved!</div>
</section>

<!--footer section end--> 

    <!--swiper js file link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="js/script.js"></script>

</body>
</html>