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
									<li class="breadcrumb-item"><a href="#">User</a></li>
									<li class="breadcrumb-item"><a href="#">Edit User</a></li>
								</ol>
							</div>
							<h4 class="page-title">Edit User</h4>
						</div>
					</div>
				</div>
				<!-- end page title end breadcrumb -->

				<div class="row">
					<div class="col-12">
						<div class="card m-b-30">
							<div class="card-body">
								<form method="post" action="<?php echo base_url('admin/User/update/').$user[0]->id; ?>" enctype="multipart/form-data">
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input class="form-control" type="text"  id="example-text-input" name="name" required value="<?php echo $user[0]->name; ?>">
										</div>
									</div>
									
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input class="form-control" type="Email"  id="example-text-input" name="email" required value="<?php echo $user[0]->email; ?>">
										</div>
									</div>
									<button type="submit" class="btn btn-success ml-2">Update</button>
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
