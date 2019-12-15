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
				<div class="card mb-3">
					<div class="card-header">
				
						<a href="<?php echo site_url('admin/kuebas/tambah') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
					

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										
										<th>Id Customer</th>
										<th>Tanggal Pemesan</th>
										<th>Batas Pembayaran</th>                               
										<th>Action</th>

									</tr>
                                    <?php foreach ($invoice as $inv ) :  ?>



								</thead>
								<tbody>
                                
										<tr>	
										<td width="150">
											<?php echo $inv->id_customer ?>
										</td>
                                        <td>
											<?php echo $inv->tanggal_pesan; ?>
										</td>
										<td>
											<?php echo $inv->batas_bayar; ?>
										</td>
										
										<td width="300">
				
											 <a href="<?php echo site_url('admin/invoice/detail/'.$inv->id_order) ?>"
											 class="btn btn-small text-success" ><i class="fa fa-info-circle"></i> Detail</a>
		
										</td>
								
			
									</tr>
                                    
									<?php endforeach; ?>

									</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

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