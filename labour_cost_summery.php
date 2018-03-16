
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Labour Cost Summery</title>

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
						<h5 class="panel-title">Reports - Labor Cost Summary</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="col-md-8">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Include Salaried Employees</span>
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group text-left">
								<input type="submit" class="btn btn-default" value="HOUR">
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group text-left">
								<input type="submit" class="btn btn-default" value="DAY">
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group text-left">
								<button type="button" class="btn btn-info"><i class="icon-printer position-left"></i>Print</button>
							</div>
						</div>
					</div>
				    <div class="panel-body">
						<div class="col-md-12">
							<div id="myChart"></div>
						</div>
					</div>
				</div>
			<!-- /main content -->
			</div>
	<!-- /page content -->
		<?php include("footer.php");?>
	</div>
	<!-- /page container -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="js/uniform.min.js"></script>
	<script type="text/javascript" src="js/switchery.min.js"></script>
	<script type="text/javascript" src="js/switch.min.js"></script>
	<script type="text/javascript" src="js/form_checkboxes_radios.js"></script>



	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
zingchart.THEME="classic";
var myConfig = {
    "graphset": [
        {
            "type": "bar",
            "background-color": "white",
            "title": {
                "text": "SALES vs LABOUR BREAKDOWN",
                "font-color": "#7E7E7E",
                "backgroundColor": "none",
                "font-size": "22px",
                "alpha": 1,
                "y": "15px",
                "x": "15px"
            },
            "tooltip": {
                "text": "$%v Billion"
            },
            "plotarea": {
                "margin": "80 60 100 60",
                "y": "125px"
            },
            "legend": {
                "layout": "x3",
                "y": "13%",
                "x": "34.5%",
                "overflow": "page",
                "alpha": 0.05,
                "shadow": false,
                "marker": {
                    "type": "circle",
                    "border-color": "none",
                    "size": "10px"
                },
                "border-width": 0,
                "maxItems": 3,
                "toggle-action": "remove",
                "pageOn": {
                    "backgroundColor": "#000",
                    "size": "10px",
                    "alpha": 0.65
                },
                "pageOff": {
                    "backgroundColor": "#7E7E7E",
                    "size": "10px",
                    "alpha": 0.65
                },
                "pageStatus": {
                    "color": "black"
                }
            },
            "plot": {
                "animation": {
                    "effect": "ANIMATION_SLIDE_BOTTOM"
                }
            },
            "scale-x": {
                "line-color": "#7E7E7E",
                "labels": [
                    "Q3-13",
                    "Q4-13",
                    "Q1-14",
                    "Q2-14"
                ],
                "item": {
                    "font-color": "#7e7e7e"
                },
                "guide": {
                    "visible": false
                }
            },
            "scale-y": {
                "line-color": "#7E7E7E",
                "item": {
                    "font-color": "#7e7e7e"
                },
                "values": "0:60:10",
                "guide": {
                    "visible": true
                },
                "label": {
                  "text": "$ Billions",
                  "font-family": "arial",
                  "font-angle":0,
                  "bold": true,
                  "font-size": "14px",
                  "font-color": "#7E7E7E",
                  "offset-y":"-190px",
                  "offset-x":"20px"
            },
            },
            "series": [
                {
                    "values": [
                        37.47,
                        57.59,
                        45.65,
                        37.43
                    ],
                    "alpha": 0.95,
                    "borderRadiusTopLeft": 7,
                    "background-color": "#8993c7",
                    "text": "Sales"
                },
                
                {
                    "values": [
                        17.09,
                        25.59,
                        19.74,
                        19.34
                    ],
                    "borderRadiusTopLeft": 7,
                    "alpha": 0.95,
                    "background-color": "#80b1d3",
                    "text": "Labour"
                },
                
            ]
        }
    ]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: 500, 
	width: 900 
});
 </script>
	
</body>
</html>
