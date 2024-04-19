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
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Pemeriksaan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-body">
                                <form action="" method="post">

                                    <?php
                                    if (isset($_POST['tanggal'])) {
                                        $tanggal_pemeriksaan = $_POST['tanggal'];
                                        $berat_badan = $_POST['berat'];
                                        $tinggi_badan = $_POST['tinggi'];
                                        $tensi = $_POST['tensi'];
                                        $keterangan = $_POST['keterangan'];

                                        $sql = "UPDATE periksa SET tanggal = :tanggal, berat = :berat, tinggi = :tinggi, tensi = :tensi, keterangan = :keterangan WHERE id = :id";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->bindParam(':tanggal', $tanggal);
                                        $stmt->bindParam(':berat', $berat);
                                        $stmt->bindParam(':tinggi', $tinggi);
                                        $stmt->bindParam(':tensi', $tensi);
                                        $stmt->bindParam(':keterangan', $keterangan);
                                        $stmt->bindParam(':id', $_POST['id']);
                                        $stmt->execute();
                                        echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data pemeriksaan berhasil diperbarui.")</script>';
                                    }
                                    if (isset($_GET['id'])) {
                                        $sql = "SELECT * FROM periksa WHERE id = :id";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->bindParam(':id', $_GET['id']);
                                        $stmt->execute();
                                        $data = $stmt->fetch();
                                    ?>
                                    <div class="form-group">
                                        <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
                                        <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="<?= $data['tanggal'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan (kg)</label>
                                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="<?= $data['berat'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan (cm)</label>
                                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $data['tinggi'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tensi">Tensi</label>
                                        <input type="text" class="form-control" id="tensi" name="tensi" value="<?= $data['tensi'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <select class="form-control" id="keterangan" name="keterangan" required>
                                            <option value="Normal" <?= $data['keterangan'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
                                            <option value="Perlu pemantauan lebih lanjut" <?= $data['keterangan'] == 'Perlu pemantauan lebih lanjut' ? 'selected' : '' ?>>Perlu pemantauan lebih lanjut</option>
                                            <option value="Lainnya" <?= $data['keterangan'] == 'Lainnya' ? 'selected' : '' ?>>Keterangan Lainnya</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
