
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Schedule Actual Clock In</title>

	<!-- Global stylesheets -->
	<?php include("metalinks.php");?>
	<!-- /theme JS files -->
<style>
html,body {
  height:100%;
  width:100%;
}
 
#myChart {
  height:100%;
  width:100%;
  min-height:400px;
}
 
.zc-ref {
  display: none;
}
</style>
</head>

<body>

	<!-- Main navbar -->
	<?php include("header.php");?>
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include("reports_sidebar.php")?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Simple panel -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Reports - Scheduled vs Actual Clock-Ins</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="table-responsive">
						<table class="table datatable-button-html5-columns">
							<thead>
								<tr>
									<th>Name</th>
									<th>Date</th>
									<th>Scheduled Start</th>
									<th>Actual Start</th>
									<th>Difference</th>
									<th>Scheduled End</th>
									<th>Actual End</th>
									<th>Difference</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mario Speedwagon</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Petey Cruiser</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Anna Sthesia</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Paul Molive</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Anna Mull</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Gail Forcewind</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Paige Turner</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
								<tr>
									<td>Bob Frapples</td>
									<td>10/03/2018</td>
									<td>10:00 AM</td>
									<td>09:30 AM</td>
									<td>30 mins</td>
									<td>05:20 PM</td>
									<td>05:30 PM</td>
									<td>10 mins</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /main content -->

		</div>
		<?php include("footer.php");?>
	<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<script type="text/javascript" src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/select2.min.js"></script>
	<script type="text/javascript" src="js/jszip.min.js"></script>
	<script type="text/javascript" src="js/pdfmake.min.js"></script>
	<script type="text/javascript" src="js/vfs_fonts.min.js"></script>
	<script type="text/javascript" src="js/buttons.min.js"></script>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/datatables_extension_buttons_html5.js"></script>
</body>
</html>
