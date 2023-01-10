<?php
require ("./config.php");
session_start();
if( !isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Absen</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>

<body>

    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>

        <tbody>

            

            <?php

            $id = $_GET['id'];

            $query  = "SELECT absen.id ,karyawan.nama, karyawan.foto, absen.status, absen.tanggal, absen.keterangan FROM absen INNER JOIN karyawan ON karyawan.id=absen.id_karyawan WHERE karyawan.id = '$id'";
            $result = mysqli_query($koneksi, $query);

            $no     = 1;

            while ($row = mysqli_fetch_array($result)) {

                $ReportId = $row['id'];
                $ReportNama = $row['nama'];
                $ReportStatus = $row['status'];
                $ReportKeterangan = $row['keterangan'];
                $ReportTanggal   = $row['tanggal'];


            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $ReportNama ?></td>
                    <td><?php echo $ReportStatus ?></td>
                    <td><?php echo $ReportKeterangan ?></td>
                    <td><?php echo $ReportTanggal ?></td>
                </tr>

            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

</body>


</html>