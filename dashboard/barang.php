<?php
require ("./config.php");
session_start();
if( !isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}  else {
  $ssuser = $_SESSION["ssuser"];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Dashboard Lingkar Cafe</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
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
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
          placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">



        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./dashboard.php" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./dashboard.php">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <!-- SIDEBAR -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="dashboard.php">
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
                <a class="nav-link pl-3" href="./makanan.php"><span class="ml-1 item-text">Menu</span></a>
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
                <a class="nav-link pl-3" href="./income_harian.php"><span class="ml-1">Penghasilan Perhari</span></a>
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
    
                              

    <main role="main" class="main-content">
      <div class="container-fluid">
        
        <div class="row justify-content-right">
          
          
          <div class="col-12">
            <div class="col-md-4" id="pp">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-right">
                      <div class="col">
                        <small class="text-muted mb-1">Total Pengeluaran</small>
                        <h3 class="card-title mb-0">
                        
                        <?php
                        require ("./config.php");
                        if (isset($_POST['from_date']) && isset($_POST['to_date'])) {
                  $from_date = $_POST['from_date'];
                  $to_date = $_POST['to_date'];

                  $filter_dek = ("SELECT SUM(harga) AS total FROM barang WHERE tanggal BETWEEN '$from_date' AND '$to_date'");
                  $result   = mysqli_query($koneksi, $filter_dek);

                }else{

                          $query = "SELECT SUM(harga) AS total FROM barang WHERE DATE(tanggal)=DATE(curdate()) AND MONTH(tanggal)=MONTH(curdate()) AND YEAR(tanggal)=YEAR(curdate())";
                          $result = mysqli_query($koneksi,$query);
                  }


                        while ($row = mysqli_fetch_array($result)) {
                          $total = $row['total'];
                          // echo '<h3> ' . $total . '</h3>';
                        
                        ?>
                          <?php
                          if ($total == '') {
                            echo "<h3>Rp. 0</h3>";
                          } else {
                            echo "Rp. " . number_format($total, 0, ',', '.');
                          }
                          ?>
                          <?php
                        }
                          ?>
                    
                        </h3>
                        <small class="text-muted mb-1">Hari Ini</small>
                        
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinepie"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              
              <style>
                #pp{
                    float: right;
                  }
            </style> 
            <h2 class="mb-2 page-title">Data Barang</h2>
            
            <p class="card-text">Ini adalah data barang masuk dan keluar di lingkar angkringan dan cafe</p>
            

            


            <!-- Pop up Add Barang -->

            <form action="" method="post">


            <div class="form-group">
              
            <button type="button" class="btn mb-2 btn-success" data-toggle="modal" data-target=".modal-right">Add Barang</button>
            &nbsp;&nbsp;&nbsp;&nbsp;

            
            

           
                <input class="btn mb-2 btn-success" value="<?php if (isset($_POST['from_date'])) {
                                                                                            echo $_POST['from_date'];
                                                                                          }  ?>" type="date" name="from_date" />

       

              <a class="btn mb-2 btn-primary" aria-expanded="false">
                To Date
                                                                                        </a>
        

             
                <input class="btn mb-2 btn-success" value="<?php if (isset($_POST['to_date'])) {
                                                                                            echo $_POST['to_date'];
                                                                                          }  ?>" type="date" name="to_date" />

<button class="btn mb-2 btn-success" type="submit" aria-expanded="false">
                Filter
              </button>
              </div>
              
              </form>
                                                                                          
          

            <div class="modal fade modal-right modal-slide" tabdashboard="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document" id="anjaymodal">
                <div class="modal-content"><br>

                  <div class="modal-header">

                    <h5 class="modal-title" id="defaultModalLabel">Add Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="barang.php" method="post">

                    <div class="modal-body-add">

                 <div class="form-group">

                </div>
                <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Karyawan</label>
                        <input class="form-control" type="text" value="<?php echo $ssuser ?>" placeholder="" maxlength="30" name="add-namakaryawan" disabled />

                      </div>

                <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Barang</label>
                        <input class="form-control" type="text" value="" placeholder="Enter Name" maxlength="30" name="add-namabarang" required />

                      </div>



                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis</label>
                  <select class="form-control" name="add-jenis" required>
                  <option>Pilih Jenis</option>
                    <option value="basah">basah</option>
                    <option value="kering">Kering</option>
                    

                  </select>
                </div>
                 <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Jumlah</label>
                        <input class="form-control" name="add-jumlah" type="text" value="" placeholder="Enter Jumlah" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" name="add-jumlah" id="add-jumlah" required />

                      </div>

                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Harga</label>
                        <input class="form-control" name="add-harga" type="text" value="" placeholder="Enter harga" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" name="add-harga" id="add-harga" required />

                      </div>


                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Keterangan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="add-keterangan" placeholder="Enter Keterangan" maxlength="500" rows="5"></textarea>
                </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn mb-2 btn-primary" type="submit" name="add-barang">Add Barang</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
            <!-- End Pop Up Add Karyawan-->




            <div class="row my-4">
              <!-- Small table -->
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <table id="tableku" class="table datatables">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>nama Karyawan</th>
                          <th>Nama Barang</th>
                          <th>Jenis</th>
                          <th>Tanggal</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php

if (isset($_POST['from_date']) && isset($_POST['to_date'])) {

  $from_date = $_POST['from_date'];
  $to_date = $_POST['to_date'];

  $filter_dek = ("SELECT * FROM barang WHERE tanggal BETWEEN '$from_date' AND '$to_date'");
  $result   = mysqli_query($koneksi, $filter_dek);
}else{




                          $query = "SELECT * from barang where DATE(tanggal)=DATE(curdate());";
                          $result = mysqli_query($koneksi, $query);
                        }
                          $no = 0;
                          while ($row = mysqli_fetch_array($result)) {
                            
                            $KaryawanId = $row['karyawan'];
                            $AbsenId = $row['id'];
                            $barangNama = $row['nama_barang'];
                            $jenisbarang = $row['jenis'];
                            $barangTanggal = $row['tanggal'];
                          $barangjumlah = $row['jumlah'];
                            $barangKeterangan = $row['keterangan'];
                            $harga = $row['harga'];
                            // $foto = $row['foto'];

$no++;
                          ?>
                        <tr>
                          
  
                          <td><?php echo $no; ?></td>
                          <td><?php echo $KaryawanId; ?></td>
                          
                            <td><?php echo $barangNama; ?></td>
                            
                           
                            <td><?php echo $jenisbarang; ?></td>
                            <td><?php echo $barangTanggal; ?></td>
                            <td><?php echo $barangjumlah; ?></td>
                            <td><?php echo  "Rp. ". number_format ($harga,0,',','.'); ?></td>
                            <td>
                            <button class="btn btn-primary btn-sm ms-auto" data-toggle="modal" data-target="#modal-keterangan<?php echo $row['id'] ?>">Lihat</button>
                            </td>

                            <td>
                              <button class="btn btn-primary btn-sm ms-auto" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</button>
                              <a class="btn btn-success btn-sm ms-auto" target="_blank" href="export_absen.php?id=<?= $row['idkaryawan'] ?>">Export</a>
                              <button class="btn btn-danger btn-sm ms-auto" data-toggle="modal" data-target="#verticalModal<?php echo $row['id'] ?>">Delete</button>
                            </td>
                        </tr>


                         <!-- Pop Up Keterangan -->

                         <div class="modal fade" id="modal-keterangan<?php echo $row['id'] ?>" tabdashboard="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="verticalModalTitle">Keterangan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="absen.php?id=<?= $row['id'] ?>" method="post">
                                <div class="modal-body-add">


                                <div class="form-group">
                  
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="add-keterangan" placeholder="Enter Keterangan" maxlength="500" rows="5"><?php echo $barangKeterangan ?></textarea>
                </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" >Close</button>
                                  <!-- <button class="btn mb-2 btn-primary" type="submit" name="submit">Edit</button> -->
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>
                          </div>

                        <!-- End Pop Up Keterangan -->


<!-- Pop Up Edit -->

                        <div class="modal fade modal-left modal-slide" id="modal-edit<?php echo $row['id'] ?>" tabdashboard="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm" role="document" id="anjaymodal">
                            <div class="modal-content >"><br>

                              <div class="modal-header">

                                <h5 class="modal-title" id="defaultModalLabel">Edit Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="barang.php?id=<?= $row['id'] ?>" method="post">

<div class="modal-body-add">




 <div class="form-group">

                </div>
                <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Karyawan</label>
                        <input class="form-control" type="text" value="<?php echo $ssuser ?>" placeholder="" maxlength="30" name="edit-namakaryawan" disabled />

                      </div>

                <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Barang</label>
                        <input class="form-control" type="text" value="<?php echo $barangNama?>" placeholder="Enter Name" maxlength="30" name="edit-namabarang" required />

                      </div>



                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis</label>
                  <select class="form-control" name="edit-jenis" required>
                  <option value="">Pilih Jenis lagi</option>
                    <option value="basah">basah</option>
                    <option value="kering">Kering</option>
                    

                  </select>
                </div>
                 <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Jumlah</label>
                        <input class="form-control" name="edit-jumlah" type="text" value="<?php echo $barangjumlah ?>" placeholder="Enter Jumlah" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" name="add-jumlah" id="add-jumlah" required />

                      </div>

                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Harga</label>
                        <input class="form-control" name="edit-harga" type="text" value="<?php echo  $harga ?>" placeholder="Enter harga" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" name="add-harga" id="add-harga" required />

                      </div>


                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Keterangan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="edit-keterangan"  placeholder="Enter Keterangan" maxlength="500" rows="5"><?php echo $barangKeterangan ?></textarea>
                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" >Close</button>
                                  <button class="btn mb-2 btn-primary" type="submit" name="edit-barang">Edit</button>
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>
                          </div>

                        <!-- End Pop Up Edit -->



                        <!-- Pop Up Delete -->
                        <div class="modal fade" id="verticalModal<?= $row['id'] ?>" tabdashboard="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="verticalModalTitle">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="barang.php?id=<?= $row['id'] ?>" method="post">
                                <div class="modal-body">
                                  <div class="row">

                                    Apakah Anda Yakin ingin menghapus data dari : <?php echo $row['nama_barang'] ?>
                                    <br>
                                    <br>

                                  </div>

                                  <div class="modal-footer">


                                    <!-- <a href="karyawan.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm ms-auto">Delete</a> -->

                                    <button class="btn btn-danger btn-sm ms-auto" name="delete-barang">Delete</button>
                                    <button class="btn btn-success btn-sm ms-auto" data-dismiss="modal">Close</button>
                                    <!-- <button class="btn btn-danger btn-sm ms-auto" href="hapus_karyawan.php?id=<?php echo $row['id']; ?>" data-close-delete>Close</button> -->
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- End Pop Up Delete -->
                      <?php
                          }
                      ?>



                      </tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div> <!-- simple table -->
            </div> <!-- end section -->
          </div> <!-- .col-12 -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
      <div class="modal fade modal-notif modal-slide" tabdashboard="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout dashboard, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-shortcut modal-slide" tabdashboard="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-5">
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-success justify-content-center">
                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Control area</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Activity</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Droplet</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Upload</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Users</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(document).ready(function () {
    $('#tableku').DataTable();
});
  </script>

  <script src="js/apps.js"></script>
</body>

</html>

<!-- Syntax Add Barang -->

<?php
error_reporting(0);
if (isset($_POST['add-barang'])) {
  $Addnamakaryawan = $_POST['add-namakaryawan'];
  $Addbarangjenis = $_POST['add-jenis'];
    $Addbarangnama = $_POST['add-namabarang'];
    $Addbarangjumlah = $_POST['add-jumlah'];
  $AddbarangKeterangan = $_POST['add-keterangan'];
  $harga = $_POST['add-harga'];
  // $tglmasuk = date('Y-m-d', strtotime($_POST['txt_tgl_masuk']));
  // $userAlamat = $_POST['txt_alamat'];


  $query    = "INSERT INTO barang SET karyawan  = '$ssuser', harga ='$harga', nama_barang = '$Addbarangnama', jenis = '$Addbarangjenis', jumlah ='$Addbarangjumlah',  keterangan = '$AddbarangKeterangan', tanggal = current_timestamp()";
  $result   = mysqli_query($koneksi, $query);

  if ($query) {
    echo "<script>
  	Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
  	}).then((result) => {if (result.value)
  		{window.location = 'barang.php';}
  	})</script>";
  } else {

    echo "<script>
  		Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
  		}).then((result) => {if (result.value)
  			{window.location = 'barang.php';}
  		})</script>";
  }
  // if($query)
  // {
  //   header("location:karyawan.php");
  // }
}

?>

<!-- END Add Karyawan -->


<!-- Syntax Edit Karyawan -->
<?php
require('config.php');
// error_reporting(1);
$eid = $_GET['id'];
$editnama = $_POST['edit-namabarang'];
$editjenis = $_POST['edit-jenis'];
$editjumlah = $_POST['edit-jumlah'];
$editharga = $_POST['edit-harga'];
$editketerangan = $_POST['edit-keterangan'];






if (isset($_POST['edit-barang'])) {
      $sql = mysqli_query($koneksi, "UPDATE `barang` SET nama_barang='$editnama', jenis='$editjenis', jumlah='$editjumlah', harga='$editharga', keterangan='$editketerangan' WHERE id='$eid'");

      if($sql){

        echo "<script>
        Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
            {window.location = 'barang.php';}
        })</script>";
      }else{
        
        echo "<script>
        Swal.fire({title: 'Data Gagal Diubah',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
            {window.location = 'barang.php';}
        })</script>";
      }
   
}
   

  




error_reporting(0);

$did = $_GET['id'];
if (isset($_POST['delete-barang'])) {

  $querydel = "DELETE FROM barang WHERE id = '$did'";
  $result = mysqli_query($koneksi, $querydel);

  if ($result) {
    echo "<script>
    Swal.fire({title: 'Data Berhasil Dihapus',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'barang.php';}
    })</script>";
  } else {
    echo "<script>
    Swal.fire({title: 'Data Gagal Dihapus',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'barang.php';}
    })</script>";
  }
}
?>