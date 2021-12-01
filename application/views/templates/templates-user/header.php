<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/bootstrap.css'); ?>">
    <link href="<?= base_url('assets/vendor/fontawesome/css/all.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/datatable/datatables.css'); ?>" rel="stylesheet" type="text/css">
    <style>
        .card {
            -webkit-box-shadow: 5px 6px 11px -10px rgba(77,75,77,1);
            -moz-box-shadow: 5px 6px 11px -10px rgba(77,75,77,1);
            box-shadow: 5px 6px 11px -10px rgba(77,75,77,1);
            border-radius: 10px;
        }
        .card:hover {
            -webkit-box-shadow: 5px 6px 11px -4px rgba(77,75,77,1);
            -moz-box-shadow: 5px 6px 11px -4px rgba(77,75,77,1);
            box-shadow: 5px 6px 11px -4px rgba(77,75,77,1);
        }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
        <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNavAltMarkup" ariacontrols="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="<?= base_url(); ?>">Beranda</a>
    <?php if ($this->session->userdata('email')) { ?>
        <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
        <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
        <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>" onclick="return confirm('yakin akan keluar?');"><i class="fas fw falogin"></i> Log out</a>
    <?php } else { ?>
        <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>
        <a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>
    <?php } ?>
    <span class="nav-item nav-link navright" style="display:block; marginleft:20px;">Selamat Datang <b><?= $user; ?></b></span>
    </div>
    </div>
    </div>
    </nav>
    <div class="container mt-5">
