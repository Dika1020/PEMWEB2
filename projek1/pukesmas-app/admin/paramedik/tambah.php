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
                        <h1 class="h3 mb-0 text-gray-800">Data Periksa Parademik</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-body">
                                <?php
                                
                                if (isset($_POST['nama'])) {
                                    $nama = $_POST['nama'];
                                    $gender = $_POST['gender'];
                                    $tmp_lahir = $_POST['tmp_lahir'];
                                    $tgl_lahir = $_POST['tgl_lahir'];
                                    $kategori = $_POST['kategori'];
                                    $telpon = $_POST['telpon'];
                                    $alamat = $_POST['alamat'];
                                    $unit_kerja_id = $_POST['unit_kerja_id'];                                
                                    $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                                    $stmt = $dbh->prepare($sql);
                                    $stmt->execute([$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unit_kerja_id, ]);
                                    echo "<script>alert('Data paramedik berhasil ditambahkan.')</script>";
                                    echo '<meta http-equiv="refresh" content="0; url=index.php">';
                                }
                                ?>
                                <form action="" method="post">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="tmp_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kategori">Kategori</label>
                                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telpon">No Telpon</label>
                                                <input type="tel" class="form-control" id="telpon" name="telpon" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="unit_kerja">Unit Kerja</label>
                                                <select class="form-control" id="unit_kerja" name="unit_kerja_id" required>
                                            <?php
                                            $sql_unit_kerja = "SELECT * FROM unit_kerja";
                                            $stmt_unit_kerja = $dbh->prepare($sql_unit_kerja);
                                            $stmt_unit_kerja->execute();
                                            $result_unit_kerja = $stmt_unit_kerja->fetchAll();
                                            foreach ($result_unit_kerja as $row_unit_kerja) {
                                                echo "<option value='{$row_unit_kerja['id']}'>{$row_unit_kerja['nama']}</option>";
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
