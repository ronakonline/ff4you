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
									<li class="breadcrumb-item"><a href="#">All Providers</a></li>
								</ol>
							</div>
							<h4 class="page-title">All Providers</h4>
						</div>
					</div>
				</div>
				<!-- end page title end breadcrumb -->

				<div class="row">
					<div class="col-12">
						<div class="card m-b-30">
							<div class="card-body">


								<table id="datatable" class="table table-bordered">
									<thead>
									<tr>
										<th>Name</th>
										<th>Thumbnail</th>
										<th>Price</th>
										<th>Action</th>
									</tr>
									</thead>


									<tbody>

									<?php foreach ($services as $row){ ?>
										<tr>
											<td><?php echo $row->name; ?></td>
											<td><?php echo $row->date; ?></td>
											<td><?php echo $row->from_time; ?></td>
											<td><?php echo $row->to_time; ?></td>
											<td>  <div class="btn-group m-b-10">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="<?php echo base_url('admin/Service/edit/').$row->id; ?>">Edit</a>
														<a class="dropdown-item" href="<?php echo base_url('admin/Service/delete/').$row->id; ?>" id="sa-params">Delete</a>
													</div>
												</div><!-- /btn-group --></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>

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
