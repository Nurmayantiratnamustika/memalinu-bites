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
                 <h3> Data Pesanan </h3>
                 <h3>Nomor Pesanan : <?= $invoice['id_order']?> </h3>
						
					</div>
					<div class="card-body">
					

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										
										<th>Id Kue</th>
										<th>Jumlah</th>
										<th>Sub Total</th>
                                        
       
										

									</tr>
                                    <?php
                                    $total=0;
                                    foreach ($pesan as $bsh ) :


$id=$bsh['id_kue'];
$jumlah=$bsh['jumlah'];
$subtotal=$bsh['subtotal'];

$total += $bsh['subtotal'];
?>


								</thead>
								<tbody>
                                
										<tr>	
										<td width="150">
											<?php echo $id ?>
										</td>
                                        <td>
											<?php echo $jumlah ?>
										</td>
										<td>
                                         Rp. <?php echo number_format($subtotal,0,',','.'); ?>
                                            
										</td>
									
								
			
									</tr> <?php
                             
                                    ?>
                                    
                                    <?php endforeach;?>
                                    <tr>
                                        <td colspan ="2" align="right">Total : </td>
                                        
                                        <td colspan ="1" >Rp. <?php echo number_format($total,0,',','.') ?> </td>
                                    </tr>
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