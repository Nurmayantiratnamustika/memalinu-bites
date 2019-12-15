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


<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Menu</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading"><h3>Choose from Kue Basah</h3></div>
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
                                        <h4 class="mt-5 color-primary"><b><?= $harga ?></b></h4>
                                        <h6 class="mt-20"><a href="<?php echo base_url('user/user/addToCart/'.$id); ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

            <?php endforeach; ?> 
                </div><!-- row-->
        </div><!-- container -->
</section>

<section class="bg-lite-blue">
        <div class="container">
                <div class="row">
                <?php foreach ($bas as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];
?>
                        <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('upload/'.$foto) ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?= $nama ?></b><b class="color-primary float-right"><?= $harga ?></b></h5>
                                                <p class="pr-70"><?= $bahan ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                <?php endforeach; ?>
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <h4 class="font-30 font-sm-20  center-text mb-25">Add a delicious <b>Kue Kering</b> to your order</h4>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading mb-sm-10"><h3>Choose from Kue Kering</h3></div>
                <div class="row">
                <?php foreach ($kering as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];
?>
                        <div class="col-md-12 col-lg-6">
                                <div class="sided-220x responsive mb-30 left-text center-sm-text">
                                        <div class="s-left mlr-sm-auto"><img  src="<?php echo base_url('upload/'.$foto) ?>" alt="Menu Image"></div>
                                        <div class="s-right">
                                                <h5><?= $nama ?></h5>
                                                <h4 class="mtb-10"><b class="color-primary"><?= $harga ?></b></h4>
                                                
                                                <h6 class="mt-20"><a href="<?php echo base_url('user/user/addToCart/'.$id); ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- col-md-6 -->

                        <?php endforeach;?>
                </div><!-- row-->

                <div class="brder-t-light mt-sm-10 mb-60 mb-sm-40"></div>

                
                <div class="row">
                <?php foreach ($kering as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];
?>
                        <div class="col-md-6">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('upload/'.$foto) ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?= $nama ?></b><b class="color-primary float-right"><?= $harga ?></b></h5>
                                                <p class="pr-70"> <?= $bahan ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                <?php endforeach;?>
                     
                </div><!-- row -->
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