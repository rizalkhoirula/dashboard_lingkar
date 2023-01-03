<?php
require ("dashboard/config.php");
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
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

<!-- PPPP -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
              <!-- Small table -->
              <center>
             
              <div class="col-md-9">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <table id="tableku" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Photo</th>
                          <th>Category</th>
                          <th>Harga</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $query = "SELECT * FROM menu";
                          $result = mysqli_query($koneksi, $query);
                          $no = 0;
                          while ($row = mysqli_fetch_array($result)) {
                            $Namamenu = $row['nama'];
                            $foto = $row['foto'];
                            $category = $row['category'];
                            $harga = $row['harga'];

$no++;
                          ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                            <td><?php echo $Namamenu; ?></td>
                            <td>

                              <button class="btn btn-warning btn-sm ms-auto" data-toggle="modal" data-target="#modal-foto<?php echo $row['id'] ?>">Lihat</button>

                            </td>
                            <td><?php echo $category; ?></td>
                            <td><?php echo "Rp. ". number_format ($harga,0,',','.'); ?></td>
                        </tr>

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
                                <img src="dashboard/foto/menu/<?php echo $foto ?>" alt="Foto Menu" class="w-100 border-radius-lg shadow-sm" />
                              </div>
                              <div class="form-group align-middle text-center">

                                <a class='btn btn-warning btn-sm ms-auto' target='_blank' href='dashboard/foto/menu/<?php echo $foto ?>'>Lihat Foto</a>

                              </div>

                                  <div class="modal-footer">


                                    <!-- <a href="menu.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm ms-auto">Delete</a> -->

                                    
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>

                         <!-- End Pop Up Lihat Foto -->

                        
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
      </div> <!-- .container-fluid --></center>
                        
                        
<!-- PPPP -->


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
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                    <div class="col-lg-6 left-map">
                            <div id="map">     
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.147366223566!2d113.72266151386259!3d-8.168460184118109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695f7d0700c97%3A0x6b8c15e517c5f08a!2sAngkringan%20lingkar!5e1!3m2!1sen!2sid!4v1672647593684!5m2!1sen!2sid"  width="500%" height="150px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
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
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

  <script>
$(document).ready(function() {
    var table = $('#tableku').DataTable( {       
        scrollX:        true,
        scrollCollapse: true,
        autoWidth:         true,  
         paging:         true,       
        columnDefs: [
        { "width": "150px", "targets": [0,1,2,3,4] },       
      ]
    } );
} );
  </script>
  <style>
    div.dataTables_wrapper  div.dataTables_filter {
  width: 30%;
  float: none;
  text-align: center;
}
td.table-cell-edit{
    background-color: lightgoldenrodyellow;
} 
   </style>
    
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