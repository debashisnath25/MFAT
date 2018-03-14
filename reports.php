
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Reports</title>

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
						<h5 class="panel-title">Reports - Overview</h5>
						<div class="heading-elements">
							<div class="form-group">
								<button type="button" class="btn btn-default daterange-predefined">
									<i class="icon-calendar22 position-left"></i>
									<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
									<b class="caret"></b>
								</button>
							</div>
	                	</div>
					</div>

					<div class="panel-body">
						<h6 class="text-semibold text-center">SCHEDULED VS ACTUAL HOURS</h6>
						<p class="content-group text-center">Actual hours were (N/A) than last week and 100% lower than scheduled</p>
						<div id="myChartzzz"></div>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Type of Hours</th>
									<th>Hours</th>
									<th>Costs</th>
									<th>% Of Sales</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Scheduled</td>
									<td>165.00</td>
									<td>$0.00</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Actual</td>
									<td>0.00</td>
									<td>$0.00</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Difference</td>
									<td>165.00</td>
									<td>$0.00</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<h6 class="text-semibold text-center">HOURS VS SALES</h6>
						<p class="content-group text-center">Yesterday, actual hours were (N/A) than the same day last week and 100% lower than what was scheduled</p>
						<div id="myChart"></div>
					</div>
				</div>

				<div class="panel panel-flat">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Type of Hours</th>
									<th>Hours</th>
									<th>Costs</th>
									<th>% Of Sales</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Scheduled</td>
									<td>165.00</td>
									<td>$0.00</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Actual</td>
									<td>0.00</td>
									<td>$0.00</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Difference</td>
									<td>165.00</td>
									<td>$0.00</td>
									<td>0</td>
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
	<script type="text/javascript" src="js/jgrowl.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/daterangepicker.js"></script>
	<script type="text/javascript" src="js/anytime.min.js"></script>
	<script type="text/javascript" src="js/picker.js"></script>
	<script type="text/javascript" src="js/picker.date.js"></script>
	<script type="text/javascript" src="js/picker.time.js"></script>
	<script type="text/javascript" src="js/legacy.js"></script>

	<script type="text/javascript" src="js/picker_date.js"></script>
	<script type="text/javascript" src="js/zingchart.min.js"></script>
	<!-- /footer -->

<script>
zingchart.THEME="classic";
var myConfig = {
    "type":"bullet",
    "background-color":"#fff",
	
	"plotarea":{
 
	},
    "scaleX":{
        "guide":{
            "visible":false
        },
        "label":["Sales Revenue Streams"],
        "values":["Mon 12","Tue 13","Wed 14"],
        "tick":{
            "line-color":"#333"
        },
        "line-color":"#666",
        "item":{
            "wrapText":true,
            "color":"#333"
        }
    },
    "scaleY":{
        "tick":{
            "line-color":"#333"
        },
        "line-color":"#333",
        "guide":{
            "lineStyle":"solid"
        },
        "item":{
            "wrapText":true,
            "color":"#333"
        },
        "short":true,
        "thousands-separator":","
    },
	"plot":{
	  "tooltip":{
            "fontSize":15,
            "align":"left",
            "borderRadius":3,
            "borderWidth":2,
            "borderColor":"%color-1",
            "backgroundColor":"#fff",
            "shadow":0,
            "alpha":0.9,
            "padding":10,
            "color":"#000",
            "negation":"currency",
            "thousandsSeparator":",",
            "text":"<b style=\"color:%color\">Scheduled Hours: %negation$%node-value</b> USD<br><em style=\"color:#C4473F\">Actual Hours: %negation$%g</em> USD",
        },
        "goal":{
            "background-color":"#C4473F"
        },
        "styles":[
          {
            "background-color":"#87E1FF",
            "alpha":0.7
          },
          {
            "background-color":"#008cba",
            "alpha":0.7
          },
          {
            "background-color":"#00526D",
            "alpha":0.7
          }
          ]
        
	},
	"series":[
		{
			"values":[394098000, 493665000,321510000 ],
			"hover-state":{
			  "styles":[
          {
            "alpha":1,
            "background-color":"#87E1FF"
          },
          {
            "alpha":1,
            "background-color":"#008cba"
          },
          {
            "alpha":1,
            "background-color":"#00526D"
          }
          ]
			},
      "goals":[380250000, 490000600, 260100000]
		}
	]
};
 
zingchart.render({ 
	id : 'myChartzzz', 
	data : myConfig, 
	height: 500, 
	width: 1000 
});
</script>

<script>
var myConfig = {
    "graphset": [
        {
            "type": "bar",
            "background-color": "white",
            "plotarea": {
                "margin": "dynamic"
            },
            "legend": {
                "layout": "x3",
                "overflow": "page",
                "alpha": 0.05,
                "shadow": false,
                "align":"center",
                "adjust-layout":true,
                "marker": {
                    "type": "circle",
                    "border-color": "none",
                    "size": "10px"
                },
                "border-width": 0,
                "maxItems": 3,
                "toggle-action": "hide",
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
                "bars-space-left":0.15,
                "bars-space-right":0.15,
                "animation": {
                    "effect": "ANIMATION_SLIDE_BOTTOM",
                    "sequence": 0, 
                    "speed": 800,
                    "delay": 800
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
                  "bold": true,
                  "font-size": "14px",
                  "font-color": "#7E7E7E",
                },
            },
            "scaleX":{
                "values": [
                    "Q3",
                    "Q4",
                    "Q1",
                    "Q2"
                ],
                "placement":"default",
                "tick":{
                    "size":58,
                    "placement":"cross"
                },
                "itemsOverlap":true,
                "item":{
                    "offsetY":-55
                }
            },
            "scaleX2":{
                "values":["2013","2014"],
                "placement":"default",
                "tick":{
                    "size":20,
                },
                "item":{
                    "offsetY":-15
                }
            },
            "tooltip": {
              "visible": false
            },
            "crosshair-x":{
                "line-width":"100%",
                "alpha":0.18,
                "plot-label":{
                  "header-text":"%kv Sales"
                }
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
                    "text": "Actual Hours",
                },
                {
                    "values": [
                        2.02,
                        2.59,
                        2.5,
                        2.91
                    ],
                    "borderRadiusTopLeft": 7,
                    "alpha": 0.95,
                    "background-color": "#fdb462",
                    "text": "Scheduled Hours"
                },
                {
                    "values": [
                        13.4,
                        14.11,
                        14.89,
                        16.86
                    ],
                    "alpha": 0.95,
                    "borderRadiusTopLeft": 7,
                    "background-color": "#8dd3c7",
                    "text": "Forecasted Sales"
                },
                {
                    "values": [
                        18.53,
                        24.52,
                        20.4,
                        23.38
                    ],
                    "borderRadiusTopLeft": 7,
                    "alpha": 0.95,
                    "background-color": "#fb8072",
                    "text": "Actual Sales"
                },
               
            ]
        }
    ]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: '100%', 
	width: '100%' 
});
</script>


</body>
</html>
