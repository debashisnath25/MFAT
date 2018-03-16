
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Dashboard</title>

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

				<!-- Main charts -->
				
				<!-- /main charts -->


				<!-- Dashboard content -->
				<div class="row">
					<div class="col-lg-8">
						<div class="page-header">
							<div class="page-header-content">
								<div class="page-title text-center">
									<h1>
										<span class="text-semibold">Welcome back, Victoria !</span>
										<small class="display-block">Here's what's happening across Clicks today:</small>
									</h1>
								</div>
							</div>
						</div>
						<!-- Marketing campaigns -->
						

						<div class="panel panel-flat">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-6 text-left">
										<h6 class="panel-title text-semibold">Today's Schedule</h6>
									</div>
									<div class="col-md-6 text-right">
										<a href="schedule.php" class="btn btn-primary">View Full Schedule</a>
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
											<td>
												<div class="col-md-2">
													<a href="javascript:void(0);">
														<img src="images/face10.jpg" alt="" style="border-radius:50%;height:30px;">
													</a>
												</div>
												<div class="col-md-3">
													<a href="javascript:void(0);" class="letter-icon-title">Robbie Williams</a>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small">7:00AM - 10:00PM | Manager</span>
											</td>
											<td>
												<div class="col-md-1">
													<span class="status-mark border-success position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Scheduled</h6>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="col-md-2">
													<a href="javascript:void(0);">
														<img src="images/face3.jpg" alt="" style="border-radius:50%;height:30px;">
													</a>
												</div>
												<div class="col-md-3">
													<a href="javascript:void(0);" class="letter-icon-title">Victoria Elizabeth</a>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small"></span>
											</td>
											<td>
												<div class="col-md-1">
													<span class="status-mark border-danger position-left"></span>
												</div>
												<div class="col-md-3">
													<h6 class="text-semibold no-margin">Not Scheduled</h6>
												</div>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<!-- Daily sales -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title text-semibold">Today at Clicks</h6>
							</div>
							<div class="container-fluid">
								<div class="row ">
									<div class="col-md-6 text-left">
										<div class="content-group text-center">
											<h6 class="text-semibold no-margin"><i class="icon-sun3 position-left text-slate"></i>WEATHER</h6>
											<span class="text-muted text-size-medium text-semibold">48&deg;</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<div class="content-group text-center">
											<h6 class="text-semibold no-margin"><i class="icon-coin-dollar position-left text-slate"></i>SALES</h6>
											<span class="text-muted text-size-medium text-semibold">$0.00<br/>vs $0.00 YESTERDAY</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 text-left">
										<div class="content-group text-center">
											<h6 class="text-semibold no-margin"><i class="icon-users4 position-left text-slate"></i>EST. LABOR</h6>
											<span class="text-muted text-size-medium text-semibold ">$0.00<br/>vs. $0.00 YESTERDAY</span>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<div class="content-group text-center">
											<h6 class="text-semibold no-margin"><i class="icon-graph position-left text-slate"></i>EST. LABOR %</h6>
											<span class="text-muted text-size-medium text-semibold">0% <br/>vs. 0% YESTERDAY</span>
										</div>
									</div>
								</div>
								<div class="panel-heading text-center">
									<a href="reports.php" class="btn btn-primary">View all Reports</a>
								</div>
							</div>
						</div>
						<!-- /daily sales -->


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
									<a href="listing_time_off.php" class="btn btn-primary">View all Time off</a>
								</div>
							</div>
						</div>

						<!-- Daily financials -->
						<div class="panel panel-flat">
							<ul class="media-list">
								<li class="media  panel-body stack-media-on-mobile">
									<div class="media-body">
										<h6 class="media-heading text-semibold">
											Employee Shift Feedback
										</h6>

										<p class="content-group-sm">Here's your average from Clicks between Mar 05, 2018 and Mar 11, 2018:</p>

										<ul class="list-inline list-inline-separate" >
											<div class="text-nowrap text-center" >
												<i class="icon-star-full2 text-size-base text-warning-300"  style="font-size: 29px;"></i>
												<i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;"></i>
												<i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;"></i>
												<i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;"></i>
												<i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;"></i>
											</div>
										</ul>
									</div>
									<div class="panel-heading text-center">
										<a href="reports.php" class="btn btn-primary">View All Shift Feedback</a>
									</div>
								</li>
							</ul>
						</div>
						<!-- /daily financials -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title text-semibold">Available to Call-In</h6>
								<div class="category-content">
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<img src="images/face10.jpg" class="img-circle img-sm" alt="">
											</div>

											<div class="media-body">
												<span class="text-semibold">James Alexander</span><br/>
												<span class="text-muted">EMPLOYEE</span>
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<img src="images/face3.jpg" class="img-circle img-sm" alt="">
											</div>

											<div class="media-body">
												<span class="text-semibold">Margo Baker</span><br/>
												<span class="text-muted">P: (898) 169-5676</span><br/>
												<span class="text-muted">MANAGER</span>
											</div>
										</li>
									</ul>
								</div>
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
