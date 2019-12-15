<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Memalinu Bakery</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:400,600') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assetsuser/fonts/beyond_the_mountains-webfont.css') ?>" type="text/css"/>

        <!-- Stylesheets -->
        <link href="<?php echo base_url('assetsuser/plugin-frameworks/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assetsuser/plugin-frameworks/swiper.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assetsuser/fonts/ionicons.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assetsuser/common/styles.css') ?>" rel="stylesheet">

</head>
<body>

<header>
        <?php $this->load->view("user/partials/header.php") ?>
</header>

<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">
                                <h5><b>ANEKA KUE BASAH & KUE KERING</b></h5>
                                <h1 class="mt-30 mb-15">Memalinu Bites</h1>
                                <h5><a href="#" class="btn-primaryc plr-25"><b>LIHAT MENU HARI INI</b></a></h5>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php echo base_url('assetsuser/images/heading_logo.png') ?>" alt="">
                        <h2>Singkat Cerita Tentang Kami</h2>
                </div>

                <div class="row">
                        <div class="col-md-6">
                                <p class="mb-30"><b>Memalinu Bites</b> merupakan perusahaan home industry yang bergerak dalam bidang pengolahan
                                kue tradisional Indonesia yang dibentuk pada tanggal 27 November 2019. Kue yang kami tawarkan disini
                                ada dua macam, yaitu kue basah dan kue kering. Kue basah seperti lemper, lumpur, onde-onde, lapis,
                                dan lain-lain. Untuk kue kering seperti nastar, kastengel, putri salju, dan sebagainya. Pembentukan 
                                bisnis ini diawali dengan adanya tingkat penurunan konsumsi kue tradisional 
                                asli Indonesia dibanding dengan bakery-bakery yang kini tersebar luas. </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-30">Banyak masyarakat yang cenderung
                                tidak menyukai kue-kue tradisional ini, padahal rasanya tidak kalah nikmat. Apalagi jajanan di Indonesia
                                sangatlah banyak ragamnya. Maka dari itu, kami ingin menciptakan sebuah bisnis yang mampu meningkatkan
                                minat para konsumen akan kue-kue tradisional Indonesia ini. Target konsumen kami bukan hanya kalangan
                                ibu-ibu saja, namun untuk semua kalangan umum termasuk anak-anak.</p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <!-- <img class="heading-img" src="<?php echo base_url('assetsuser/images/heading_logo.png') ?>" alt=""> -->
                        <h2>Best Sellers</h2>
                </div>



                <div class="row">
                <?php foreach ($bsh as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];

?>

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                        <img src="<?php echo base_url('upload/'.$foto) ?>" alt="">
                                        </div>
                                        <h5 class="mt-20"><?= $nama ?></h5>
                                        <h4 class="mt-5"><b> <?= $harga ?> </b></h4>
                                        <h6 class="mt-20"><a href="<?php echo base_url('user/user/addToCart/'.$id); ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                <?php endforeach; ?>
                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php echo base_url('assetsuser/images/heading_logo.png') ?>" alt="">
                        <h2>Aneka Kue Pilihan</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                                        <li><a href="#" data-select="pizza"><b>KUE BASAH</b></a></li>
                                        <li><a href="#" data-select="pasta"><b>KUE KERING</b></a></li>
                                </ul>
                        </div><!--col-sm-12-->
                </div><!--row-->

                <div class="row">
                <?php foreach ($basah as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];

?>

                        <div class="col-md-6 food-menu pizza">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('upload/'.$foto) ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?= $nama ?></b><b class="color-primary float-right"><?= $harga ?></b></h5>
                                                <p class="pr-70"><?= $bahan?>. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                <?php endforeach; ?>

                <?php foreach ($kering as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];

?>

                        <div class="col-md-6 food-menu pasta">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('upload/'.$foto) ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?= $nama ?></b><b class="color-primary float-right"><?= $harga ?></b></h5>
                                                <p class="pr-70"><?= $bahan?>. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                <?php endforeach; ?>




                </div><!-- row -->




                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>LIHAT MENU HARI INI</b></a></h6>
        </div><!-- container -->
</section>

<footer>
        <?php $this->load->view("user/partials/footer.php") ?>
</footer>

<!-- SCIPTS -->
<script src="<?php echo base_url('assetsuser/plugin-frameworks/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/plugin-frameworks/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/plugin-frameworks/swiper.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/common/scripts.js') ?>"></script>

</body>
</html>