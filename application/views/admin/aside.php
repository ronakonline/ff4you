
<!-- Begin page -->
<div id="wrapper">

	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
			<i class="ion-close"></i>
		</button>

		<!-- LOGO -->
		<div class="topbar-left">
			<div class="text-center">
				<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Annex</a>
				<!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
			</div>
		</div>

		<div class="sidebar-inner slimscrollleft">

			<div id="sidebar-menu">
				<ul>
					<li class="menu-title">Main</li>

					<li>
						<a href="<?php echo base_url('admin/Dashboard') ?>" class="waves-effect">
							<i class="mdi mdi-airplay"></i>
							<span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
						</a>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-face"></i> <span> Provider </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('admin/Provider') ?>">Add Provider</a></li>
							<li><a href="<?php echo base_url('admin/Provider/all') ?>">All Providers</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-human-child"></i> <span> User </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('admin/User') ?>">Add User</a></li>
							<li><a href="<?php echo base_url('admin/User/all') ?>">All Users</a></li>
						</ul>
					</li>
					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-food"></i> <span> Service </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="#">Add Service</a></li>
							<li><a href="#">All Services</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="waves-effect">
							<i class="mdi mdi-mail-ru"></i>
							<span> Query/Complains <span class="badge badge-pill badge-primary float-right">0</span></span>
						</a>
					</li>

				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- end sidebarinner -->
	</div>
	<!-- Left Sidebar End -->
