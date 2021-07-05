<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>halaman Home - moodgamebooster</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets/") ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="../controllers/vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets/") ?>css/blog-home.css" rel="stylesheet">

</head>

<body style="background-image: url('https://cdn.dribbble.com/users/1809715/screenshots/7835172/media/c31cf723a8be30d9b0ba077905978420.gif')">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sekilas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url("home")?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('role') == 'Admin') { ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("home/about")?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("home/contact")?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("auth/logout")?>">Logout </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("auth/delete")?>">Hapus Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cookies.php">Halaman Cookies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("upload")?>">Upload Gambar</a>
                        </li>
                    <?php } else if ($this->session->userdata('role') == 'User') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("home/about")?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("home/contact")?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("auth/logout")?>">Logout </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("auth/daftar") ?>">Daftar </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("auth") ?>">Login </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>