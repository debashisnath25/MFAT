
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Hourly Labour</title>

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
						<h5 class="panel-title">Reports - Hourly Labour Costs</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="form-group">
								<button type="button" class="btn btn-default daterange-predefined">
									<i class="icon-calendar22 position-left"></i>
									<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
									<b class="caret"></b>
								</button>
								<input type="submit" value="UPDATE" class="btn btn-primary">
							</div>
						</div>
					</div>
					<div class="panel-heading">
						<div class="panel-body">
							<div class="col-md-6 text-left">
								<div class="form-group">
									<h5 class="panel-title">Hourly Labour Costs</h5>
								</div>
							</div>
							<div class="col-md-6 text-right">
								<div class="form-group">
									<span class="text-semibold" style="font-size:11px;">about 11 hours ago</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h6 class="panel-title text-center">Scheduled Labor Costs </h6>
									</div>
									
									<div class="panel-body text-center">
										<h5 class="panel-title text-semibold">$0.00</h5>
										<h6>0 HRS</h6>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h6 class="panel-title text-center">Est. Paid Labor Costs</h6>
									</div>
									
									<div class="panel-body text-center">
										<h5 class="panel-title text-semibold">$0.00</h5>
										<h6>0 HRS</h6>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-flat" style="height:159px;">
									<div class="panel-heading">
										<h6 class="panel-title text-center">Labor Cost as % of Sales</h6>
									</div>
									<div class="panel-body text-center">
										<h5 class="panel-title text-semibold">100.00 %</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="panel-body">
						<div id="myChart"></div>
					</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table datatable-button-html5-columns">
							<thead>
								<tr>
									<th>Time</th>
									<th>Sales</th>
									<th>SCHEDULED LABOR COSTS</th>
									<th>EST. PAID LABOR COSTS</th>
									<th>LABOR COST AS % OF SALES</th>
								</tr>
							</thead>
							<tbody>
							  <?php 
								for($i=0;$i<10;$i++){
							  ?>
								<tr>
									<td>03/12 12AM</td>
									<td>$0.00</td>
									<td>$0.00</td>
									<td>$0.00</td>
									<td>100.00%</td>
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

	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
	<script>
		zingchart.THEME="classic";
var myConfig = 
        {
            "type": "hbullet",
            "background-color": "#fff",
            "title": {
                "text": "Sales vs Scheduled Labor vs Est. Paid Labor",
                "font-family": "arial",
                "font-size": "28px",
                "font-color": "#434F5B",
                "font-weight": "normal",
                "background-color": "none",
                "margin-top": "3%",
                "text-align": "center"
            },
            "legend": {
                "layout": "float",
                "position": "50% 12%",
                "background-color": "none",
                "border-width": "0px",
                "toggle-action": "remove",
                "item": {
                    "font-family": "arial",
                    "font-weight": "normal",
                    "font-size": "12px",
                    "font-color": "#307C70",
                    "shadow": 0,
                    "cursor": "hand"
                },
                "marker": {
                    "cursor": "hand"
                }
            },
            "scale-y": {
                "values": "0:100:20",
                "line-width": "1px",
                "line-color": "#434F5B",
                "format": "%v",
                "line-style": "solid",
                "guide": {
                    "line-color": "#434F5B",
                    "line-style": "solid",
                    "alpha": 0.25
                },
                "tick": {
                    "line-width": "1px",
                    "line-color": "#434F5B"
                },
                "item": {
                    "font-size": "12px",
                    "font-color": "#434F5B",
                    "font-weight": "normal",
                    "font-family": "arial",
                    "offset-y": "5%"
                }
            },
            "scale-x": {
                "values": [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun"
                ],
                "line-color": "#434F5B",
                "line-style": "solid",
                "line-width": "1px",
                "guide": {
                    "line-color": "#434F5B",
                    "line-style": "solid",
                    "alpha": 0.25
                },
                "tick": {
                    "line-width": "1px",
                    "line-color": "#434F5B"
                },
                "item": {
                    "font-size": "12px",
                    "font-color": "#434F5B",
                    "font-weight": "normal",
                    "font-family": "arial",
                    "offset-x": "-5%"
                }
            },
            "plot": {
                "background-color": "#000000",
                "alpha": 1,
                "bar-space":"10px",
                "tooltip-text": "Time: %g<br>Sales: %v",
                "animation": {
                    "effect": 4,
                    "method": "0",
                    "sequence": "4"
                }
            },
            "plotarea": {
                "margin": "22% 5% 15% 10%",
                "background-color": "#ffffff"
            },
            "series": [
                {
                    "text": "Sales",
                    "values": [
                        69,
                        71,
                        67,
                        87,
                        85,
                        67
                    ],
                    "goals": [
                        85,
                        77,
                        87,
                        53,
                        70,
                        60
                    ],
                    "line-color": "#6FA3C1",
                    "background-color": "#6FA3C1",
                    "legend-marker": {
                        "border-color": "#6FA3C1"
                    }
                },
                {
                    "text": "Scheduled Labor Costs",
                    "values": [
                        90,
                        55,
                        64,
                        65,
                        87,
                        90
                    ],
                    "goals": [
                        53,
                        61,
                        53,
                        75,
                        80,
                        76
                    ],
                    "line-color": "#F79434",
                    "background-color": "#F79434",
                    "legend-marker": {
                        "border-color": "#F79434"
                    }
                },
                {
                    "text": "Est. Paid Labor Costs",
                    "values": [
                        61,
                        70,
                        88,
                        62,
                        85,
                        67
                    ],
                    "goals": [
                        81,
                        64,
                        79,
                        86,
                        84,
                        78
                    ],
                    "line-color": "#7A6652",
                    "background-color": "#7A6652",
                    "legend-marker": {
                        "border-color": "#7A6652"
                    }
                }
            ]
        };
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: 500, 
	width: 725 
});
	</script>
</body>
</html>
