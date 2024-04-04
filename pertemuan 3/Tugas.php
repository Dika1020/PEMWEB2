<?php
$prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital",
];
$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "Javascript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
$domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tangerang",
    "Bekasi",
    "Lainnya"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container p-4">
        <?php
        if (isset($_POST['nim'])) { 
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $programStudi = $_POST['programStudi'];
            $myskills = $_POST['skills'];
            $domisili = $_POST['domisili'];

            $totalPoint = 0;
            foreach ($myskills as $skill) {
                if (isset($skills[$skill])) {
                    $totalPoint += $skills[$skill];
                }
            }

            // predikat berdasarkan total poin
            $predikat = "";
            if ($totalPoint >= 0 && $totalPoint <= 5) {
                $predikat = "Tidak memadai";
            } elseif ($totalPoint > 9 && $totalPoint <= 41) {
                $predikat = "Kurang";
            } elseif ($totalPoint > 39 && $totalPoint <= 61) {
                $predikat = "cukup";
            } elseif ($totalPoint > 61 && $totalPoint <= 101) {
                $predikat = "Baik";
            } elseif ($totalPoint > 101 && $totalPoint <= 171) {
                $predikat = "Sangat Baik";
            }
        ?>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $nim ?></td>
                </tr>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jeniskelamin ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?= $programStudi ?></td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td>:</td>
                    <td><?= implode(", ", $myskills) ?></td>
                </tr>
                <tr>
                    <td>Point Skill</td>
                    <td>:</td>
                    <td><?= $totalPoint ?></td>
                </tr>
                <tr>
                    <td>Predikat</td>
                    <td>:</td>
                    <td><?= $predikat ?></td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>:</td>
                    <td><?= $domisili ?></td>
                </tr>
            </table>
        <?php } else { ?>
            <form method="post">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" placeholder="masukan nim" type="number" class="form-control" required="required" autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">nama lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" placeholder="masukan email" type="email" class="form-control" required="required">
                        </div>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="jeniskelamin" class="col-4 col-form-label">jenis kelamin</label>
                    <div class="col-8">
                        <input id="lakiLaki" name="jeniskelamin" placeholder="masukan jenis kelamin" type="radio" value="laki-laki" required>
                        <label for="lakiLaki">laki-laki</label>
                        <input id="perempuan" name="jeniskelamin" placeholder="masukan jenis kelamin" type="radio" value="laki-laki" required>
                        <label for="perempuan">perempuan</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="programStudi" class="col-4 col-form-label">Program studi</label>
                    <div class="col-8">
                        <select id="programStudi" name="programStudi" class="form-control" required>
                            <option value="">~ pilih prodi ~</option>
                            <?php foreach ($prodi as $prodikey => $prodivalue) { ?>
                                <option value='<?= $prodivalue ?>'><?= $prodivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="skills" class="col-4 col-form-label">Skill programming</label>
                    <div class="col-8">
                        <?php foreach ($skills as $skillkey => $skillvalue) { ?>
                            <input type="checkbox" name="skills[]" id="<?= $skillkey ?>" value="<?= $skillkey ?>">
                            <label for="<?= $skillkey ?>"><?= $skillkey ?></label>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="form-control" required>
                            <option value="">~ pilih domisili ~</option>
                            <?php foreach ($domisili as $domisilikey => $domisilivalue) { ?>
                                <option value='<?= $domisilivalue ?>'><?= $domisilivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</body>

</html>
