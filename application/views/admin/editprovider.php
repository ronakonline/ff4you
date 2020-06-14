<?php $this->load->view('admin/css-links'); ?>
<?php $this->load->view('admin/aside'); ?>

<!-- Start right Content here -->

<div class="content-page">
	<!-- Start content -->
	<div class="content">

		<?php $this->load->view('admin/header'); ?>

		<div class="page-content-wrapper ">

			<div class="container-fluid">

				<div class="row">
					<div class="col-sm-12">
						<div class="page-title-box">
							<div class="btn-group float-right">
								<ol class="breadcrumb hide-phone p-0 m-0">
									<li class="breadcrumb-item"><a href="#">Provider</a></li>
									<li class="breadcrumb-item"><a href="#">Edit Provider</a></li>
								</ol>
							</div>
							<h4 class="page-title">Edit Provider</h4>
						</div>
					</div>
				</div>
				<!-- end page title end breadcrumb -->

				<div class="row">
					<div class="col-12">
						<div class="card m-b-30">
							<div class="card-body">
								<form method="post" action="<?php echo base_url('admin/Provider/insert'); ?>" enctype="multipart/form-data">
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text"  id="example-text-input" name="name" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="description" required></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Price</label>
										<div class="col-sm-10">
											<input class="form-control" type="number"  id="example-text-input" name="price" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Thumbnail</label>
										<div class="col-sm-10">
											<input class="form-control" type="file"  id="example-text-input" name="thumbnail" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="address" required></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Latitude</label>
										<div class="col-sm-10">
											<input class="form-control" type="text"  id="example-text-input" name="lat" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Longitude</label>
										<div class="col-sm-10">
											<input class="form-control" type="text"  id="example-text-input" name="lng" required>
										</div>
									</div>
									<button type="submit" class="btn btn-success ml-2">Add</button>
								</form>
							</div>
						</div>
					</div> <!-- end col -->
				</div> <!-- end row -->

			</div><!-- container -->

		</div> <!-- Page content Wrapper -->

	</div> <!-- content -->

	<footer class="footer">
		© 2020 FreeFood4You.com
	</footer>

</div>
<!-- End Right content here -->


<?php $this->load->view('admin/js-links'); ?>
