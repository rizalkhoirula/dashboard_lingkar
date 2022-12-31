<?php
require ("./config.php");
session_start();
if( !isset($_SESSION["login"])){
  header("location: login.php");
  exit;
} else {
  $ssuser = $_SESSION["ssuser"];
  $ssfullname = $_SESSION["ssfullname"];
}
      
    $data_penjualan = mysqli_query($koneksi, "SELECT tgl_income, SUM(jumlah) AS total FROM income GROUP BY tgl_income");

    $data_tanggal = array();
    $data_total = array();

    while ($data = mysqli_fetch_array($data_penjualan)) {
      $data_tanggal[] = date('d-m-Y', strtotime($data['tgl_income'])); // Memasukan tanggal ke dalam array
      $data_total[] = $data['total']; // Memasukan total ke dalam array
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
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome <?php echo $ssfullname?> !</h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span
                        class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span
                        class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- widgets -->
            <div class="row my-4">
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Page Views</small>
                        <h3 class="card-title mb-0"><?php
                        require ("./config.php");
                          $query = "SELECT DISTINCT SUM(value) AS totalvisitor FROM stat WHERE DATE(date)=DATE(curdate())";
                          $querysum = mysqli_query($koneksi,$query);

                        while ($row = mysqli_fetch_array($querysum)) {
                          $total = $row['totalvisitor'];
                          // echo '<h3> ' . $total . '</h3>';
                        
                        ?>
                          <?php
                          if ($total == '') {
                            echo "<h3>0</h3>";
                          } else {
                            echo number_format($total, 0, ',', '.');
                          }
                          ?>
                          <?php
                        }
                          ?>
                          <small class="text-muted mb-1"> &nbsp; &nbsp;Viewers</small>
                        </h3>
                        <small class="text-muted mb-1">Hari Ini</small>

                      </div>
                       <!-- <small class="text-muted mb-1">Hari Ini</small> -->
                      <!-- <div class="col-4 text-right">
                        <span class="sparkline inlineline"></span>
                      </div> -->
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Total Pendapatan</small>
                        <h3 class="card-title mb-0">
                        
                        <?php
                        require ("./config.php");
                          $query = "SELECT DISTINCT SUM(jumlah) AS total FROM income WHERE MONTH(tgl_income)=MONTH(curdate()) AND YEAR(tgl_income)=YEAR(curdate())";
                          $querysum = mysqli_query($koneksi,$query);

                        while ($row = mysqli_fetch_array($querysum)) {
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
                        <small class="text-muted mb-1">Bulan Ini</small>
                        
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinepie"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Total Pendapatan</small>
                        <h3 class="card-title mb-0">
                          <?php
                        require ("./config.php");
                          $query = "SELECT DISTINCT SUM(jumlah) AS total FROM income WHERE MONTH(tgl_income)=MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND YEAR(tgl_income)=YEAR(curdate())";
                          $querysum = mysqli_query($koneksi,$query);

                        while ($row = mysqli_fetch_array($querysum)) {
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
                        <p class="small text-muted mb-0"><span
                            class=" text-success"></span><span>Bulan Kemarin</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinebar"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
            </div> <!-- end section -->
            <!-- linechart -->
           

           
            <div class="card-body">
                      <canvas id="lineChartjs" width="1200" height="400"></canvas>
                    </div> 
          </div> <!-- /.col -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
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
  <script src="js/d3.min.js"></script>
  <script src="js/topojson.min.js"></script>
  <script src="js/datamaps.all.min.js"></script>
  <script src="js/datamaps-zoomto.js"></script>
  <script src="js/datamaps.custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="js/gauge.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script> 
  <script src="js/apexcharts.min.js"></script>
  <script src="js/apexcharts.custom.js"></script>
  <script>
    "use strict";
$("#modeSwitcher").on("click", function (e) {
        e.preventDefault(), modeSwitch(), location.reload()
    }), $(".collapseSidebar").on("click", function (e) {
        $(".vertical").hasClass("narrow") ? $(".vertical").toggleClass("open") : ($(".vertical").toggleClass("collapsed"), $(".vertical").hasClass("hover") && $(".vertical").removeClass("hover")), e.preventDefault()
    }), $(".sidebar-left").hover(function () {
        $(".vertical").hasClass("collapsed") && $(".vertical").addClass("hover"), $(".narrow").hasClass("open") || $(".vertical").addClass("hover")
    }, function () {
        $(".vertical").hasClass("collapsed") && $(".vertical").removeClass("hover"), $(".narrow").hasClass("open") || $(".vertical").removeClass("hover")
    }), $(".toggle-sidebar").on("click", function () {
        $(".navbar-slide").toggleClass("show")
    }),
    function (a) {
        a(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
            return a(this).next().hasClass("show") || a(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), a(this).next(".dropdown-menu").toggleClass("show"), a(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", function (e) {
                a(".dropdown-submenu .show").removeClass("show")
            }), !1
        })
    }(jQuery), $(".navbar .dropdown").on("hidden.bs.dropdown", function () {
        $(this).find("li.dropdown").removeClass("show open"), $(this).find("ul.dropdown-menu").removeClass("show open")
    }), $(".file-panel .card").on("click", function () {
        $(this).hasClass("selected") ? ($(this).removeClass("selected"), $(this).find("bg-light").removeClass("shadow-lg"), $(".file-container").removeClass("collapsed")) : ($(this).addClass("selected"), $(this).addClass("shadow-lg"), $(".file-panel .card").not(this).removeClass("selected"), $(".file-container").addClass("collapsed"))
    }), $(".close-info").on("click", function () {
        $(".file-container").hasClass("collapsed") && ($(".file-container").removeClass("collapsed"), $(".file-panel").find(".selected").removeClass("selected"))
    }), $(function () {
        $(".info-content").stickOnScroll({
            topOffset: 0,
            setWidthOnStick: !0
        })
    });
var basic_wizard = $("#example-basic");
basic_wizard.length && basic_wizard.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: !0
});
var vertical_wizard = $("#example-vertical");
vertical_wizard.length && vertical_wizard.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical"
});
var form = $("#example-form");
form.length && (form.validate({
    errorPlacement: function (e, a) {
        a.before(e)
    },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
}), form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (e, a, o) {
        return form.validate().settings.ignore = ":disabled,:hidden", form.valid()
    },
    onFinishing: function (e, a) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    },
    onFinished: function (e, a) {
        alert("Submitted!")
    }
}));
var ChartOptions = {
        maintainAspectRatio: !1,
        responsive: !0,
        legend: {
            display: !1
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: !1
                }
            }],
            yAxes: [{
                gridLines: {
                    display: !1,
                    color: colors.borderColor,
                    zeroLineColor: colors.borderColor
                }
            }]
        }
    },
    ChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
        datasets: [{
            label: "Visitors",
            barThickness: 10,
            backgroundColor: base.primaryColor,
            borderColor: base.primaryColor,
            pointRadius: !1,
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [28, 48, 40, 19, 64, 27, 90, 85, 92],
            fill: "",
            lineTension: .1
        }, {
            label: "Orders",
            barThickness: 10,
            backgroundColor: "rgba(210, 214, 222, 1)",
            borderColor: "rgba(210, 214, 222, 1)",
            pointRadius: !1,
            pointColor: "rgba(210, 214, 222, 1)",
            pointStrokeColor: "#c1c7d1",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 42, 43, 55, 40, 36, 68],
            fill: "",
            borderWidth: 2,
            lineTension: .1
        }]
    },
    lineChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
        datasets: [{
            label: "Visitors",
            barThickness: 10,
            borderColor: base.primaryColor,
            pointRadius: !1,
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [28, 48, 30, 19, 64, 27, 90, 85, 92],
            fill: "",
            lineTension: .2
        }, {
            label: "Sales",
            barThickness: 10,
            borderColor: "rgba(40, 167, 69, 0.8)",
            pointRadius: !1,
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [8, 18, 20, 29, 26, 7, 30, 25, 48],
            fill: "",
            borderWidth: 2,
            lineTension: .2
        }, {
            label: "Orders",
            backgroundColor: "rgba(210, 214, 222, 1)",
            borderColor: "rgba(210, 214, 222, 1)",
            pointRadius: !1,
            pointColor: "rgba(210, 214, 222, 1)",
            pointStrokeColor: "#c1c7d1",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 42, 43, 55, 40, 36, 68],
            fill: "",
            borderWidth: 2,
            lineTension: .2
        }]
    },
    pieChartData = {
        labels: ["Clothing", "Shoes", "Electronics", "Books", "Cosmetics"],
        datasets: [{
            data: [18, 30, 42, 12, 7],
            backgroundColor: chartColors,
            borderColor: colors.borderColor
        }]
    },
    areaChartData = {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Visitors",
            barThickness: 10,
            backgroundColor: base.primaryColor,
            borderColor: base.primaryColor,
            pointRadius: !1,
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [19, 64, 37, 76, 68, 88, 54, 46, 58],
            lineTension: .1
        }, {
            label: "Orders",
            barThickness: 10,
            backgroundColor: "rgba(210, 214, 222, 1)",
            borderColor: "rgba(255, 255, 255, 1)",
            pointRadius: !1,
            pointColor: "rgba(210, 214, 222, 1)",
            pointStrokeColor: "#c1c7d1",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [42, 43, 55, 40, 36, 68, 22, 66, 49],
            lineTension: .1
        }]
    },
    barChartjs = document.getElementById("barChartjs");
barChartjs && new Chart(barChartjs, {
    type: "bar",
    data: ChartData,
    options: ChartOptions
});

var lineChartjs = document.getElementById('lineChartjs');
        var lineChartjs = new Chart(lineChartjs, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($data_tanggal) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Penghasilan',
              data: <?php echo json_encode($data_total) ?>,
                    borderColor: "#29B0D0",
              backgroundColor: 'transparent',
              borderWidth: 2
            }]
          }
        });
var pieChartjs = document.getElementById("pieChartjs");
pieChartjs && new Chart(pieChartjs, {
    type: "pie",
    data: pieChartData,
    options: {
        maintainAspectRatio: !1,
        responsive: !0
    }
});
var areaChartjs = document.getElementById("areaChartjs");
areaChartjs && new Chart(areaChartjs, {
    type: "line",
    data: areaChartData,
    options: ChartOptions
}), $(".sparkline").length && ($(".inlinebar").sparkline([3, 2, 7, 5, 4, 6, 8], {
    type: "bar",
    width: "100%",
    height: "32",
    barColor: base.primaryColor,
    barWidth: 4,
    barSpacing: 2
}), $(".inlineline").sparkline([2, 0, 5, 7, 4, 6, 8], {
    type: "line",
    width: "100%",
    height: "32",
    defaultPixelsPerValue: 5,
    lineColor: base.primaryColor,
    fillColor: "transparent",
    minSpotColor: !1,
    spotColor: !1,
    highlightSpotColor: "",
    maxSpotColor: !1,
    lineWidth: 2
}), $(".inlinepie").sparkline([5, 7, 4, 6, 8], {
    type: "pie",
    height: "32",
    width: "32",
    sliceColors: chartColors
}));
var gauge1, svgg1 = document.getElementById("gauge1");
svgg1 && (gauge1 = Gauge(svgg1, {
    max: 100,
    dialStartAngle: -90,
    dialEndAngle: -90.001,
    value: 100,
    showValue: !1,
    label: function (e) {
        return Math.round(100 * e) / 100
    },
    color: function (e) {
        return e < 20 ? base.primaryColor : e < 40 ? base.successColor : e < 60 ? base.warningColor : base.dangerColor
    }
}), function e() {
    gauge1.setValue(90), gauge1.setValueAnimated(30, 1), window.setTimeout(e, 6e3)
}());
var gauge2, svgg2 = document.getElementById("gauge2");
svgg2 && (gauge2 = Gauge(svgg2, {
    max: 100,
    value: 46,
    dialStartAngle: -0,
    dialEndAngle: -90.001
}), function e() {
    gauge2.setValue(40), gauge2.setValueAnimated(30, 1), window.setTimeout(e, 6e3)
}());
var gauge3, svgg3 = document.getElementById("gauge3");
svgg3 && (gauge3 = Gauge(svgg3, {
    max: 100,
    dialStartAngle: -90,
    dialEndAngle: -90.001,
    value: 80,
    showValue: !1,
    label: function (e) {
        return Math.round(100 * e) / 100
    }
}));
var gauge4, svgg4 = document.getElementById("gauge4");
svgg4 && (gauge4 = Gauge(document.getElementById("gauge4"), {
    max: 500,
    dialStartAngle: 90,
    dialEndAngle: 0,
    value: 50
}));
  </script>
</body>

</html>