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
										
										<th>Nama Kue</th>
										<th>Bahan</th>
										<th>Harga</th>
										<th>Id Kategori</th>
                                        <th>Foto</th>
                                       
										<th>Action</th>

									</tr>
                                    <?php foreach ($bsh as $bsh ) :
$id=$bsh['id_kue'];
$nama=$bsh['nama_kue'];
$bahan=$bsh['bahan'];
$harga=$bsh['harga'];
$foto=$bsh['foto'];
$id_kategori=$bsh['id_kategori'];

?>



								</thead>
								<tbody>
                                
										<tr>	
										<td width="150">
											<?php echo $nama ?>
										</td>
                                        <td>
											<?php echo $bahan; ?>
										</td>
										<td>
											<?php echo $harga; ?>
										</td>
										<td>
											<?php echo $id_kategori; ?>
										</td>
										<td >
											<img src="<?php echo base_url('upload/'.$foto) ?>" width="100 " />
										</td>
				
										<td width="300">
											<a href="<?php echo base_url('admin/obat/editObat/'.$id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('admin/kuebas/detail/'.$id) ?>"
											 class="btn btn-small text-success" ><i class="fa fa-info-circle"></i> Detail</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/kuebas/delete/' .$id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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