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
    <!-- NAV BAR -->
    <nav id="mainNavbar" class="container-fluid navbar navbar-expand-lg navbar-dark py-0 fixed-top">
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
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- PHP CODE -->
    <?php
    include("connectionPlaces.php");
    error_reporting(0);
    $query = "SELECT * FROM places";
    $data = mysqli_query($conn,$query);
    $row = mysqli_num_rows($data);
    $city = $_GET['id'];
    if($row != 0)
    {   
        echo"<div class=\"container pt-5 text-white\">
            <h1 class=\"mt-5\">Tourist Places</h1>";
            if($city == 'ak')
                echo"<h4 class=\"ml-3\">/AZAD KASHMIR</h4>
            </div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                            Azad Kashmir abbreviated as AJK (Azad Jammu Kashmir) is nominally self –governing jurisdiction administrated by Pakistan. The territory lies west of the Indian administrated state of Kashmir, and was part of the former princely State of Jammu and Kashmir.
                            <br>Following are the suitable places to visit in Azad Kashmir:
                        </p>";
            else if($city == 'bl')
                echo"<h4 class=\"ml-3\">/BALOCHISTAN</h4></div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Balochistan is the largest province of Pakistan in terms of land area, forming the southwestern region of the country, but is the least populated. Its provincial capital and largest city is Quetta.
                        Balochistan is well-known for its unique culture and extremely dry desert climate.
                        <br><br>Following are the some famous places in Balochistan:                        
                        </p>";
            else if($city == 'isl')
                echo"<h4 class=\"ml-3\">/ISLAMABAD</h4></div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Islamabad is the capital city of Pakistan and is federally administrated as part of the Islamabad Capital Territory. It is built as a planned city in the 1960s to replace Karachi as Pakistan’s capital, Islamabad is noted for its high standards of living, safety and abundant greenery.
                        <br>Islamabad is the 9th largest city in Pakistan and this city is one of the safest in Pakistan, and has an expansive surveillance system with 1,900 CCTV cameras.
                        </p>               
                ";
            else if($city == 'gb')
                echo"<h4 class=\"ml-3\">/GILGIT BALTISTAN</h4></div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Gilgit-Baltistan, formerly known as the Northern Areas, is the northernmost territory administered by Pakistan. It borders Azad Kashmir to the south, the province of Khyber Pakhtunkhwa to the west, the Wakhan Corridor of Afghanistan to the north, the Xinjiang region of China, to the east and northeast, and the Indian-administered state of Jammu and Kashmir to the southeast.
                        <br>This region is home to some of the world's highest mountain ranges. The main ranges are the Karakoram and the western Himalayas. The Pamir Mountains are to the north, and the Hindu Kush lies to the west. Amongst the highest mountains are K2 (Mount Godwin-Austen) and Nanga Parbat, the latter being one of the most feared mountains in the world.
                        Following are the Places to must visit: 
                        </p>
                ";
            else if($city == 'kp')
                echo"<h4 class=\"ml-3\">/KPK</h4></div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Khyber Pakhtunkhwa, formerly known as North-West Frontier Province, is one of the four administrative provinces of Pakistan, located in the northwestern region of the country along the international border with Afghanistan. The famous Khyber Pass links the province to Afghanistan, while the Kohalla Bridge in Circle Bakote Abbottabad is a major crossing point over the Jhelum River in the east.
                        <br>The northern zone is cold and snowy in winters with heavy rainfall and pleasant summers with the exception of Peshawar basin, which is hot in summer and cold in winter. It has moderate rainfall.
                        </p>
                ";
            else if($city == 'pj')
                echo"<h4 class=\"ml-3\">/PUNJAB</h4></div>
                <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Punjab is Pakistan's second largest province by area, after Balochistan. The provincial capital of Punjab is the city of Lahore, a cultural, historical, economic and cosmopolitan Centre of Pakistan where the country's cinema industry, and much of its fashion industry, are based.
                        Punjab's landscape consists mostly consists of fertile alluvial plains of the Indus River and its four major tributaries in Pakistan, the Jhelum, Chenab, Ravi, and Sutlej rivers which traverse Punjab north to south – the fifth of the \"five waters\" of Punjab, the Beas River, lies exclusively in the Indian state of Punjab.
                        In the South, Punjab's elevation reaches 2,327 metres (7,635 ft) near the hill station of Fort Munro in Dera Ghazi Khan.
                        <br>Following are the Places to Visit in Punjab:
                        </p>
                ";
            else{ echo"<h4 class=\"ml-3\">/SINDH</h4></div>
                  <div id=\"card2\" class=\"container-fluid\">
                    <div class=\"container\">
                        <p class=\"text-justify pt-5\">
                        Sindh is one of the four provinces of Pakistan, in the southeast of the country, and the historical home of the Sindhi people. Sindh is the third largest province of Pakistan by area, and second largest province by population after Punjab. Sindh's landscape consists mostly of alluvial plains flanking the Indus River, the Thar desert in the eastern portion of the province closest to the border with India, and the Kirthar Mountains in the western part of Sindh.
                        <br>Sindh lies in a tropical to subtropical region; it is hot in the summer and mild to warm in winter. Temperatures frequently rise above 46 °C (115 °F) between May and August, and the minimum average temperature of 2 °C (36 °F) occurs during December and January in the northern and higher elevated regions. The southwest monsoon wind begins in mid-February and continues until the end of September, whereas the cool northerly wind blows during the winter months from October to January.
                        </p>
                  ";
                }
            
            echo"<div class=\"row pb-5 px-auto\">";

            while($result = mysqli_fetch_assoc($data))
            {
                if($city == $result['state'])
                {
                    echo"
                        <div class=\"col-sm-6 col-md-4 col-lg-3 col-xl-4 text-center py-3 px-auto\">
                            <a href=\"".$result['href']."\"><img src=\"".$result['url']."\" class=\"img-thumbnail\" style=\"height:160px; width: 250px; border: 4px solid green;\" alt=\"images\"><br>
                            <span class=\"caption text-black\">".$result['name']."</span></a><br>
                        </div>
                    ";
                }
            }
        echo"   </div>
            </div>
		</div>";
    }
    else
    {	
        echo"No data found in table"; 
    }
    ?>

	<div class="container py-3">
		<div class="row text-white">
			<div class="col-md p-1">
				<h3>Image Gallery</h3>
				<div class="row text-center">
					<div class="col-3 col-md-6 col-lg-3 p-1"><img src="assets/images/1.jpg" alt="pic1" class="img-thumbnail">
					</div>
					<div class="col-3 col-md-6 col-lg-3 p-1"><img src="assets/images/2.jpg" alt="pic2" class="img-thumbnail">
					</div>
					<div class="col-3 col-md-6 col-lg-3 p-1"><img src="assets/images/3.jpg" alt="pic3" class="img-thumbnail">
					</div>
					<div class="col-3 col-md-6 col-lg-3 p-1"><img src="assets/images/4.jpg" alt="pic4" class="img-thumbnail">
					</div>
				</div>
			</div>
			<div class="col text-center">
				<h4>Quick Contact</h4>
				<p>
					Mobile: <b>+92 3123476452 |</b> Email: <b>sanojkumaroad@gmail.com</b>
				</p>
				<h3>Connect With Us</h3>
				<p>
					<a href="https://www.facebook.com/smsTourGuide" target="_blank"><img src="assets/images/facebook.png" alt="fb"></a>
					<b> | </b>
					<a href="https://www.instagram.com/smsTourGuide" target="_blank"><img src="assets/images/instagram.png" alt="insta"></a>
					<b> | </b>
					<a href="https://www.linkedin.com/smsTourGuide" target="_blank"><img src="assets/images/linkedin.png" alt="linkedin"></a>
					<b> | </b>
					<a href="htts://www.plus.google.com/smsTourGuide" target="_blank"><img src="assets/images/google-plus.png" alt="google+"></a>
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