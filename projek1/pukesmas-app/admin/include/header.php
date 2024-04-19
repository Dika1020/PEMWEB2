<?php
$praktikum = [
    "praktikum1" => "praktikum1.php",
    "praktikum2" => "praktikum2.php",
    "praktikum3" => "praktikum3.php",
]
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rumah sakit CITAMA</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= $url ?>index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Page
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Praktikum</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <?php foreach ($praktikum as $praktikumkey => $praktikumvalue) { ?>
                    <a class="collapse-item" href="<?= $praktikumvalue ?>"><?= $praktikumkey ?></a>
                <?php } ?>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= $url ?>kelurahan">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Kelurahan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= $url ?>pasien">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pasien</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= $url ?>periksa">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Periksa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= $url ?>paramedik">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Paramedik</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= $url ?>unit_kerja">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Unitkerja</span>
        </a>
    </li>


</ul>