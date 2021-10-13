<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title- -->
    <title><?php foreach ($opd as $r) { ?>
            <?= $r->nama_pendek ?>
        <?php } ?></title>

    <!-- CSS
   ==================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/font-awesome.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/animate.css">

    <!-- IcoFonts -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/icofonts.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/owlcarousel.min.css">

    <!-- slick -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/slick.css">

    <link rel="icon" type="image/png" href="<?= base_url('assets/vendor/logo/fav.png'); ?>">

    <!-- navigation -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/navigation.css">

    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/colors/color-3.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/'); ?>css/responsive.css">

</head>