
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Ontime Arrival</title>

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
						<h5 class="panel-title">Reports - On-Time Arrival</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="col-md-5">
							<div class="form-group">
								<button type="button" class="btn btn-default daterange-predefined">
									<i class="icon-calendar22 position-left"></i>
									<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
									<b class="caret"></b>
								</button>
								<input type="submit" value="UPDATE" class="btn btn-primary">
							</div>
						</div>
						<div class="col-md-7 text-right">
							<div class="form-group">
								<select class="select-fixed-single" style="width:140px;">
									<option value="High to Low" selected>High to Low</option>
									<option value="Low to High">Low to High</option>
									<option value="Alphabetical">Alphabetical</option>
								</select>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table datatable-button-html5-columns">
							<thead>
								<tr>
									<th>Rank</th>
									<th>Employee</th>
									<th># ON-TIME ARRIVALS</th>
									<th>ON-TIME ARRIVAL RATE</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mario Speedwagon</td>
									<td>0/0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Petey Cruiser</td>
									<td>0/5</td>
									<td>0%</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Anna Sthesia</td>
									<td>0/6</td>
									<td>0%</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Paul Molive</td>
									<td>0/0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Anna Mull</td>
									<td>0/0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Gail Forcewind</td>
									<td>0/0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Paige Turner</td>
									<td>0/0</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Bob Frapples</td>
									<td>0/0</td>
									<td>N/A</td>
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
</body>
</html>
