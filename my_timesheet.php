
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | My Timesheet</title>

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
										<h4 class="panel-title text-semibold">Setting - Timesheets</h4>
									</div>
									<div class="col-md-6 text-right">
										<button type="button" class="btn btn-primary">Save Changes</button>
									</div>

						</div>
					</div>
							<div class="text-left " style="padding:15px;">
										<h4 class="panel-title text-semibold">Payroll Period</h4>
									</div>
										<div class="form-group" style="padding:15px;">
												<div class="row">
												
													<div class="col-md-8">
														<div class="col-md-3">
															<label style="font-size:15px;">We pay employees</label>
														</div>
														<div class="col-md-9">
															<select class="select">
																<option value="germany" selected="selected">Every Week</option> 
																<option value="france">Every Two Weeks</option> 
																<option value="spain">Once a Month</option> 
																<option value="netherlands">Twice a Month</option> 
															 
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group" style="padding:15px;">
												<div class="row">
												
													<div class="col-md-8">
														<div class="col-md-3">
															<label style="font-size:15px;">Our next payroll period begins on</label>
														</div>
														<div class="col-md-9">
														<div class="input-group">
															<span class="input-group-addon"><i class="icon-calendar22"></i></span>
															<input type="text" class="form-control daterange-single" value="03/18/2013">
														</div>
														</div>
													</div>
												</div>
											</div>

									<div class="text-left " style="padding:15px;">
										<h4 class="panel-title text-semibold">Timesheet Approvals</h4>
									</div>

							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Timesheets can be locked from editing after approval</span></br><span style="font-size:10px;"></span>
									</label>
								</div>
							</div>

							<div class="text-left " style="padding:15px;">
								<h4 class="panel-title text-semibold">Employee Clock-Out Edits</h4>
							</div>
							<div class="form-group" style="margin-left:15px;">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Notify employees when they have forgotten to clock out and allow them to add a clock-out time</span></br><span style="font-size:10px;">If we detect an employee has forgotten to clock out, we will send them a notifcation via the Homebase messenger app. Employees can reply to the message with their clock-out time and we will save to timesheets.</span>
									</label>
								</div>
							</div>
								<div class="form-group" style="margin-left:15px;">
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											<span style="font-size:16px;">Require that Managers approve employee's clock-out times before saving to timesheets</span></br><span style="font-size:10px;">When an employee adds a clock-out time to their own timesheet (setting above), a Manager will be required to approve it before it is saved to Timesheets.</span>
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

