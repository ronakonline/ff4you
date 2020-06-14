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
									<li class="breadcrumb-item"><a href="#">Service</a></li>
									<li class="breadcrumb-item"><a href="#">Edit Service</a></li>
								</ol>
							</div>
							<h4 class="page-title">Edit Service</h4>
						</div>
					</div>
				</div>
				<!-- end page title end breadcrumb -->

				<div class="row">
					<div class="col-12">
						<div class="card m-b-30">
							<div class="card-body">
								<form method="post" action="<?php echo base_url('admin/Service/update'); ?>" enctype="multipart/form-data">
									<div class="form-group row">
										<label for="example-text-input" class="col-sm-2 col-form-label">Provider</label>
										<div class="col-sm-10">
											<!--											<input class="form-control" type="text"  id="example-text-input" name="name" required>-->
											<select class="form-control" name="provider_id">
												<?php foreach ($providers as $provider) {
													if($provider->id == $service[0]->provider_id){
														echo "<option value='$provider->id' selected>$provider->name</option>";
													}else{
														echo "<option value='$provider->id'>$provider->name</option>";
													}

												}?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
										<div class="col-sm-10">
											<input class="form-control" name="date" required type="date" dataformatas="yyyy/mm/dd"  id="example-date-input" value="<?php echo $service[0]->date; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-time-input" class="col-sm-2 col-form-label">From Time</label>
										<div class="col-sm-10">
											<input class="form-control" type="time" name="from_time" required id="example-time-input"  value="<?php echo $service[0]->from_time; ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="example-time-input" class="col-sm-2 col-form-label">To Time</label>
										<div class="col-sm-10">
											<input class="form-control" type="time" name="to_time" required id="example-time-input" value="<?php echo $service[0]->to_time; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-date-input" class="col-sm-2 col-form-label">Slots</label>
										<div class="col-sm-10">
											<input class="form-control" type="number" min="1" name="slots" required id="example-date-input" value="<?php echo $service[0]->slots; ?>">
										</div>
									</div>
									<input type="text" value="<?php echo $service[0]->id; ?>" name="id" hidden>
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
