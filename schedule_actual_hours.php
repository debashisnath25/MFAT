
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Schedule Actual Hours</title>

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
						<div id="myChart"></div>
					</div>
				</div>
			</div>
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

	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
	<!-- /footer -->
<script>
	// make the AJAX request
var oReq = new XMLHttpRequest();
oReq.addEventListener("load", reqListener);
oReq.open("GET", "https://zingchart-rest-api.glitch.me/api/data/plot/v1");
oReq.send();
 
// define chart JSON
var myConfig = {
 	type: 'bar', 
 	globals:{
 	  fontColor:"#3F3F3F"
 	},
 	title: {
 	  text: ''
 	},
 	scaleY:{
 	  step: 25,
 	  lineWidth: 2
 	},
 	scaleX:{
 	  lineWidth: 2
 	},
 	tooltip:{
 	  fontColor:"#ffffff",
 	  size: 12,
 	  borderRadius: 3
 	},
	series: [
		{
      values: [],
      backgroundColor:'#3E50B4'
		}
	]
};
 
/*
 * callback for GET request is when we will render the chart
 */
function reqListener () {
  // responseText is an array of Number types
  if (this.responseText) {
    myConfig.series[0].values = JSON.parse(this.responseText);
  }
  zingchart.render({ 
  	id: 'myChart', 
  	data: myConfig, 
  	height: '100%', 
  	width: '100%' 
  });
}
 
 </script>

</body>
</html>
