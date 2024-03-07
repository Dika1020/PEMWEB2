<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan FOrm PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-4">
                <form method="post" action="proses.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="masukan nama" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matakuliah" class="col-4 col-form-label">Mata kuliah</label>
                        <div class="col-8">
                            <select id="matakuliah" name="matakuliah" class="form-control" required>
                                <option value="">pilih matakuliah</option>
                                <option value="pemweb">pemweb</option>
                                <option value="DDP">DDP</option>
                                <option value="UIUX">UIUX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai_uts" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai_uas" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai tugas</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai_tugas" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>