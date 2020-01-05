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
    <!-- <style>
        #content {
            min-height: 150px;
            background: white;
            color: green;
        }
    </style> -->
</head>

<body>
        <!-- NAV BAR -->
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
                        <a class="dropdown-item" href="places.php?id=gb">Gilgit Baltistan</a>
                        <a class="dropdown-item" href="places.php?id=isl">Islamabad</a>
                        <a class="dropdown-item" href="places.php?id=kp">Khyber Pakhtunkhwa</a>
                        <a class="dropdown-item" href="places.php?id=pj">Punjab</a>
                        <a class="dropdown-item" href="places.php?id=sindh">Sindh</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php/">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- PHP CODE -->

<?php
    include("connection.php");
    error_reporting(0);
    $query = "SELECT * FROM project";
    $data = mysqli_query($conn,$query);
    $row = mysqli_num_rows($data);
    $id = $_GET['at'];
    if($row != 0){
        $tid = 00;
        while($result = mysqli_fetch_assoc($data)){
            $tid = $result['id'];
            if($tid == $id){
                echo"<div id=\"content\" class=\"container-fluid mt-5\">
                ";
                ?>
<!-- HTML GOES HERE -->
                <?php
                echo"
                <div class=\"paragraphs mx-5 px-5\">
                    <div class=\"row\">
                        <div class=\"span mx-auto\">
                            <img class=\" mx-3 img-thumbnail mt-5\" style=\"float:right; max-width:800px;\" src=\"".$result['image']."\" alt=\"image.jpg\">
                            <div class=\"content-heading\">
                                    <h1 class=\"pt-5\">".$result['heading']."</h1>
                                    <h5 class=\"ml-3\">HOME/ ".$result['heading']."</h5>
                            </div>
                            <p style=\"font-size: 20px;\" class=\"mt-5 text-justify mx-3\">".$result['paragraph']."</p>
                        </div>
                    </div>
                </div>
                
                <div class=\"container py-5\">
                    <h5 class=\"my-2\">Related Places to Visit</h5>
                    <div class=\"row text-center\">
                    
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=11\"><img src=\"assets/images/kel-valley.jpg\" alt=\"kel valley\"><br>
						        <span class=\"caption\">Kel Valley</span></a><br>
				        </div>
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=21\"><img src=\"assets/images/Ziarat.jpg\" alt=\"Ziarat\"><br>
						        <span>Ziarat</span></a><br>
				        </div>
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=31\"><img src=\"assets/images/Fairy-Meadows.jpg\" alt=\"Fairy meadows\"><br>
						        <span>Fairy-Meadows</span></a><br>
					    </div>
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=41\"><img src=\"assets/images/makra_peak.jpg\" alt=\"makra peak\"><br>
						        <span>Makra Peak</span></a><br>
					    </div>
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=51\"><img src=\"assets/images/shalimar-gardens-lahore.jpg\" alt=\"shalimar gardens\"><br>
						        <span>Shalimar Gardens</span></a><br>
					    </div>
				        <div class=\"col-sm-4 col-md-4 col-lg-3 col-xl-2 my-2 px-auto\">
					        <a href=\"article.php?at=61\"><img src=\"assets/images/mazar-e-quaid.jpg\" alt=\"mazar-e-quaid\"><br>
						        <span>Mazar-e-Quaid</span></a><br>
					    </div>
			        </div>
                </div></div>";
                break;
            }
        }
        if($tid != $id){
            echo"
                <div class=\"container m-5\">
                    <h1 class=\"py-5 text-center\">Sorry, Page Not Found!</h2>
                </div>";
        }
    }

?>    

    <!-- CDN LINKS -->

    <!-- jquery -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- boostrap.js -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- NAVBAR TRANSITION EFFECT SCRIPTS -->
    <script src="assets/script.js"></script>

</body>

</html>