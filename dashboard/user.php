<?php
require ("./config.php");
session_start();
if( !isset($_SESSION["login"])){
  header("location: login.php");
  exit;
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
                <a class="nav-link pl-3" href="./makanan.php"><span class="ml-1 item-text">Makanan</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./minuman.php"><span class="ml-1 item-text">Minuman</span></a>
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
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="mb-2 page-title">Data User</h2>
            <p class="card-text">Ini adalah data Administrator yang mempunyai akses ke dashboard  lingkar angkringan dan cafe</p>


            <!-- Pop up Add User -->
            <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Add User</button>

            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content"><br>

                      <center> <h5 class="modal-title" id="defaultModalLabel">Add User</h5></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-footer">
                      </div>
                      
                <form action="user.php" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text" value="" name="add_namalengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control" type="text" value="" name="add_username">
                  </div>
                </div>
                  </div>
                  <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email</label>
                    <input class="form-control" type="text" value="" name="add_email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Password</label>
                    <input class="form-control" type="password" value="" name="add_password">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group mb-3">
                        <label for="customFile">Photo</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="add_foto">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No HP</label>
                    <input class="form-control" type="text" value="" name="add_nohp">
                  </div>
                </div>
                </div>
                <div class="form-group">
                      <label for="inputState5">Kecamatan</label>
                      <select id="inputState5" class="form-control" name="add_kecamatan">
                        <option selected=""></option>
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
                    <input class="form-control" type="text" value="jember" name="add_kota">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">provinsi</label>
                    <input class="form-control" type="text" value="Jawa Timur" name="add_provinsi">
                  </div>
                </div>
                </div>
                
                <div class="mb-3">
                   <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="add_alamat"></textarea>
                </div>
                <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn mb-2 btn-primary" type="submit" name="add-user">Add User</button>
                    </div>
                </div>
                
              </div>
                    </div>
                  </form>

                
              </div>

            </div>
            <!-- End Pop Up -->




            <div class="row my-4">
              <!-- Small table -->
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <table id="tableku" class="table datatables">
                       <thead>
                        <tr>
                          <th>NO</th>
                          <th>Nama Lengkap</th>
                          <th>Username</th>
                          <th>Photo profile</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Kecamatan</th>
                          <th>kota</th>
                          <th>provinsi</th>
                          <th>alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          $query = "SELECT * FROM user";
                          $result = mysqli_query($koneksi, $query);
                          $noUrut = 0;
                          while ($row = mysqli_fetch_array($result)) {
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

$noUrut++;
                          ?>
                          
                          <td><?php echo $noUrut; ?></td>
                          <td><?php echo $namalengkap; ?></td>
                            <td><?php echo $userName; ?></td>
                            <td>

                              <span class="avatar avatar-sm mt-2">
                                <img src="./foto/user/<?php echo $foto; ?>" alt="..." class="avatar-img rounded-circle">
                              </span>

                            </td>
                            <td><?php echo $userEmail; ?></td>
                            <td><?php echo $nohp; ?></td>
                            <td><?php echo $kecamatan; ?></td>
                            <td><?php echo $kota; ?></td>
                            <td><?php echo $provinsi; ?></td>
                            <td><?php echo $alamat; ?></td>

                            <td>
                              <!-- <button class="btn btn-primary btn-sm ms-auto" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</button> -->
                              <button class="btn  btn-danger btn-sm ms-auto" data-toggle="modal" data-target="#verticalModal<?php echo $row['id'] ?>">Delete</button>
                            </td>

                        </tr>
                        <!-- Pop Up Edit -->

                        <!-- <div class="modal fade modal-left modal-slide" id="modal-edit<?php echo $row['id'] ?>" tabdashboard="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm" role="document" id="anjaymodal">
                            <div class="modal-content >"><br>

                              <div class="modal-header">

                                <h5 class="modal-title" id="defaultModalLabel">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="user.php?id=<?= $row['id'] ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body-add">


                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Usernama</label>
                                    <input class="form-control" type="text" value="<?php echo $userName; ?>" placeholder="Enter Name" maxlength="30" name="username" required />

                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="customFile">Photo</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="customFile" name="fotoedit" value="<?php echo $foto; ?>">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email</label>
                                    <input class="form-control" type="email" value="<?php echo $userEmail; ?>" placeholder="Enter Email" maxlength="30" name="email" />

                                  </div>
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Hp</label>
                                    <input class="form-control" name="nohp" type="text" value="<?php echo $nohp; ?>" placeholder="Enter No Hp" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" name="txt_nohp" id="txt_nohp" />

                                  </div>
                                 <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Passwod</label>
                                    <input class="form-control" type="password " value="<?php echo $password; ?>" placeholder="Enter password" maxlength="30" name="pass" />

                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" >Close</button>
                                  <button class="btn mb-2 btn-primary" type="submit" name="submit">Edit</button>
                                </div>
                              </form>

                            </div>
                          </div>
                        </div> -->

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
                              <form action="user.php?id=<?= $row['id'] ?>" method="post">
                                <div class="modal-body">
                                  <div class="row">

                                    Apakah Anda Yakin ingin menghapus data dari : <?php echo $row['namalengkap'] ?>
                                    <br>
                                    <br>

                                  </div>

                                  <div class="modal-footer">

                                    <button class="btn btn-danger btn-sm ms-auto" name="delete">Delete</button>
                                    <button class="btn btn-success btn-sm ms-auto" data-dismiss="modal">Close</button>
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
    $(document).ready(function() {
      $('#tableku').DataTable();
    });
  </script>

  <script src="js/apps.js"></script>
</body>

</html>

<!-- Syntax Add User -->

<?php
// error_reporting(0);
// if (isset($_POST['add-user'])) {
//   $userNama = $_POST['txt_nama'];
//   $userNoHp = $_POST['txt_nohp'];
//   $userMail = $_POST['txt_email'];
//   $userPass = $_POST['txt_pass'];
//   // $userAlamat = $_POST['txt_alamat'];


//   $foto = $_FILES['foto']['name'];
//   $file_tmp = $_FILES['foto']['tmp_name'];
//   move_uploaded_file($file_tmp, './foto/user/' . $foto);

//   $query    = "INSERT INTO user SET username= '$userNama', foto= '$foto', nohp= '$userNoHp',  email= '$userMail', password= '$userPass'";
//   $result   = mysqli_query($koneksi, $query);

//   if ($query) {
//     echo "<script>
//   	Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
//   	}).then((result) => {if (result.value)
//   		{window.location = 'user.php';}
//   	})</script>";
//   } else {

//     echo "<script>
//   		Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
//   		}).then((result) => {if (result.value)
//   			{window.location = 'user.php';}
//   		})</script>";
//   }
 
// }
error_reporting(0);
if (isset($_POST['add-user'])) {
$namalengkap = $_POST['add_namalengkap'];
$user = $_POST['add_username'];
$userEmail = $_POST['add_email'];
$nohp = $_POST['add_nohp'];
$password = $_POST['add_password'];
$kecamatan = $_POST['add_kecamatan'];
$kota = $_POST['add_kota'];
$provinsi = $_POST['add_provinsi'];
$alamat = $_POST['add_alamat'];
  // $tglmasuk = date('Y-m-d', strtotime($_POST['txt_tgl_masuk']));
  // $userAlamat = $_POST['txt_alamat'];


  $foto = $_FILES['add_foto']['name'];
  $file_tmp = $_FILES['add_foto']['tmp_name'];
  move_uploaded_file($file_tmp, './foto/user/' . $foto);

  $query = "INSERT INTO user SET namalengkap='$namalengkap', username = '$user', foto = '$foto', nohp = '$nohp', email = '$userEmail', password= '$password', kecamatan='$kecamatan', kota='$kota', provinsi='$provinsi', alamat='$alamat'";
  $result = mysqli_query($koneksi, $query);

  if ($query) {
    echo "<script>
  	Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
  	}).then((result) => {if (result.value)
  		{window.location = 'user.php';}
  	})</script>";
  } else {

    echo "<script>
  		Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
  		}).then((result) => {if (result.value)
  			{window.location = 'user.php';}
  		})</script>";
  }
}

?>

<!-- END Add User -->


<!-- Syntax Edit User -->
<?php
require('config.php');
error_reporting(0);
$eid = $_GET['id'];
$enama = $_POST['username'];
// $etglmasuk = date('Y-m-d', strtotime($_POST['tgl_masuk']));
$eemail = $_POST['email'];
$enohp = $_POST['nohp'];
$epass = $_POST['pass'];
$efoto = $_FILES['fotoedit']['name'];
$file_tmp = $_FILES['fotoedit']['tmp_name'];
move_uploaded_file($file_tmp, './foto/user/' . $efoto);


if (isset($_POST['submit'])) {
  if (isset($_POST['submit'])) {
    if ($efoto == "") {
      $sql = mysqli_query($koneksi, "UPDATE `user` SET username='$enama',nohp='$enohp',email='$eemail', password='$epass' WHERE id='$eid'");
      echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'user.php';}
            })</script>";
    } else {
      $sql = mysqli_query($koneksi, "UPDATE `user` SET username='$enama', foto='$efoto', nohp='$enohp',email='$eemail', password='$epass' WHERE id='$eid'");
      echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'user.php';}
            })</script>";
    }
  } else {
    echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'user.php';}
            })</script>";
  }
}



// require('./koneksi.php');
// error_reporting(0);
// $eid = $_GET['id'];
// $enama = $_POST['username'];
// // $etglmasuk = date('Y-m-d', strtotime($_POST['tgl_masuk']));
// $eemail = $_POST['email'];
// $enohp = $_POST['nohp'];
// $epass = $_POST['pass'];
// $efoto = $_FILES['fotoedit']['name'];
// $file_tmp = $_FILES['fotoedit']['tmp_name'];
// move_uploaded_file($file_tmp, '../foto/user/' . $efoto);


// if (isset($_POST['submit'])) {
//   if (isset($_POST['submit'])) {
//     if ($foto == "") {
//       $sql = mysqli_query($koneksi, "UPDATE `user` SET username='$enama',nohp='$enohp',email='$eemail',password='$epass' WHERE id='$eid'");
//       // header('location:users.view.php');
//       echo "<script>
//                    Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
//             }).then((result) => {if (result.value)
//                 {window.location = 'user.php';}            
//               })</script>";
//     } else {
//       $sql = mysqli_query($koneksi, "UPDATE `user` SET username='$enama', foto='$efoto', nohp='$enohp',email='$eemail', password='$epass' WHERE id='$eid'");
//       // header('location:users.view.php');
//       echo "<script>
//              Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
//              }).then((result) => {if (result.value)
//                  {window.location = 'user.php';}
//              })</script>";
//     }
//   } else {
//     echo "<script>
//              Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
//              }).then((result) => {if (result.value)
//                  {window.location = 'user.php';}
//              })</script>";
//   }
// }


error_reporting(0);

$did = $_GET['id'];
if (isset($_POST['delete'])) {

  $querydel = "DELETE FROM user WHERE id = '$did'";
  $result = mysqli_query($koneksi, $querydel);

  if ($result) {
    echo "<script>
    Swal.fire({title: 'Data Berhasil Dihapus',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'user.php';}
    })</script>";
  } else {
    echo "<script>
    Swal.fire({title: 'Data Gagal Dihapus',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'user.php';}
    })</script>";
  }
}
?>