  <?php

// $insert = false;
// if(isset($_POST['name'])){
//     $server = "localhost";
//     $username = "root";
//     $password = "";
//     $db = "table";

//     $con = mysqli_connect($server, $username, $password, $db);

//     if(!$con){
//         die("connection to this database failed due to" . mysqli_connect_error());
//     }

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $date = $_POST['date'];
//     $time = $_POST['time'];
//     $people = $_POST['people'];
//     $message = $_POST['message'];
//     $sql = "INSERT INTO `info` (`name`, `email`, `phone`, `date`, `time`, `no_of_people`, `message`) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message');";

//     if($con->query($sql) == true){
//         $insert = true;
//     }
//     else{
//         echo "ERROR: $sql <br> $con->error";
//     }

//     if($insert == true){
//       echo "<div class='message'>Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>";
//       }

//     $con->close();
// }









$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "table";

    $con = mysqli_connect($server, $username, $password, $db);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    // $thali = $_POST['thali'];
    $people = $_POST['people'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `info` (`name`, `email`, `phone`, `date`, `time`, `no_of_people`, `message`) VALUES ('$name', '$Email', '$phone', '$date', '$time', '$people', '$message');";
    // $sql = "INSERT INTO `orders` (`name`, `thali`, `phone`, `people`, `message`) VALUES ('$name', '$thali', '$phone','$people', '$message');";

    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    if($insert == true){
      echo "<div class='message'>Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>";
      }

    $con->close();
}

if(isset($_POST['Name'])){
  $server = "localhost";
  $username = "root";
  $password = "";
  $db = "table";

  $con = mysqli_connect($server, $username, $password, $db);

  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }

  $Name = $_POST['Name'];
  // $email = $_POST['email'];
  $phone = $_POST['phone'];
  // $date = $_POST['date'];
  // $time = $_POST['time'];
  $thali = $_POST['thali'];
  $people = $_POST['people'];
  $message = $_POST['message'];
  // $sql = "INSERT INTO `info` (`name`, `email`, `phone`, `date`, `time`, `no_of_people`, `message`) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message');";
  $sql = "INSERT INTO `orders` (`Name`, `thali`, `phone`, `people`, `message`) VALUES ('$Name', '$thali', '$phone','$people', '$message');";

  if($con->query($sql) == true){
      $insert = true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }

  if($insert == true){
    echo "<div class='message'>Your order has been recieved. it will be delivered to your place with lightning speed </div>";
    }

  $con->close();
}
?>  



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hotel Hind Kesari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+91 7998370370</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sun: 12:00 AM - 11:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        
        <h1><img src="logo.jpg" alt="" style="height: 70px; width:60px"><a href="https://g.co/kgs/dbDNKyd"> Hind Kesari</a>
      </h1>
        
      </div>
     
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <!--<li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>-->
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="admin/index.php" class="book-a-table-btn scrollto">Admin Login</a>
      <a href="ordering(index).php" class="book-a-table-btn scrollto">Book A Table & Order food</a>
      <!-- <a href="index.php" class="book-a-table-btn scrollto">Order Food</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(logo.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <div>
                  <!-- <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> -->
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(b.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">We Specialize in Authentic Non-Veg Thali</h2>
                <p class="animate__animated animate__fadeInUp"><h2 style="color: white;">नावातला रूबाब खाण्यात सुद्धा !!</h2></p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <!-- <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
        
        <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("a.png");'>
            <a href="https://youtube.com/@hindkesari1647?si=BtiDlJ8KABuJXhW-" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              : 
              <center>
              <h3> <strong> "हिंद केसरी"</strong></h3>
              <br>
              <h3>|| नावातला रुबाब खाण्यात सुद्धा||</h3>
              </center>
              <br>
              <ul>
                <li><i class="bx bx-check-double"></i><h4>|| अस्सल मसाल्याचा अनुभव घ्या,
                जिभेवर रेंगाळणारा स्वाद चाखून पहा ||</h4></li>
                <li><i class="bx bx-check-double"></i><h4>|| आलेल्या प्रत्येक अतिथीचा अनुभव हा अविस्मरणीय असेल ||</h4></li>
                <li><i class="bx bx-check-double"></i><h4>|| प्रत्येक पदार्थ बनवण्यासाठी चवीसोबतच गुणवत्तेची काळजी घेतो ||</h4></li>
              </ul>
              <br>
            
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant ?</span></h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Diverse Global Fusion</h4>
              <p style="font-size: medium;">The biggest non-vegetarian meal in India, weighing a whopping 16 kilograms! It's like a feast fit for a king.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Queen's Cuisine</h4>
              <p style="font-size: medium;">Hotel Hind Kesari: Where savory delights meet female entrepreneurship, curated by Mrs.Jyoti Palve.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Immersive Dining Experience</h4>
              <p style="font-size: medium;">Beyond the exceptional food, Hotel Hind Kesari provides an immersive dining experience. </p>
            </div>
          </div>
          
          <center>
          <br>
         
          </center>

    <section id="about" class="about">
    <div class="container">
    <div class="section-title">
          <h2>Our <span>Vision</span></h2>
    </div>
    <br>
        <div class="row">
            <div class="col-lg-6">
                <img src="business.jpg" class="img-fluid" alt="Business Image" width:250px height:250px>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <p style="font-size: 25px;">
                        Exciting news! Our restaurant is now offering franchise opportunities, aiming to spread our culinary delights worldwide. Join our franchise family and be part of our journey to global expansion. Contact us today to explore this incredible opportunity and embark on a rewarding culinary adventure. Don't miss your chance to be part of something extraordinary!
                    </p>
                    <h3>Contact : 7998370370</h3>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->




<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
  <div class="container">

    <div class="section-title">
      <h2>Check our tasty <span>Menu</span></h2>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">SHOW ALL</li>
          <li data-filter=".filter-starters">STARTERS</li>
          <!-- <li data-filter=".filter-salads">Non Veg</li> -->
          <li data-filter=".filter-fish">FISH</li>
          <li data-filter=".filter-extraveg">EXTRA VEG</li>
          <li data-filter=".filter-desert">DESSERTS</li>
          <li data-filter=".filter-mutton">MUTTON</li>
          <li data-filter=".filter-chicken">CHICKEN</li>
          <li data-filter=".filter-main">MAIN</li>

        </ul>
      </div>
    </div>

    <div class="row menu-container">
      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Udid Papad Roast</a><span>20</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Udid Masala Papad</a><span>40</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Rumali Khakara</a><span>200</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Cheese Rumali Khakara</a><span>240</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#"> Soyabeen Chilly</a><span>210</span>
        </div>
        <div class="menu-ingredients">
        
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Paneer Chilly</a><span>250</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Alu Vadi</a><span>160</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Chana Koliwada</a><span>140</span>
        </div>
        <div class="menu-ingredients">
         
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Kothimbir vadi</a><span>150</span>
        </div>
        <div class="menu-ingredients">
         
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-mutton">
        <div class="menu-content">
          <a href="#">Ukaad Mutton</a><span>320</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-mutton">
        <div class="menu-content">
          <a href="#">Mutton Thali</a><span>300</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <div class="menu-content">
          <a href="#">Finger Chips</a><span>150</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-chicken">
        <div class="menu-content">
          <a href="#">Chicken ukkad</a><span>240</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-chicken">
        <div class="menu-content">
          <a href="#">Chicken Thali</a><span>250</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-chicken">
        <div class="menu-content">
          <a href="#">Special Chicken Thali</a><span>400</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-chicken">
        <div class="menu-content">
          <a href="#">Sukh Chicken</a><span>260</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-chicken">
        <div class="menu-content">
          <a href="#">Chicken Kheema</a><span>250</span>
        </div>
       
      </div>

      <div class="col-lg-6 menu-item filter-mutton">
        <div class="menu-content">
          <a href="#">Kharda Mutton</a><span>360</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-mutton">
        <div class="menu-content">
          <a href="#">Mutton Kheema</a><span>270</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-mutton">
        <div class="menu-content">
          <a href="#">Special Mutton Thali</a><span>360</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Prawns Thali</a><span>400</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Pomfret Thali</a><span>400</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Surmai Thali</a><span>400</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Spl Prawns Thali</a><span>650</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Spl Pomfret Thali</a><span>680</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-fish">
        <div class="menu-content">
          <a href="#">Spl Surmai Thali</a><span>680</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Shev Bhaji</a><span>180</span>
        </div>
        
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Mix veg</a><span>190</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Veg Kolhapuri</a><span>200</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Veg Jaipuri</a><span>260</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Veg Deewani Handi</a><span>300</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">veg Patiala</a><span>280</span>
        </div>
        
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Masala Bhendi</a><span>425</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Mushroom Masala</a><span>280</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Dal Fry</a><span>475</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Dal Tadka</a><span>170</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Kaju Paneer Masala</a><span>330</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Panner Masala</a><span>220</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Paneer Butter Masala</a><span>260</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Paneer Bhurji</a><span>280</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Panner Kolhapuri</a><span>270</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Matar Paneer</a><span>210</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Kaju Curry</a><span>270</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Kaju Masala</a><span>290</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Plain Palak</a><span>180</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-main">
        <div class="menu-content">
          <a href="#">Palak Paneer Masala</a><span>260</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Chapati</a><span>20</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Bajra Bhakri </a><span>30</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Tandul Bhakari</a><span>40</span>
        </div>
        <div class="menu-ingredients">
          
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Jwari Bhakari</a><span>40</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Rice</a><span>90</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Dal Khichada</a><span>180</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Chaas</a><span>40</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-extraveg">
        <div class="menu-content">
          <a href="#">Caramel Custard</a><span>80</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-desert">
        <div class="menu-content">
          <a href="#">Rabadi Vati</a><span>100</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-desert">
        <div class="menu-content">
          <a href="#">Gulabjaam</a><span>60</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-desert">
        <div class="menu-content">
          <a href="#">Pineapple Shira</a><span>100</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-desert">
        <div class="menu-content">
          <a href="#">Doodhi Halwa</a><span>90</span>
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-desert">
        <div class="menu-content">
          <a href="#">Gul Tup Bhaat</a><span>70</span>
        </div>
      </div>


    </div>

  </div>
</section><!-- End Menu Section -->


    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Nashik Kesari Thali</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Maharashtra Kesari Thali</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Special chicken Thali</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Bharat Kesari Thali</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Special Mutton Thali</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Hind Kesari Thali</a>
              </li>
            </ul>
          </div>

         


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nashik Kesari Thali</h3>
                    <p class="fst-italic"></p>
                    <p>Enjoy a delectable seafood feast at Hind Kesari, featuring Pomfret Fry, Surmai Fry, Prawns Fry, accompanied by Bhakri, Roti, and Rice. Savor the tangy Solkadhi, complemented by the fiery Tambda Rassa. Complete your meal with a succulent Leg Piece Chicken. All this, for just Rs. 2100, perfect for two hungry souls.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="Nashikkesarithali.jpg" width="300"height="300">
                   </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Maharashtra Kesari Thali</h3>
                    <p class="fst-italic"></p>
                    <p>Gather your friends or family and head to Hind Kesari for a scrumptious meal for four. Enjoy a variety of dishes including Mutton Curry, Mutton Sukkha, Pandhra Rassa, Ukad Soup, Bhakri, Rice, and Chicken Curry. Indulge in the rich flavors of the Mutton Curry and the aromatic Mutton Sukkha. Experience the comforting warmth of Ukad Soup and the traditional goodness of Bhakri and Rice. All this deliciousness awaits you for just Rs. 3500, promising a delightful dining experience for everyone.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="maharashtrakesarithali.jpg" width="300"height="300">
                   </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Special chicken Thali</h3>
                    <p class="fst-italic"></p>
                    <p>
                      Indulge in our special chicken thali, a culinary delight crafted with love and expertise.Enjoy our special chicken thali for just Rs. 400! It includes fried chicken, chicken kheema, ukkad soup, rice, and your choice of roti or bhakri. It's a delicious and filling meal that's perfect for any occasion. Try it today!</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="schicken.png" width="300"height="300">
                   </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bharat Kesari Thali</h3>
                    <p class="fst-italic"> </p>
                    <p>
                    Introducing the Bharat Kesari Thali: a mouthwatering spread for 5 to 6 people at just Rs. 5500/-! Enjoy mutton curry, tambada rassa, pandhara rassa, ukkad soup, rice, solkadhi, and your choice of bhakri or roti. Affordable, authentic, and perfect for any occasion. Order now and savor every bite!</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="Bharat.jpg" width="300"height="300">
                   </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Special Mutton Thali</h3>
                    <p class="fst-italic"> </p>
                    <p>Try our special mutton thali priced at just Rs. 450! It includes mutton curry, fry mutton, mutton kheema, zinga chutney, solkadhi, rice, and your choice of bhakri or roti. This hearty meal is bursting with authentic flavors and textures. Treat yourself to a delicious feast that's both satisfying and affordable. Indulge in the rich taste of our mutton thali, perfect for any occasion. Don't miss out on this culinary delight – order yours today!</p>
                
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                   <img src="smuttonthali.jpg" width="300"height="300">
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3> Hind Kesari Thali</h3>
                    <p class="fst-italic"> </p>
                    <p>
Introducing the Hind Kesari Thali: a delectable feast for 8 to 10 people at an unbeatable price of Rs. 7000/-. Indulge in a lavish spread featuring mouthwatering non-vegetarian delights. Enjoy succulent kebabs, flavorful curries, aromatic biryani, assorted bread, and refreshing beverages. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="hindkesarithali.jpg" width="350"height="300">
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Event</span> in our Restaurant</h2>
        </div>

        <!-- <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide"> -->
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="babyshower.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties and Baby Shower</h3>
                  <div class="price">
                    <p><span> &#x20B9; 3000 onwards</span></p>
                  </div>
                  <p class="fst-italic">
                    "Indulge in Unforgettable Celebrations: Your Birthday Bash at Hind Kesari - Where Every Moment is Spiced with Joy and Culinary Delights! 🎉🍽️ "
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Offer special birthday packages with discounts on group bookings.</li>
                    <li><i class="bi bi-check-circle"></i> Tailor the restaurant's ambiance with birthday-themed decorations to create a festive atmosphere.</li>
                    <li><i class="bi bi-check-circle"></i> Consider live music, DJ, or other entertainment options to enhance the celebratory mood.</li>
                    <li><i class="bi bi-check-circle"></i> Join us for a sprinkle of joy at Hind Kesari's Baby Shower Bash!</li>
                  </ul>
                  <!-- <p>
                    Create a birthday party experience that not only highlights the restaurant's culinary excellence but also ensures a joyful and memorable celebration for the birthday person and their guests.
                  </p> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->













    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Order<span> Now</span></h2>
          <p>Skip the line: Order your meal instantly from your phone!</p>
        </div>
        <form action="index.php" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="Name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <select name="thali" name= "thali" class="form-control" id="thali" style="width: 400px;">
                <option>Nashik Kesari Thali(Rs. 2100)</option>
                <option>Maharashtra Kesari Thali(Rs. 3500)</option>
                <option>Prawns Thali(Rs. 400)</option>
                <option>Surmai Thali(Rs. 400)</option>
                <option>Pomfret Thali(Rs. 400)</option>
                <option>Spl. Prawns Thali(Rs. 650)</option>
                <option>Spl.Pomfret Thali(Rs. 680)</option>
                <option>Spl. Surmai Thali(Rs. 680)</option>
                <option>Kharda Mutton(Rs. 360)</option>
                <option>Ukkad Mutton(Rs. 320)</option>
                <option>Mutton Thali(Rs. 300)</option>
                <option>Spl. Mutton Thali(Rs. 450)</option>
                <option>Chicken Ukkad(Rs. 240)</option>
                <option>Sukha Chicken(Rs. 260)</option>
                <option>Chicken Kheema(Rs. 250)</option>
                <option>Spl. Chicken Thali(Rs. 400)</option>
                <option>Chicken Thali(Rs. 250)</option>
              </select>
            </div>
            <!-- <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div> -->
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="Item count" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Special Request"></textarea>
            <div class="validate"></div>
          </div>
          </div>
          <div class="text-center"><button type="submit" class="sub-button">Place Order</button></div>
        </form>
      </div> -->
    <!-- </section> -->

















    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Savor the moment – reserve your table at Hind Kesari and indulge in a culinary journey like no other!</p>
        </div> -->
        <!-- <form action="index.php" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="No. of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          </div>
          <div class="text-center"><button type="submit" class="sub-button">Send Message</button></div>
        </form> -->


        <!-- <form action="index.php" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="No. of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          </div>
          <div class="text-center"><button type="submit" class="sub-button">Send Message</button></div>
        </form>
      </div>
    </section>End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Hotel</span></h2>
          <p>Embark on a culinary journey: Hotel Hind Kesari restaurant's gallery - Where flavor meets artistry, and every dish tells a story.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="gal1.jpg" class="gallery-lightbox">
                <img src="gal1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="client1.jpg" class="gallery-lightbox">
                <img src="client1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="amb1.jpg" class="gallery-lightbox">
                <img src="amb1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh3.jpg" class="gallery-lightbox">
                <img src="dishh3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh2.jpg" class="gallery-lightbox">
                <img src="dishh2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="client2.jpg" class="gallery-lightbox">
                <img src="client2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="amb2.jpg" class="gallery-lightbox">
                <img src="amb2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh4.jpg" class="gallery-lightbox">
                <img src="dishh4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Customer <span>Reviews</span></h2><br> -->
         <!-- <p>"Meet the Maestros Behind the Magic: Our Culinary Virtuosos Infuse Passion and Expertise into Every Dish. Elevate Your Dining Experience with the Artistry of Our Chefs at Spice Up! 🌶️👨‍🍳✨ #SpiceUpCulinaryCraftsmanship"</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vikram Sunderam</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ritu Dalmia</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Saransh Goila</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">  -->
                <!-- <h3>Jyoti Shinde</h3> -->
                <!-- <h4>Ceo &amp; Founder</h4> -->
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Hotel Hind Kesari is an excellent restaurant with good seating and friendly staff. The food is fresh, tasty and comes in good quantity. It`s worth the money and I highly recommend it!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div> -->
            <!-- </div>End testimonial item -->

            <!-- <div class="swiper-slide"> -->
              <!-- <div class="testimonial-item"> -->
                <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                <!-- <h3>Sachin Pawar</h3> -->
                <!-- <h4>Designer</h4> -->
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "The authentic cuisine served here is truly delightful, with each dish bursting with flavor. The tasty food, along with the trained staff and clean surroundings, makes the dining experience worth every penny."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            <!-- </div>End testimonial item  -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item"> -->
                <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                <!-- <h3>Dinesh Dani</h3> -->
                <!-- <h4>Store Owner</h4> -->
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "The food was just awesome and like home cooked fish fry and fish curry.The restaurant serves excellent quality different types of sea food. Along with the food the soul curry and kokum juice is wonderful."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div> -->
            <!-- </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item"> -->
                <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                <!-- <h3>Sagar</h3> -->
                <!-- <h4>Freelancer</h4> -->
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Best Non veg thali.Staff is also good.If you want small outing near city,it's best place for that!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div> -->
            <!-- </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item"> -->
                <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                <!-- <h3>Swati Gupta</h3> -->
                <!-- <h4>Entrepreneur</h4> -->
                <!-- <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "This place was amazing with good Ambiance and tasty food.Authentic thali and veriety of Pans.Hospitality was very nice."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div> -->
            <!-- </div>End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section --> 





    
    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">
        <section id="contact" class="contact">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Welcome to Hotel Hind Kesari – We value your feedback, inquiries, and suggestions.</p>
        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.9716143823575!2d73.76338237582253!3d20.009706021996696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdde91e8203a427%3A0x62d3a853f51ca911!2sHind%20Kesari%20%7C%20Non%20Veg%20Special%20Branch%201!5e0!3m2!1sen!2sin!4v1712848316669!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Mama Mungi Mangal Karyalay, Gangapur Road, <br>Vidya Vikas Circle, Nashik, Maharashtra 422005</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Sunday:<br>12:00 AM - 11:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Hindkesariii@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>7998370370</p>
            </div>
          </div>
        </div>
      </div> -->
    <!-- </section>End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <h3>Hind Kesari</h3>
      <p>Tantalize your taste buds with our delectable delights. Welcome to a world of culinary bliss!</p>
      <div class="social-links">

        <a href="https://www.facebook.com/profile.php?id=100089989688253&mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/hotelhindkesari?igsh=dXF2ajZ4bXppdWhh&utm_source=qr" class="instagram"><i class="bx bxl-instagram"></i></a>
        
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Hind Kesari</span></strong>. All Rights Reserved
      </div>
    </div> -->
  <!-- </footer>End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->

<!-- </body> -->

<!-- </html>  -->




















    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos with <span>Happy Customer</span></h2>
          <p>Embark on a culinary journey: Hotel Hind Kesari restaurant's gallery - Where flavor meets artistry, and every dish tells a story.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="gal1.jpg" class="gallery-lightbox">
                <img src="thali_photo.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="client1.jpg" class="gallery-lightbox">
                <img src="client1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="amb1.jpg" class="gallery-lightbox">
                <img src="amb1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh3.jpg" class="gallery-lightbox">
                <img src="dishh3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh2.jpg" class="gallery-lightbox">
                <img src="dishh2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="client2.jpg" class="gallery-lightbox">
                <img src="client2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="amb2.jpg" class="gallery-lightbox">
                <img src="amb2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="dishh4.jpg" class="gallery-lightbox">
                <img src="dishh4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->
<br><br>
    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>"Meet the Maestros Behind the Magic: Our Culinary Virtuosos Infuse Passion and Expertise into Every Dish. Elevate Your Dining Experience with the Artistry of Our Chefs at Spice Up! 🌶️👨‍🍳✨ #SpiceUpCulinaryCraftsmanship"</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vikram Sunderam</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ritu Dalmia</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Saransh Goila</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Jyoti Shinde</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  " Up is an absolute gem! The ambiance is warm and inviting, the staff is incredibly attentive, and the food is simply outstanding. Every dish is a burst of flavors, and the presentation is top-notch. My personal favorite is the [signature dish], and I can't recommend it enough. It's definitely my go-to place for a delightful dining experience."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">  -->
                <h3>Jyoti Shinde</h3>
                <!-- <h4>Ceo &amp; Founder</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Hotel Hind Kesari is an excellent restaurant with good seating and friendly staff. The food is fresh, tasty and comes in good quantity. It`s worth the money and I highly recommend it!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                <h3>Sachin Pawar</h3>
                <!-- <h4>Designer</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>

                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "The authentic cuisine served here is truly delightful, with each dish bursting with flavor. The tasty food, along with the trained staff and clean surroundings, makes the dining experience worth every penny."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Had a fantastic experience at Spice Up! The private party we organized was flawlessly executed. The staff went above and beyond to ensure every detail was perfect. The customized menu was a hit, and the private dining space added a touch of exclusivity. Our guests couldn't stop raving about the delicious food and impeccable service. Spice Up exceeded our expectations!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                <h3>Dinesh Dani</h3>
                <!-- <h4>Store Owner</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "The food was just awesome and like home cooked fish fry and fish curry.The restaurant serves excellent quality different types of sea food. Along with the food the soul curry and kokum juice is wonderful."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary delight! The fusion of flavors in each dish is exceptional. I recently hosted a private event here, and the level of service was outstanding. From the personalized menu to the seamless execution of the party, everything was beyond my expectations. It's evident that the team at Spice Up takes pride in delivering a memorable experience for their guests."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                <h3>Sagar</h3>
                <!-- <h4>Freelancer</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Best Non veg thali.Staff is also good.If you want small outing near city,it's best place for that!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Absolutely loved my dining experience at Spice Up! The atmosphere is elegant, and the staff is incredibly attentive. The menu offers a wide range of choices, and each dish is a work of art. The presentation is Instagram-worthy! The attention to detail and the use of high-quality ingredients set Spice Up apart. Can't wait to come back and try more dishes!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                <h3>nishita rajpurkar</h3>
                <!-- <h4>Freelancer</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "One of the best places we visited in Nashik. The place is famous for non veg thalis. It was our best decision to go for this Hind Kesari. We tried Mutton Thali and Mutton Sukha. The taste was just amazing and the mutton was just well cooked. The staff is very nice and mainly owner was personally attending the customers"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Absolutely loved my dining experience at Spice Up! The atmosphere is elegant, and the staff is incredibly attentive. The menu offers a wide range of choices, and each dish is a work of art. The presentation is Instagram-worthy! The attention to detail and the use of high-quality ingredients set Spice Up apart. Can't wait to come back and try more dishes!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div>



            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                <h3> rajamedha paranjape </h3>
                <!-- <h4>Entrepreneur</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Authentic Marathi food. Specially seafood is worth mentioning. No where in Maharashtra we had such a rich experience of variety of non vegetarian food. Spicy and tasticious. Wish them further success."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary masterpiece! The menu is a fusion of creativity and tradition, offering a delightful array of flavors. The staff's knowledge of the dishes and their recommendations were spot-on. The ambiance is sophisticated yet inviting, making it a perfect spot for both intimate dinners and celebratory gatherings. A definite must-visit for food enthusiasts!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                <h3>Swati Gupta</h3>
                <!-- <h4>Entrepreneur</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "This place was amazing with good Ambiance and tasty food.Authentic thali and veriety of Pans.Hospitality was very nice."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary masterpiece! The menu is a fusion of creativity and tradition, offering a delightful array of flavors. The staff's knowledge of the dishes and their recommendations were spot-on. The ambiance is sophisticated yet inviting, making it a perfect spot for both intimate dinners and celebratory gatherings. A definite must-visit for food enthusiasts!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                <h3>Sophia Coelho</h3>
                <!-- <h4>Entrepreneur</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>


                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "On our 3 days trip to Nashik,we visited this place called 'Hind Kesari ' on 11th March.It is really awesome place for nonveg foodies.We ordered for the mutton thali which was lipsmacking.It had sukka (black)mutton, mutton gravy, bhakri/ chapati option, rice, solkadi , alni rassa( it's mutton soup) tambda rassa.We enjoyed it.Also to mention the owner is just a wonderful person.Both Mr & Mrs Palve come personally to your table & see that you are comfortable and properly served.
                  Thanks Hind Kesari for your hospitality.
                  May you prosper more & more.
                  Will surely recommend for nonveg lovers."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary masterpiece! The menu is a fusion of creativity and tradition, offering a delightful array of flavors. The staff's knowledge of the dishes and their recommendations were spot-on. The ambiance is sophisticated yet inviting, making it a perfect spot for both intimate dinners and celebratory gatherings. A definite must-visit for food enthusiasts!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p> -->
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Welcome to Hotel Hind Kesari – your gateway to a culinary journey of exquisite flavors! We value your feedback, inquiries, and suggestions.</p>
        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.9716143823575!2d73.76338237582253!3d20.009706021996696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdde91e8203a427%3A0x62d3a853f51ca911!2sHind%20Kesari%20%7C%20Non%20Veg%20Special%20Branch%201!5e0!3m2!1sen!2sin!4v1712848316669!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Mama Mungi Mangal Karyalay, Gangapur Road, <br>Vidya Vikas Circle, Nashik, Maharashtra 422005</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Sunday:<br>12:00 AM - 11:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Hindkesariii@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+91 7998370370</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" >
    <div class="container" style="display:inline-block;">
      <h3>Hind Kesari</h3>
      <h5>Tantalize your taste buds with our delectable delights. Welcome to a world of culinary bliss!</h5>
      <br>
      <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=100089989688253&mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/hotelhindkesari?igsh=dXF2ajZ4bXppdWhh&utm_source=qr" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://youtube.com/@hindkesari1647?si=BtiDlJ8KABuJXhW-"class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Hind Kesari</span></strong>. All Rights Reserved
      </div>
    </div>
    <div style="display:inline-block;">
      <img src="qr.jpeg" alt="" style="height:300px; padding-bottom:30px" >
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="Google Sheet.js"></script>

</body>

</html>