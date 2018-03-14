
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Overtime Breaks</title>

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
										<h4 class="panel-title text-semibold">Setting - Overtime & Breaks</h4>
									</div>
									<div class="col-md-6 text-right">
										<button type="button" class="btn btn-primary">Save Changes</button>
									</div>

						</div>
					</div>
							
										

							
								<div class="form-group" style="margin-top:7px;">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-1">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled">
														<span style="font-size:16px;">After</span>
													</label>
												</div>
											</div>
											<div class="col-md-1">
												<input type="text" name="" value=""  class="form-control">
											</div>
											<div class="col-md-3" style="margin-top:7px;">
												<span style="font-size:16px;">hours per day, the base pay is</span>
											</div>
											<div class="col-md-1">
												<input type="text" name="" value=""  class="form-control">
											</div>
											<div class="col-md-1" style="margin-top:7px;">
												<span style="font-size:12px;">* Hourly</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group" style="padding-left:10px;padding-right:10px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Track Overtime Across Multiple Locations</span></br><span style="font-size:10px;">All locations must be on the Plus tier and have the same Schedule Start of Week setting.</span>
										</label>
									</div>
								</div>
								<div class="form-group" style="padding-left:10px;padding-right:10px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Calculate overtime for any salaried employees below $47,476</span></br><span style="font-size:10px;">Note: does not calculate across multiple locations.</span>
										</label>
									</div>
								</div>
								<div class="form-group" style="padding-left:10px;padding-right:10px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Note: does not calculate across multiple locations.</span></br><span style="font-size:10px;">Penalties will not be applied to salaried employees. Please consult your local and state rules for guidelines.</span>
										</label>
									</div>
								</div>
							</div>
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
	<!-- /footer -->
	<script type="text/javascript" src="js/uniform.min.js"></script>
	<script type="text/javascript" src="js/switchery.min.js"></script>
	<script type="text/javascript" src="js/switch.min.js"></script>
	<script type="text/javascript" src="js/form_checkboxes_radios.js"></script>
</body>
</html>

