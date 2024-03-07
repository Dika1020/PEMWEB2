<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <h3 class="text-center">Daftar Harga</h3>
            <thead>
                <tr class="thead-dark">
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>TV 50 INCH</td>
                    <td>Rp6.000.000,00</td>
                </tr>
                <td>2</td>
                <td>Microwave </td>
                <td>Rp3.500.000,00</td>
                </tr>
                <td>3</td>
                <td>MESIN CUCI</td>
                <td>Rp2.000.000,00</td>
                </tr>
            </tbody>
        </table>

        <h2 class="text-center">Form Barang Elektronik</h2>
        <div class="row">
            <div class="col-md-12 m-4">
                <form action="TUGAS.php" method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Pilih Produk</label>
                        <div class="col-8">

                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input name="produk" id="Televisi" type="radio" required="required" class="custom-control-input" value="Televisi">
                                    <label for="Televisi" class="custom-control-label">Televisi</label>
                                </div>
                            </div>

                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input name="produk" id="Microwave" type="radio" required="required" class="custom-control-input" value="Microwave">
                                    <label for="Microwave" class="custom-control-label">Microwave</label>
                                </div>
                            </div>

                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input name="produk" id="mesin_cuci" type="radio" required="required" class="custom-control-input" value="MESIN CUCI">
                                    <label for="mesin_cuci" class="custom-control-label">MESIN CUCI</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Pembelian</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Pembelian" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="kirim" type="submit" class="btn btn-primary">kirim</button>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST['kirim'])) {
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah_pembelian = $_POST['jumlah'];

                    $hargaProduk = 0;
                    switch ($produk) {
                        case 'Televisi':
                            $hargaProduk = 6000000;
                            break;
                        case 'Microwave':
                            $hargaProduk = 3500000;
                            break;
                        case 'MESIN CUCI':
                            $hargaProduk = 2000000;
                            break;
                    }

                    $total_harga = $hargaProduk * $jumlah_pembelian;

                    echo "Nama Customer : " . $customer . "<br>";
                    echo "Produk Pilihan : " . $produk . "<br>";
                    echo "Jumlah Pembelian : " . $jumlah_pembelian . "<br>";
                    echo "<h3>Total Harga:</h3>";
                    echo "<p>Rp" . number_format($total_harga, 2, ',', '.') . "</p>";
                };
                ?>
            </div>
        </div>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>