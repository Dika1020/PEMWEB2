<!DOCTYPE html>
<html lang="en">
<?php
include_once('include/meta.php');
require_once("dbkoneksi.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <title>Dashboard Rumah Sakit</title>  
                    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif; 
        background-color: #f8f9fa; 
    }
    .header {
        color: black;
        padding: 20px;
        text-align: center;
        background-color: #ffffff; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    }
    .container {
        margin: 20px auto;
        max-width: 800px;
        padding: 20px;
        background-color: #ffffff; 
        border-radius: 6px; 
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1); 
    }
    .info {
        margin-top: 10px;
        background-color: #e1e1e1;
        border-radius: 6px;
        box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
        padding: 20px;
    }
    h2 {
        margin-top: 0;
        color: black;
    }
    p {
        color: black;
    }
    
    iframe {
        border: 0;
        width: 100%;
        height: 450px; 
        border-radius: 6px; 
    }
</style>

</head>
<body>

<div class="header">
    <h1>Dashboard Rumah Sakit</h1>
</div>

<div class="container">

<!-- Lokasi Rumah Sakit -->
<div class="row">
    <div class="col-lg-12">
        <h2>Lokasi Rumah Sakit</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.475279700003!2d106.79408877378361!3d-6.461310063175123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9e6f2be9711%3A0x65694da0f20788e0!2sRS%20Citama!5e0!3m2!1sid!2sid!4v1713490530940!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


    <div class="info">
        <h2>DATA RUMAH SAKIT</h2>
        <p>Jumlah pasien <strong>20</strong></p>
        <p>Jumlah ruangan: <strong>70</strong></p>
        <p>Dokter Yang Berjaga <strong>14</strong></p>
    </div>
</div>
                    
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>