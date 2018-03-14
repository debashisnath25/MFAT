
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Billing</title>

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
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-6 text-left">
										<h6 class="panel-title text-semibold">Today's Schedule</h6>
									</div>
									<div class="col-md-6 text-right">
										<h6 class="panel-title"><a href="schedule.php">View Full Schedule</a></h6>
									</div>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Location</th>
											<th>Subscription</th>
											<th>Billing Frequency</th>
											<th>Current Bill Cycle</th>
											<th>Next Billing Date</th>
											<th>Credit Card Onfile</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											for($i=1;$i<8;$i++){
										?>
										<tr>
											<td>
												<div class="media-body">
													<span class="text-semibold">Clicks</span>
												</div>
											</td>
											<td>
												<span class="text-semibold">Plus ($29.95) - Trial</span>
											</td>
											<td>
												<div class="col-md-1">
													<span class="status-mark border-success position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Scheduled</h6>
												</div>

											</td>
												<td>
												<div class="col-md-1">
													<span class="status-mark border-success position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Scheduled</h6>
												</div>

											</td>
												<td>
												<div class="col-md-1">
													<span class="status-mark border-success position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Scheduled</h6>
												</div>

											</td>
											<td>
												<div class="col-md-1">
													<span class="status-mark border-success position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Scheduled</h6>
												</div>
											</td>
											<td>
												<div class="col-md-3">
													<a href="javascript:void(0);" class="text-semibold no-margin">Change Plan</a>
												</div>
											</td>
										</tr>
										<?php
											}
										?>
										
									</tbody>
								</table>
							</div>
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

</body>
</html>
