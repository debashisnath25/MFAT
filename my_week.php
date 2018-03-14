
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | My Week</title>

	<!-- Global stylesheets -->
	<?php include("metalinks.php");?>	
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include("header.php");?>
	<!-- /main navbar -->
	<div class="navbar-collapse collapse" id="navbar-second-toggle" style="background:white;">
	   <ul class="nav navbar-nav">
			<li class="active"><a href="dashboard.php" style="color:#9c70c2;font-weight: 600;"> Manager</a></li>
			<li><a href="my_week.php" style="color:#9c70c2;font-weight: 600;">My Week </a></li>
	   </ul>
	 </div>
	<!-- Page header -->
	
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Dashboard content -->
				<div class="row">
					<div class="col-lg-8">
						<div class="page-header">
							<div class="page-header-content">
								<div class="page-title text-center">
									<h1>
										<span class="text-semibold">Welcome back, Victoria !</span>
									</h1>
								</div>
							</div>
						</div>
						<!-- Marketing campaigns -->
						

						<div class="panel panel-flat">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-8 text-left">
										<h6 class="panel-title text-semibold">Your Schedule</h6>
									</div>
									<div class="col-md-2 text-right">
										<a href="schedule.php" class="btn btn-primary">My Schedule</a>
									</div>
									<div class="col-md-2 text-right">
										<a href="schedule.php" class="btn btn-primary">Open Shifts</a>
									</div>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Schedule</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan=3>
												<div class="col-md-12 text-center">
													<span class="text-muted text-size-large">You don't have any scheduled shifts this week.</span>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-12 text-center" style="padding:10px;">
									<a href="javascript:void(0);" class="btn btn-info">Update Your Availability</a>
								</div>
							</div>
						</div>

						<div class="panel panel-flat">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-8 text-left">
										<h6 class="panel-title text-semibold">Shift Covers & Trades</h6>
									</div>
									<div class="col-md-2 text-right">
										<a href="schedule.php" class="btn btn-primary">Incoming Requests</a>
									</div>
									<div class="col-md-2 text-right">
										<a href="schedule.php" class="btn btn-primary">Your Requests</a>
									</div>
								</div>
							</div>
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-12 text-center">
										<span class="text-muted text-size-large">You haven't received any shift trades.</span>
									</div>
								</div>
							</div>
							

							<!--<div class="table-responsive">
								
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Schedule</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan=3>
												<div class="col-md-12 text-center">
													<span class="text-muted text-size-large">You don't have any scheduled shifts this week.</span>
												</div>
											</td>
										</tr>
									</tbody>
								</table> 
								
							</div>-->
						</div>
					</div>

					<div class="col-lg-4">
						<!-- Daily sales -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title text-semibold">Your Week</h6>
							</div>
							<div class="container-fluid">
								<div class="row ">
									<div class="col-md-6">
										<div class="content-group">
											<h6 class="text-semibold no-margin">Scheduled Hours</h6>
											<span class="text-muted text-size-medium text-semibold">vs 0.00 last week</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<h6 class="text-semibold no-margin">0.00</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="content-group">
											<h6 class="text-semibold no-margin">Scheduled Est. Wages</h6>
											<span class="text-muted text-size-medium text-semibold">vs $0.00 last week</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<h6 class="text-semibold no-margin">$0.00</h6>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-6">
										<div class="content-group">
											<h6 class="text-semibold no-margin">Actual Hours</h6>
											<span class="text-muted text-size-medium text-semibold">vs 0.00 last week</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<h6 class="text-semibold no-margin">0.00</h6>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-6">
										<div class="content-group">
											<h6 class="text-semibold no-margin">Actual Est. Wages</h6>
											<span class="text-muted text-size-medium text-semibold">vs $0.00 last week</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<h6 class="text-semibold no-margin">$0.00</h6>
									</div>
								</div>

								<div class="panel-heading text-center">
									<a href="timesheets.php" class="btn btn-primary">View all Timesheets</a>
								</div>
							</div>
						<!-- /daily sales -->
						</div>

						<!-- My messages -->
					
						<!-- /my messages -->
						

						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title text-semibold">Upcoming Time-Off</h6>
								 <div class="alert alert-info text-center">
									<button type="button" class="close" data-dismiss="alert"></button>
									No upcoming time-off requests. Yay!
								</div>
								<div class="panel-heading text-center">
									<a href="javascript:void(0);" class="btn btn-primary">View all Time off</a>
								</div>
							</div>
						</div>
					
				</div>
				<!-- /dashboard content -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->


	<!-- Footer -->
	<?php include("footer.php");?>
		<script type="text/javascript" src="js/dashboard.js"></script>
</body>
</html>
