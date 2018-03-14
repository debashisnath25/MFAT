
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | My Schedule</title>

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
										<h6 class="panel-title text-semibold">Settings - Time Off</h6>
									</div>
									<div class="col-md-6 text-right">
										<button type="button" class="btn btn-primary">Save Changes</button>
									</div>
								</div>
							</div>
										
							<div class="form-group" style="margin-top:15px;">
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-3">
											 <label style="font-size:14px;">Schedule Start Day</label>
										</div>
										<div class="col-md-9">
										<select class="select">
											<option value="germany" selected="selected">Monday</option> 
											<option value="france">Tuesday</option> 
											 <option value="netherlands">Wednesday</option>
											<option value="spain">Thrusday</option> 
											
											<option value="other">Friday</option> 
											<option value="uk">Saturday</option> 
										</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-3">
											 <label style="font-size:14px;">Store Hours</label>
										</div>
										<div class="col-md-9">
											<div class="col-md-6">
											<div class="content-group-lg">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-watch2"></i></span>
													<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
												</div>
											</div>
											<div>
										</div>
									</div>
												
												<div class="col-md-6">
													<div class="content-group-lg">
														<div class="input-group">
															<span class="input-group-addon"><i class="icon-watch2"></i></span>
															<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
														</div>
													</div>
													<div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Text Schedule To Employee</span></br><span style="font-size:10px;">Notify employees of New Schedule Via Sms</span>
									</label>
								</div>
							</div>

							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Avalability Approvals</span></br><span style="font-size:10px;">Require Approval Before Avalability Changes Are Published</span>
									</label>
								</div>
							</div>

								<div class="form-group" style="margin-left:15px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Show Sales And Labour Based On Reset Time</span></br><span style="font-size:10px;">Usefull Buisness Open Past Midnight</span>
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										
										<div class="col-md-8">
											<div class="col-md-3">
												 <label style="font-size:14px;">Daily Report Reset Time</label>
											</div>
											<div class="col-md-9">
												<div class="content-group-lg">
													<div class="input-group">
														<span class="input-group-addon"><i class="icon-watch2"></i></span>
														<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group" style="margin-left:15px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Hide employee’s schedules from other employees</span></br><span style="font-size:10px;">Employees will only see their personal schedule from the web and mobile app. Employees must update to version 3.8 or higher of the mobile app for this feature to work.</span>
										</label>
									</div>
								</div>

								<div class="form-group" style="margin-left:15px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Limit managers to build schedules for their department only</span></br><span style="font-size:10px;"></span>
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
	<!-- /footer -->

	<script type="text/javascript" src="js/uniform.min.js"></script>
	<script type="text/javascript" src="js/switchery.min.js"></script>
	<script type="text/javascript" src="js/switch.min.js"></script>
	<script type="text/javascript" src="js/form_checkboxes_radios.js"></script>

</body>
</html>

