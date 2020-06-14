</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/modernizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/plugins/skycons/skycons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/morris/morris.min.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/pages/dashborad.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url();?>/assets/admin/pages/datatables.init.js"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo base_url();?>/assets/admin/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/pages/sweet-alert.init.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
<script>
	/* BEGIN SVG WEATHER ICON */
	if (typeof Skycons !== 'undefined'){
		var icons = new Skycons(
			{"color": "#fff"},
			{"resizeClear": true}
			),
			list  = [
				"clear-day", "clear-night", "partly-cloudy-day",
				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
				"fog"
			],
			i;

		for(i = list.length; i--; )
			icons.set(list[i], list[i]);
		icons.play();
	};

	// scroll

	$(document).ready(function() {

		$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
		$("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});

	});
</script>

</body>
</html>
