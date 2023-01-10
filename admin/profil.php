<?php require ("./config.php");
session_start();

if( !isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

else {
  $iduser=$_SESSION["iduser"];
  $ssuser=$_SESSION["ssuser"];
  $ssfoto=$_SESSION["ssfoto"];
  $ssemail=$_SESSION["ssemail"];
  $ssalamat=$_SESSION["ssalamat"];
  $ssfullname=$_SESSION["ssfullname"];
  $sskota=$_SESSION["sskota"];
  $sskecamatan=$_SESSION["sskecamatan"];
  $ssprovinsi=$_SESSION["ssprovinsi"];
  $sspassword=$_SESSION["sspassword"];
  $ssnohp=$_SESSION["ssnohp"];

}

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Dashboard Lingkar Cafe</title>
  <!-- < !-- Simple bar CSS --> -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
</head>

<body class="vertical  dark  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light"><button type="button"
        class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar"><i
          class="fe fe-menu navbar-toggler-icon"></i></button>
      <form class="form-inline mr-auto searchform text-muted"><input
          class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
          placeholder="Type something..." aria-label="Search"></form>
      <ul class="nav">
        <li class="nav-item"><a class="nav-link text-muted my-2" href="./index.php" id="modeSwitcher"
            data-mode="dark"><i class="fe fe-sun fe-16"></i></a></li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar><a href="#"
        class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle"><i
          class="fe fe-x"><span class="sr-only"></span></i></a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
          <div class="w-100 mb-4 d-flex"><a class="navbar-brand mx-auto mt-2 flex-fill text-center"
              href="./dashboard.html"><svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
                xmlns="http://www.w3.org/2000/svg" xmlns : xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg></a></div>
          <!-- SIDEBAR -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="index.php">
              <br>
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Dashboard</span>
              <br>
              <br>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>CRUD</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Tambah Data</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./karyawan.php"><span class="ml-1 item-text">karyawan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./user.php"><span class="ml-1 item-text">User</span>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-credit-card fe-16"></i>
              <span class="ml-3 item-text">Tambah Menu</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="forms">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./menu.php"><span class="ml-1 item-text">Menu</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-grid fe-16"></i>
              <span class="ml-3 item-text">Data Barang</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="tables">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./barang.php"><span class="ml-1 item-text">Barang</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Income</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                <a class="nav-link pl-3" href="./penghasilan.php"><span class="ml-1">Penghasilan Perhari</span></a>
              </ul>
            </li>
          <li class="nav-item dropdown">
            <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-pie-chart fe-16"></i>
              <span class="ml-3 item-text">Absen</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="charts">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./absen.php"><span class="ml-1 item-text">Karyawan</span></a>
              </li>
              
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
              <span> LANDING PAGE</span>
            </p>
          <li class="nav-item w-100">
            <a class="nav-link" href="../index.php">
              <br>
              <i class="fe fe-external-link"></i>
              <span class="ml-3 item-text">Lingkar Cafe</span>
            <br>
            <br>  
            </a>
            <p class="text-muted nav-heading mt-4 mb-1">
          <span> USER SETTINGS</span>
        </p>
          </li>
          </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-user"></i>
              <span class="ml-3 item-text">User Setting</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="user">
              
              <li class="nav-item">
                <a class="nav-link pl-3" href="./profil.php"><span
                    class="ml-1 item-text">Profile</span></a>
              </li>
            </ul>
          <li class="nav-item w-100">
            <a class="nav-link" href="logout.php">
              <i class="fe fe-power"></i>
              <span class="ml-3 item-text">Log Out</span>
            </a>
          </li>
          </li>
        </ul>



    </aside>
    <!-- END DARI SIDEBAR -->
    <?php
    $tampilprofil = "SELECT * FROM user WHERE id='$iduser'";
    $result = mysqli_query($koneksi, $tampilprofil);
    
    while ($row = mysqli_fetch_array($result)){
      $namalengkap = $row['namalengkap'];
      $userName = $row['username'];
      $userEmail = $row['email'];
      $nohp = $row['nohp'];
      $foto = $row['foto'];
      $password = $row['password'];
      $kecamatan = $row['kecamatan'];
      $kota = $row['kota'];
      $provinsi = $row['provinsi'];
      $alamat = $row['alamat'];
    
    ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
              <h2 class="h3 mb-4 page-title">Settings profile</h2>
              <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                      role="tab" aria-controls="home" aria-selected="true">Profile</a></li>
                </ul>
                <button type="button" class="btn mb-2 btn-primary center-block" data-toggle="modal"
                  data-target=".bd-example-modal-xl">Ubah</button>
                <style>
                  button {
                    float: right;
                  }
                </style>
                  <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                      <div class="avatar avatar-xl"><img src="./foto/user/<?php echo $foto?>" class="avatar"
                          alt="Avatar">
                        <style>
                          .avatar {
                            width: 170px;
                            height: 120px;
                            border-radius: 70%;
                          }
                        </style>
                      </div>
                    </div>
                    <div class="col">
                      <div class="row align-items-center">
                        <div class="col-md-7">
                          <h4 class="mb-1"><?php echo $namalengkap?></h4>
                          <h6><?php echo $kecamatan?>,
                            &nbsp;
                            <?php echo $kota?>&nbsp;
                            <?php echo $provinsi?></h6>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-7">
                          <p class="text-muted"><?php echo $alamat ?></p>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group"><label for="example-text-input" class="form-control-label">Nama
                            Lengkap</label><input class="form-control" type="text" value="<?php echo $namalengkap?>"
                            disabled></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"><label for="example-text-input"
                            class="form-control-label">Username</label><input class="form-control" type="text"
                            value="<?php echo $userName ?>" disabled></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><label for="example-text-input"
                            class="form-control-label">Email</label>
                            <input class="form-control" type="text"
                            value="<?php echo $userEmail ?>" disabled></div>
                      </div>
                    </div>
                    <div class="form-group"><label for="inputState5">Kecamatan</label><select id="inputState5"
                        class="form-control" disabled>
                        <option selected=""><?php echo $kecamatan ?></option>
                        <option>Ajung</option>
                        <option>Ambulu</option>
                        <option>Arjasa</option>
                        <option>Balung</option>
                        <option>Bangsalsari</option>
                        <option>Gumuk Mas</option>
                        <option>Jelbuk</option>
                        <option>Jenggawah</option>
                        <option>Jombang</option>
                        <option>Kalisat</option>
                        <option>Kaliwates</option>
                        <option>Kencong</option>
                        <option>Ledokombo</option>
                        <option>Mayang</option>
                        <option>Mumbulsari</option>
                        <option>Pakusari</option>
                        <option>Panti</option>
                        <option>Patrang</option>
                        <option>Puger</option>
                        <option>Rambipuji</option>
                        <option>Semboro</option>
                        <option>Silo</option>
                        <option>Sukorambi</option>
                        <option>Sukowono</option>
                        <option>Sumber Baru</option>
                        <option>Sumber Jambe</option>
                        <option>Sumber Sari</option>
                        <option>Tanggul</option>
                        <option>Tempurejo</option>
                        <option>Umbulsari</option>
                        <option>Wuluhan</option>
                      </select></div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"><label for="example-text-input"
                            class="form-control-label">Kota</label><input class="form-control" type="text"
                            value="<?php echo $kota ?>" disabled></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><label for="example-text-input"
                            class="form-control-label">provinsi</label><input class="form-control" type="text"
                            value="<?php echo $provinsi ?>" disabled></div>
                      </div>
                    </div>
                    <div class="mb-3"><label for="exampleFormControlTextarea1"
                        class="form-label">Alamat</label><textarea class="form-control" id="exampleFormControlTextarea1"
                        rows="3" name="txt_alamat" disabled><?php echo $alamat ?></textarea></div>
              </div>
            </div>
          </div>
          </div>
        </div>
        
        
        <div class="modal fade bd-example-modal-xl" id="<?php echo $iduser?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content"><br>

                      <center> <h5 class="modal-title" id="defaultModalLabel">Add User</h5></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-footer">
                      </div>
                      
                <form action="profil.php" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text" value="<?php echo $namalengkap?>" name="edit_namalengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control" type="text" value="<?php echo $userName?>" name="edit_username">
                  </div>
                </div>
                  </div>
                  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email</label>
                    <input class="form-control" type="text" value="<?php echo $userEmail?>" name="edit_email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Password</label>
                    <input class="form-control" type="password" value="<?php echo $password?>" name="edit_password">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group mb-3">
                        <label for="customFile">Photo</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="edit_foto">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No HP</label>
                    <input class="form-control" type="text" value="<?php echo $nohp?>" name="edit_nohp">
                  </div>
                </div>
                </div>
                <div class="form-group">
                      <label for="inputState5">Kecamatan</label>
                      <select id="inputState5" class="form-control" name="edit_kecamatan">
                        <option selected=""><?php echo $kecamatan?></option>
                        <option>Ajung</option>
                        <option>Ambulu</option>
                        <option>Arjasa</option>
                        <option>Balung</option>
                        <option>Bangsalsari</option>
                        <option>Gumuk Mas</option>
                        <option>Jelbuk</option>
                        <option>Jenggawah</option>
                        <option>Jombang</option>
                        <option>Kalisat</option>
                        <option>Kaliwates</option>
                        <option>Kencong</option>
                        <option>Ledokombo</option>
                        <option>Mayang</option>
                        <option>Mumbulsari</option>
                        <option>Pakusari</option>
                        <option>Panti</option>
                        <option>Patrang</option>
                        <option>Puger</option>
                        <option>Rambipuji</option>
                        <option>Semboro</option>
                        <option>Silo</option>
                        <option>Sukorambi</option>
                        <option>Sukowono</option>
                        <option>Sumber Baru</option>
                        <option>Sumber Jambe</option>
                        <option>Sumber Sari</option>
                        <option>Tanggul</option>
                        <option>Tempurejo</option>
                        <option>Umbulsari</option>
                        <option>Wuluhan</option>
                      </select>
                    </div>
                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Kota</label>
                    <input class="form-control" type="text" value="<?php echo $kota?>" name="edit_kota">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">provinsi</label>
                    <input class="form-control" type="text" value="<?php echo $provinsi?>" name="edit_provinsi">
                  </div>
                </div>
                </div>
                
                <div class="mb-3">
                   <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="edit_alamat"><?php echo $alamat?></textarea>
                </div>
                <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn mb-2 btn-primary" type="submit" name="submit">Ubah Profile</button>
                    </div>
                </div>
                
              </div>
                    </div>
                  </form>

                
              </div>

            </div>
            <?php 
            }
            ?>
      </main>
      <!-- main -->
  </div>
  <!-- .wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
      </script>
</body>

</html>
<!-- Syntax Edit income --><?php error_reporting(0);

$namalengkap=$_POST['edit_namalengkap'];
$user=$_POST['edit_username'];
$userEmail=$_POST['edit_email'];
$nohp=$_POST['edit_nohp'];
$password=$_POST['edit_password'];
$kecamatan=$_POST['edit_kecamatan'];
$kota=$_POST['edit_kota'];
$provinsi=$_POST['edit_provinsi'];
$alamat=$_POST['edit_alamat'];
// $tglmasuk = date('Y-m-d', strtotime($_POST['txt_tgl_masuk']));
// $userAlamat = $_POST['txt_alamat'];


$foto=$_FILES['edit_foto']['name'];
$file_tmp=$_FILES['edit_foto']['tmp_name'];
move_uploaded_file($file_tmp, './foto/user/'. $foto);

if (isset($_POST['submit'])) {
  if (isset($_POST['submit'])) {
    if ($foto=="") {
      $sql=mysqli_query($koneksi, "UPDATE `user` SET namalengkap='$namalengkap', username = '$user', nohp = '$nohp', email = '$userEmail', password= '$password', kecamatan='$kecamatan', kota='$kota', provinsi='$provinsi', alamat='$alamat' WHERE id='$iduser'");

      echo "<script>
Swal.fire( {
          title : 'Data Berhasil Diubah', text: '', icon: 'success', confirmButtonText: 'OK'
        }

      ).then((result)=> {
          if (result.value) {
            window.location='profil.php';
          }
        }

      )</script>";

    }

    else {
      $sql=mysqli_query($koneksi, "UPDATE `user` SET namalengkap='$namalengkap', foto='$foto', username = '$user', foto = '$foto', nohp = '$nohp', email = '$userEmail', password= '$password', kecamatan='$kecamatan', kota='$kota', provinsi='$provinsi', alamat='$alamat' WHERE id='$iduser'");

      echo "<script>
Swal.fire( {
          title : 'Data Berhasil Diubah', text: '', icon: 'success', confirmButtonText: 'OK'
        }

      ).then((result)=> {
          if (result.value) {
            window.location='profil.php';
          }
        }

      )</script>";

    }
  }

  else {
    echo "<script>
Swal.fire( {
        title : 'Data Berhasil Diubah', text: '', icon: 'success', confirmButtonText: 'OK'
      }

    ).then((result)=> {
        if (result.value) {
          window.location='profil.php';
        }
      }

    )</script>";

  }
}

?>