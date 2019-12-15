<!DOCTYPE html>
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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/kuebas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/kuebas/tambah') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama_kue">Nama Kue*</label>
								<input class="form-control <?php echo form_error('id_pasien') ? 'is-invalid':'' ?>"
								 type="text" name="nama_kue" placeholder=" Nama Kue " />
								<div class="invalid-feedback">
									<?php echo form_error('nama_kue') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="bahan">Bahan*</label>
								<input class="form-control <?php echo form_error('bahan') ? 'is-invalid':'' ?>"
								 type="text" name="bahan" min="0" placeholder=" Bahan " />
								<div class="invalid-feedback">
									<?php echo form_error('bahan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga*</label>
								<input class="form-control-file <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga"  min="0" placeholder="  Harga "  />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="expired">Expired*</label>
								<input class="form-control-file <?php echo form_error('expired') ? 'is-invalid':'' ?>"
								 type="text" name="expired"  min="0" placeholder=" Expired "  />
								<div class="invalid-feedback">
									<?php echo form_error('expired') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

			

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>