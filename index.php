<?php
require("dashboard/config.php");
session_start();
error_reporting(1);

if (isset($_POST['submit-reservation'])) {
  $userNama = $_POST['txt_nama'];
  $userNoHp = $_POST['txt_nohp'];
  $waktu = date('Y-m-d', strtotime($_POST['txt_waktu']));
  $note = ['txt_note'];
  

  $query    = "INSERT INTO reservation SET nama = '$userNama', nohp = '$userNoHp',  waktu = '$waktu',  note ='$note'";
  $result   = mysqli_query($koneksi, $query);
  

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Lingkar Angkringan</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/lingkar_angkringan.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ** Preloader Start ** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ** Preloader End ** -->
    
    
    <!-- ** Header Area Start ** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ** Logo Start ** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/revisi logo no bg 2.png " chefs>
                        </a>
                        <!-- ** Logo End ** -->
                        <!-- ** Menu Start ** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <!--<li class="scroll-to-section"><a href="#chefs">Features</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>-->
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ** Menu End ** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ** Header Area End ** -->

    <!-- ** Main Banner Area Start ** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Lingkar Angkringan dan Cafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="https://wa.me/6287873174354?text=silahkan+isi+form+reservasinya+kak+%3A%29+%0D%0A%0D%0Anama+%3A+%0D%0Ajam+%3A%0D%0Atanggal+%3A+%0D%0Ajumlah+orang+%3A+%0D%0Alesehan%2Ftable+%3A+%0D%0Anote+%3A+%0D%0A%0D%0AReservasi+akan+diproses+setelah+pembayaran.+Terima+kasih+sudah+melakukan+pemesanan+di+angkringan+kami+%2C+kami+tunggu+kedatangannya+kak ">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/4.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/9.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/6.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ** Main Banner Area End ** -->

    <!-- ** About Area Starts ** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Lingkar Angkringan dan cafe yang berlokasi dikabupaten Jember. Lebih tepatnya di perumahan Tidar asri, Sumbersari. <br>
                            <br>Yang membuat Angkringan lingkar dan cafe berbeda dengan yang lainnya adalah, disini tersedia banyak sekali pilihan makanan dan minuman. Selain itu, lingkar angkringan juga memiliki tempat yang cukup luas dibanding angkringan lainnya. Pengunjung bisa membuat reservasi tempat untuk acara atau kegiatan tertentu.<br>
                            <br>Kapasitas lingkar angkringan ini kurang lebih dapat menampung 200 orang. Lingkar angkringan juga menyediakan tempat duduk lesehan ataupun meja dan kursi. Makanan yang dijual meliputi nasi bakar, nasi goreng, mie goreng, roti bakar, berbagai macam sate, dan lain-lain. Minuman yang dijual pun beraneka macam seperti teh, jeruk, kopi, wedang jahe, susu, bahkan minuman bubuk dalam kemasan.<br>
                            <br>Semua dijual dengan harga yang sangat terjangkau. Walaupun terjangkau, lingkar angkringan memiliki kualitas rasa dan kebersihan yang menjanjikan. Gratis ongkir untuk wilayah perumahan tidar asri dengan pembayaran COD. Yuk pesan sekarang! <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.instagram.com/reel/CklSNTuJb33/?utm_source=ig_web_copy_link"><i class="fa fa-play"></i></a>
                            <img src="assets/images/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ** About Area Ends ** -->

    <!-- ** Menu Area Starts ** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu Gallery</h6>
                        <h2>Our Best-seller menu</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                              <h1 class='title'>Nasi Bakar</h1>
                              <p class='description'>Nasi dengan isian lauk yang dilapisi dengan daun pisang dan dibakar.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                              <h1 class='title'>Sate angkringan</h1>
                              <p class='description'>Berbagai macam jenis sate-satean. Harga mulai dari 1500 hingga 3500.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                              <h1 class='title'>Mie goreng</h1>
                              <p class='description'>Mie goreng yang disajikan dengan telur goreng. Bisa Request tingkat kepedasan.</p>
                              <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            
                        <div class='info'>
                              <h1 class='title'>ice chocolatos</h1>
                              <p class='description'>Minuman kemasan merk chocolatos rasa coklat. Tersedia juga berbagai macam rasa. </p>
                              <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            
                        <div class='info'>
                              <h1 class='title'>Kopi hitam</h1>
                              <p class='description'>Kopi kemasan merk kapal api. Bisa request tingkat kemanisan dan panas/dingin.</p>
                              <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            
                            <div class='info'>
                              <h1 class='title'>Sate angkringan</h1>
                              <p class='description'>Berbagai macam jenis sate-satean. Harga mulai dari 1500 hingga 3500.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ** Menu Area Ends ** -->

<!-- ** Menu Area Starts ** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>OUR MENU</h6>
                    <h2>U can choose your favourite menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                        
                                      <li><a href='#tabs-1'><img src="assets/images/food-removebg-preview.png" alt="">Food</a></li>
                                      <li><a href='#tabs-2'><img src="assets/images/snack-removebg-preview.png" alt="">Snack</a></a></li>
                                      <li><a href='#tabs-3'><img src="assets/images/drink-removebg-preview.png" alt="">Drink</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/makanan1.jpg" alt="">
                                                            <h4>Nasi Bakar</h4>
                                                            <p>Isian varian: Ayam, Tuna <br> Pedas dan tidak pedas </p>
                                                            <div class="price">
                                                                <h6>6k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makanan2.jpg" alt="">
                                                            <h4>Mie</h4>
                                                            <p>Varian: Mie goreng, mie kuah, mie nyemek. Bisa request tingkat kepedasan.</p>
                                                            <div class="price">
                                                                <h6>10k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makanan3.jpg" alt="">
                                                            <h4>Nasi goreng</h4>
                                                            <p>Bisa request tingkat kepedesan. <br> </p>
                                                            <div class="price">
                                                                <h6>10k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makanan6.jpg" alt="">
                                                            <h4>Bihun goreng</h4>
                                                            <p>Bisa request tingkat kepedesan. </p>
                                                            <div class="price">
                                                                <h6>10k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makanan4.jpg" alt="">
                                                            <h4>Roti bakar 1 rasa</h4>
                                                            <p>Varian: Keju, Coklat, Blueberry, strawberry, nanas.</p>
                                                            <div class="price">
                                                                <h6>6k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makanan5.jpg" alt="">
                                                            <h4>Roti bakar 2 rasa</h4>
                                                            <p>Varian: Keju, Coklat, Blueberry, strawberry, nanas.</p>
                                                            <div class="price">
                                                                <h6>8k</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </article>  
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack1.jpg" alt="">
                                                        <h4>Sate 1,5k</h4>
                                                        <p>Varian: sate tempe bacem dan tahu bacem.</p>
                                                        <div class="price">
                                                            <h6>1,5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack2.jpg" alt="">
                                                        <h4>Sate 2k</h4>
                                                        <p>Varian: Sate tempura, bintang, siomay, telur puyuh, ampela, usus, dan pentol</p>
                                                        <div class="price">
                                                            <h6>2k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack3.jpg" alt="">
                                                        <h4>Sate 2,5k</h4>
                                                        <p>Varian: sate sosis ayam dan sapi. Sate scallop, dan sate otak-otak.</p>
                                                        <div class="price">
                                                            <h6>2.5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack1.jpg" alt="">
                                                        <h4>Sate 3,5k</h4>
                                                        <p>Varian: Sate dumpling keju, ayam, dan bolognese.</p>
                                                        <div class="price">
                                                            <h6>3.5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack5.jpg" alt="">
                                                        <h4>Tahu crispy</h4>
                                                        <p>Varian : crispy & tahu walik <br> Disajikan dengan saus sambal.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack6.jpg" alt="">
                                                        <h4>Kentang</h4>
                                                        <p>Disajikan dengan saus sambal dan mayonaise.</p>
                                                        <div class="price">
                                                            <h6>9k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink1.jpg" alt="">
                                                        <h4>Kopi-kopian</h4>
                                                        <p>Varian : Kopi Hitam <br> kopi susu.</p>
                                                        <div class="price">
                                                            <h6>4k-5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink2.jpg" alt="">
                                                        <h4>Teh</h4>
                                                        <p>Varian : Teh manis, Teh Tawar dan Lemon tea.</p>
                                                        <div class="price">
                                                            <h6>4k-5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink3.jpg" alt="">
                                                        <h4>Minuman Jahe</h4>
                                                        <p>Varian : Wedang jahe <br> susu jahe.</p>
                                                        <div class="price">
                                                            <h6>4k-5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink4.jpg" alt="">
                                                        <h4>Milkshake</h4>
                                                        <p>Varian: Melon, Strawberry, Leci, Coklat. dan Vanilla</p>
                                                        <div class="price">
                                                            <h6>7k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink5.jpg" alt="">
                                                        <h4>Minuman kemasan</h4>
                                                        <p>Varian:Nutrisari,beng-beng,chocolatos coklat/matcha,cappucino,teh tarik,milo.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                    <img src="assets/images/drink6.jpg" alt="">
                                                        <h4>Milk</h4>
                                                        <p>Varian: Taro, oreo, redvelvet, tiramisu, dan bubblegum.</p>
                                                        <div class="price">
                                                            <h6>8k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink7.jpg" alt="">
                                                        <h4>Squash</h4>
                                                        <p>Varian: Leci, melon, strawberry, dan Vanilla.</p>
                                                        <div class="price">
                                                            <h6>8k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink8.jpg" alt="">
                                                        <h4>Syrup</h4>
                                                        <p>Varian: Leci, melon, strawberry, dan Vanilla.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                    <img src="assets/images/drink9.jpg" alt="">
                                                        <h4>Jus</h4>
                                                        <p>arian: Melon, apel <br> dan jambu.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink10.jpg" alt="">
                                                        <h4>Josua</h4>
                                                        <p>Minuman extrajoss ditambah dengan susu kental manis.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--<div class="col-lg-12">
                        <section class='tabs-content'>-->
                          
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-white-button scroll-to-section" style="text-align: center;">
                                <a href="allmenu.php">View All Menu</a>
                            </div>
<!-- ** Chefs Area Ends ** --> 

    <!-- ** Chefs Area Starts ** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Staff</h6>
                        <h2>We offer the best serve for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <!--<div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/__gustav.g"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/gustavito.jpeg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Gustavito Gunawan</h4>
                            <span>Leader staff</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <!--<div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/gesthi.rh"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/gesti.jpeg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>Gesti</h4>
                            <span>Kitchen Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <!--<div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/naufalnmf_22"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/naufal.jpeg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Naufal</h4>
                            <span>Kitchen Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ** Chefs Area Ends ** -->

    <!-- ** Reservation Us Area Starts ** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just visit to our cafe</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Whatsapp</h4>
                                    <span><a href="https://wa.me/6287873174354?text=silahkan+isi+form+reservasinya+kak+%3A%29+%0D%0A%0D%0Anama+%3A+%0D%0Ajam+%3A%0D%0Atanggal+%3A+%0D%0Ajumlah+orang+%3A+%0D%0Alesehan%2Ftable+%3A+%0D%0Anote+%3A+%0D%0A%0D%0AReservasi+akan+diproses+setelah+pembayaran.+Terima+kasih+sudah+melakukan+pemesanan+di+angkringan+kami+%2C+kami+tunggu+kedatangannya+kak ">087873174354</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa-brands fa-instagram"></i>
                                    <h4>Instagram</h4>
                                    <span><a href="https://www.instagram.com/lingkar.cafe_">@lingkar.cafe_</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                       
                          <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <br><br><br><br>
                                <h4 class="pp">Template Reservation</h4>
                                <br>
                                <br>
                                <br>
                                <style>
                                    .pp{
                                        color: white;
                                        text-align: center;
                                    }
                                </style>
                                <button class="btn btn-warning btn-sm ms-auto" data-toggle="modal" data-target="#modal-foto<?php echo $row['id'] ?>">Klik disini untuk melihat template reservasi!</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>

                         <!-- End Pop Up Lihat Foto -->
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            </div>    
                          </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ** Reservation Area Ends ** -->
    <!-- Pop Up Lihat Foto  -->
    <div class="modal fade" id="modal-foto<?= $row['id'] ?>" tabdashboard="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="verticalModalTitle">Lihat Foto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                                <div class="modal-body">
                                  <div class="form-group align-middle text-center">
                                <img src="assets/images/reservasi.jpg<?php echo $foto ?>" alt="Foto Menu" class="w-100 border-radius-lg shadow-sm" />
                              </div>


                                  <div class="modal-footer">


                                    <!-- <a href="menu.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm ms-auto">Delete</a> -->

                                    
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>

                         <!-- End Pop Up Lihat Foto -->
    <!-- ** Footer Start ** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://wa.me/6287873174354?text=silahkan+isi+form+reservasinya+kak+%3A%29+%0D%0A%0D%0Anama+%3A+%0D%0Ajam+%3A%0D%0Atanggal+%3A+%0D%0Ajumlah+orang+%3A+%0D%0Alesehan%2Ftable+%3A+%0D%0Anote+%3A+%0D%0A%0D%0AReservasi+akan+diproses+setelah+pembayaran.+Terima+kasih+sudah+melakukan+pemesanan+di+angkringan+kami+%2C+kami+tunggu+kedatangannya+kak"><i class="fa fa-phone"></i></a></li>
                            <li><a href="https://www.instagram.com/lingkar.cafe_"><i class="fa fa-instagram"></i></a></li>
                            <br>
                            <p><b> © Copyright
                        
                        <br>Lingkar Angkringan dan Cafe</b></p>
                            <p> Cluster Tidar Asri Blok X1/X2 </p>
                            <p> open : 14.00 - 02.00 </p>
                            </ul>
                    </div>
                </div>
                <!--<div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/revisi logo putih 2.png" alt=""></a>
                    </div>
                </div>-->
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                    <div class="col-lg-6 left-map">
                            <div id="map">     
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.147366223566!2d113.72266151386259!3d-8.168460184118109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695f7d0700c97%3A0x6b8c15e517c5f08a!2sAngkringan%20lingkar!5e1!3m2!1sen!2sid!4v1672647593684!5m2!1sen!2sid"  width="500%" height="150px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        
                        <!--<p><b> © Copyright
                        
                        <br>Lingkar Angkringan dan Cafe</b></p>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
<?php
require("dashboard/config.php");
$querytambah = mysqli_query($koneksi, "SELECT * FROM stat");
while($row = mysqli_fetch_assoc($querytambah)){
    $current_count = $row['value'];
    $new_count = $current_count;
    $update_count = mysqli_query($koneksi, "INSERT INTO stat set value = '" . $new_count . "'");
}

?>