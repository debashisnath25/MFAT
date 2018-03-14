
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Mobile Timeclock</title>

	<!-- Global stylesheets -->
	<?php
		include ("metalinks.php")
	?>

</head>

<body>
	<?php include ('header.php');?>
	<!-- Page header -->

	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Toolbar -->



				<!-- User profile -->
				<div class="row">
					<?php include ('profile_sidebar.php');?>
					<div class="col-lg-9">
			
						<div class="panel panel-flat">
							<div class="panel-heading" style="border-bottom: 1px solid rgb(237, 237, 237);">
								<div class="row">
									<div class="col-md-6 text-left">
										<h4 class="panel-title text-semibold">Setting - Mobile Time Clock</h4>
									</div>
									<div class="col-md-6 text-right">
										<button type="button" class="btn btn-primary">Save Changes</button>
									</div>
								</div>
							</div>
							
							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Enable Mobile App Clock-In</span></br><span style="font-size:10px;">Allow employees to use the timeclock from their mobile device</span>
									</label>
								</div>
							</div>
							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Enable Remote Unscheduled Shifts</span></br><span style="font-size:10px;">Allow employees to start unscheduled shifts from their mobile device.</span>
									</label>
								</div>
							</div>
						</div>
				<!-- /user profile -->
					</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
		<?php
			include ('footer.php');
		?>
			<script type="text/javascript" src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/buttons.min.js"></script>
	<script type="text/javascript" src="js/select2.min.js"></script>

	<script type="text/javascript" src="js/select.min.js"></script>

	<script type="text/javascript" src="js/datatables_extension_buttons_print.js"></script>

	<!-- date picker -->
	<script type="text/javascript" src="js/jgrowl.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/daterangepicker.js"></script>
	<script type="text/javascript" src="js/anytime.min.js"></script>
	<script type="text/javascript" src="js/picker.js"></script>
	<script type="text/javascript" src="js/picker.date.js"></script>
	<script type="text/javascript" src="js/picker.time.js"></script>
	<script type="text/javascript" src="js/legacy.js"></script>

	<script type="text/javascript" src="js/picker_date.js"></script>

	<script type="text/javascript" src="js/interactions.min.js"></script>

	<script type="text/javascript" src="js/form_select2.js"></script>

	<script type="text/javascript" src="js/uniform.min.js"></script>
	<script type="text/javascript" src="js/switchery.min.js"></script>
	<script type="text/javascript" src="js/switch.min.js"></script>

	<script type="text/javascript" src="js/form_checkboxes_radios.js"></script>
	<!-- /footer -->

</body>
</html>

