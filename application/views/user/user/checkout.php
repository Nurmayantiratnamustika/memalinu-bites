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
                                <h2 class="mt-30 mb-15">Checkout</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading"><h3>Konfirmasi Check Out</h3></div>

<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
    {
        foreach ($cart as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";
?>

<?php foreach ($brg as $bsh ) :
$id=$bsh['id_customer'];
$nama=$bsh['username'];
$email=$bsh['email'];
$alamat=$bsh['alamat'];
$telepon=$bsh['telepon'];
?>

<form class="form-horizontal" action="<?php echo base_url()?>user/belanja/proses_order" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $alamat ?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telepon" id="telp" value="<?= $telepon ?>">
            </div>
        </div>

        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Jasa Pengiriman</label>
            <div class="col-xs-9">
                <select>
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>Pos Indonesia</option>
                    <option>Gojek</option>
                </select>
            </div>
        </div>



        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Pilih Bank</label>
            <div class="col-xs-9">
                <select>
                    <option>BRI - XXXXX</option>
                    <option>BNI - XXXXX</option>
                    <option>BCA - XXXXX</option>
                    <option>MANDIRI - XXXXXX</option>
                </select>
            </div>
        </div>


 
 
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Proses Order</button>
            </div>
        </div>
    </form>
<?php endforeach; ?>
    <?php
    }
    else
        {
            echo "<h5>Shopping Cart masih kosong</h5>";
        }
    ?>
</div>
</section>

              <footer>
        <?php $this->load->view("user/partials/footer.php") ?>
</footer>

<!-- SCIPTS -->
<script src="<?php echo base_url('assetsuser/plugin-frameworks/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/plugin-frameworks/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/plugin-frameworks/swiper.js') ?>"></script>
<script src="<?php echo base_url('assetsuser/common/scripts.js') ?>"></script>
</script>
</body>
</html>
