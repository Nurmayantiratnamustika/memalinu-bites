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
                                <h2 class="mt-30 mb-15">Chart</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading"><h3>Daftar Belanja</h3></div>
<?php $keranjang ='Keranjang Belanja : '.$this->cart->total_items().'  items' ?>
<?= $keranjang ?>

<div class="row cart">
    <table class="table">
    
    <thead>
        <tr>
            <th width="10%">No</th>
            <th width="30%">Kue</th>
            <th width="15%">Harga</th>
            <th width="13%">Jumlah</th>
            <th width="20%">Subtotal</th>
            <th width="12%">Hapus</th>
            <th width="12%">Update</th>
        </tr>
    </thead>
    <tbody>
       <?php 

           
       $no = 0;
    foreach($this->cart->contents() as $items) : 

        echo 
        form_open(base_url('user/belanja/update_cart/'.$items["rowid"]));
        ?>
        <tr>
            <td>
                
                <img src="<?php echo base_url('upload/'.$items['image']) ?>" width="50"/>
            </td>
            <td><?php echo $items["name"]; ?></td>
            <td><?php echo 'Rp.'.$items["price"]; ?></td>
            <td><input type="number" class="form-control text-center" name="qty" value="<?php echo $items["qty"]; ?>">
            <td><?php echo $items["subtotal"]; ?></td>
            <td width ="300">
                <a href="<?php echo base_url('user/belanja/removeItem/'.$items["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</i></a>
            </td>
            <td>
            <button class='btn btn-sm btn-warning'  type="submit" name="update">Update Cart</button>
            </td>
        </tr>
        <?php
        echo form_close(); ?>

        <?php endforeach; ?>
       
    </tbody>
    <tfoot>
        <tr>
            <td><a href="<?php echo base_url('user/user/menu'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="3"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-left">Total Belanja: <b><?php echo 'Rp'.$this->cart->total(); ?></b></td>
            <td><a href="<?php echo base_url('user/belanja/checkout'); ?>" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
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