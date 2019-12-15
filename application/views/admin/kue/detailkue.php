<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Kue
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$basah['nama_kue'];?></h5>
                <p class="card-text">
                <label for=""><b> Bahan:</b></label>
                <?= $basah['bahan'];?></p>
                
                <p class="card-text">
                <label for=""><b> Harga:</b></label>
                <?= $basah['harga'];?></p>
                <p class="card-text">
                <label for=""><b> id Kategori:</b></label>
                <?= $basah['id_kategori'];?></p>
                <p class="card-text">
                <label for=""><b> Foto :</b></label>
                <img src="<?php echo base_url('upload/'.$basah['foto']) ?>" width="100" /></p>
                <a href="<?php echo site_url('admin/kuebas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
    
</div>

		</div>
		<!-- /.content-wrapper -->
       
	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>