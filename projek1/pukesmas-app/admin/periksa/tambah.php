<!DOCTYPE html>
<html lang="en">
<?php
include_once('../include/meta.php');
require_once('../dbkoneksi.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('../include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('../include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Periksa</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-body">
                                <?php
                                if (isset($_POST['tanggal'])) {
                                    $tanggal = $_POST['tanggal'];
                                    $berat = $_POST['berat'];
                                    $tinggi = $_POST['tinggi'];
                                    $tensi = $_POST['tensi'];
                                    $keterangan = $_POST['keterangan'];
                                    $dokter_id = $_POST['dokter_id'];
                                    $pasien_id = $_POST['pasien_id'];

                                    $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, dokter_id, pasien_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
                                    $stmt = $dbh->prepare($sql);
                                    $stmt->execute([$tanggal, $berat, $tinggi, $tensi, $keterangan, $dokter_id, $pasien_id]);
                                    echo "<script>alert('Data periksa berhasil ditambahkan.')</script>";
                                    echo '<meta http-equiv="refresh" content="0; url=index.php">';
                                }
                                ?>

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Periksa</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat">Berat Badan (kg)</label>
                                        <input type="number" class="form-control" id="berat" name="berat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi">Tinggi Badan (cm)</label>
                                        <input type="number" class="form-control" id="tinggi" name="tinggi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tensi">Tensi</label>
                                        <input type="text" class="form-control" id="tensi" name="tensi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dokter_id">Dokter</label>
                                        <select class="form-control" id="dokter_id" name="dokter_id" required>
                                            <option value="">Pilih Dokter</option>
                                            <?php
                                            $sql = "SELECT * FROM dokter";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $dok) {
                                                echo "<option value='$dok[id]'>$dok[nama]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pasien_id">Pasien</label>
                                        <select class="form-control" id="pasien_id" name="pasien_id" required>
                                            <option value="">Pilih Pasien</option>
                                            <?php
                                            $sql = "SELECT * FROM pasien";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $pass) {
                                                echo "<option value='$pass[id]'>$pass[nama]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once('../include/footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
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
