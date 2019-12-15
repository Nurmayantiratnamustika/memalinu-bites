

<header>
        <div class="container">
                <a class="logo" href="#"><img src="<?php echo base_url('assetsuser/images/logo-white.png') ?>" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">PESAN: +62882 2837 6626</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="<?php echo base_url('user/user'); ?>">HOME</a></li>
                        <li><a href="<?php echo base_url('user/user/menu'); ?>">MENU</a></li>
                        <li><a href="<?php echo base_url('user/belanja'); ?>">KERANJANG</a></li>
                        <li><a href="03_menu.html">ABOUT US</a></li>
                        <li><a href="04_blog.html">CONTACT</a></li>
                        <?php
                        if (empty($this->session->userdata('id'))) {
                                ?>
                  <li><a href="<?php echo base_url('login/login'); ?>">LOGIN</a></li>
                
              <?php 
                }
            else{
                    ?>
                <li><a href="<?php echo base_url('login/login'); ?>">LOGIN</a></li>
                
        <?php
        }
              ?>


                        
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>