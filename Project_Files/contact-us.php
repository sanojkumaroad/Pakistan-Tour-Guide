<!DOCTYPE html>
<html>

<head>
    <title>PAKISTAN TOUR & TRAVEL GUIDE</title>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- myStyleSheet -->
    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav id="mainNavbar" class="container-fluid navbar navbar-expand-md navbar-dark py-0 fixed-top">
        <a class="navbar-brand" href="index.php">PAK TOURS & GUIDE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar"
            aria-controls="navbarNavDropdown" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navBar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropDownMenu" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Touriest Places</a>
                    <div class="dropdown-menu" aria-labelledby="dropDownMenu">
                        <a class="dropdown-item" href="places.php?id=ak">Azad Kashmir</a>
                        <a class="dropdown-item" href="places.php?id=bl">Balochistan</a>
                        <a class="dropdown-item" href="gb">Gilgit Baltistan</a>
                        <a class="dropdown-item" href="places.php?id=isl">Islamabad</a>
                        <a class="dropdown-item" href="places.php?id=kp">Khyber Pakhtunkhwa</a>
                        <a class="dropdown-item" href="places.php?id=pj">Punjab</a>
                        <a class="dropdown-item" href="places.php?id=sindh">Sindh</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- CONTACT US FORM -->
    <div class="text-white px-5 mt-5 pt-3">
        <h1>CONTACT</h1>
        <p class="pl-5">HOME/ Contact</p>
    </div>

    <div id="card2" class="container-fluid py-5">
        <div class="container">
            <p class="py-3"> Kindly Let us know what you think of our Website. We would be more than happy to hear from you.
                <br>[Please note that we built this website to provide general Information. We are not tour operators and we don’t provide tour guides.]
            </p>
            <form action="assets/mail.php" method="post">
                    <input name="name" type="text" class="form-control my-3" placeholder="Your Name" required>
                    <input name="email" type="email" class="form-control my-3" placeholder="Your Email" required>
                    <input name="subject" type="text" class="form-control my-3" placeholder="Subject">
                    <textarea name="message" class="form-control my-3" rows="6" placeholder="Message" required></textarea>
                    <button type="submit" class="form-control submit my-3 btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <!-- IMAGE GALLERY -->
    <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md mx-5">
                    <h4 class="text-white">Photo Gallery</h4>
                    <div class="row">
                        <div class="col-lg px-auto"><img src="assets/images/1.jpg" alt="pic1" class="img-thumbnail px-0"></div>
                        <div class="col-lg px-auto"><img src="assets/images/2.jpg" alt="pic2" class="img-thumbnail px-0"></div>
                        <div class="col-lg px-auto"><img src="assets/images/3.jpg" alt="pic3" class="img-thumbnail px-0"></div>
                        <div class="col-lg px-auto"><img src="assets/images/4.jpg" alt="pic4" class="img-thumbnail px-0"></div>
                    </div>
                </div>
                <div class="col-md">
                    <h4 class="text-white pt-5">Quick Contact</h4>
                    <p class="text-white">Mobile: <b>+92 3123476452 |</b> Email: <b>sanojkumaroad@gmail.com</b></p>
                    <h3 class="text-white">Connect With Us</h3>
                    <p class="py-1">
                        <a href="https://www.facebook.com/smsTourGuide/" target="_blank"><img src="assets/images/facebook.png" alt="fb"></a>
                        <b> | </b>
                        <a href="https://www.instagram.com/smsTourGuide/" target="_blank"><img src="assets/images/instagram.png" alt="insta"></a>
                        <b> | </b>
                        <a href="" target="https://www.linkedin.com/smsTourGuide/"><img src="assets/images/linkedin.png" alt="linkedin"></a>
                        <b> | </b>
                        <a href="https://www.plus.google.com/smsTourGuide/" target="_blank"><img src="assets/images/google-plus.png" alt="google+"></a>
                    </p>
                </div>
            </div>
    </div>

    
    <!-- CDN LINKS -->
    <!-- jquery -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- boostrap.js -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- NAVBAR TRANSITION EFFECT SCRIPTS -->
    <script src="assets/script.js"></script>

</body>

</html>