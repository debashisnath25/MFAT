
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Labour by type</title>

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
						<h5 class="panel-title">Reports - Labour By Type</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="col-md-9">
							<div class="form-group">
								<button type="button" class="btn btn-default daterange-predefined">
									<i class="icon-calendar22 position-left"></i>
									<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
									<b class="caret"></b>
								</button>
								<input type="submit" value="UPDATE" class="btn btn-primary">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled">
										<span style="font-size:16px;">Include Salaried Employees</span>
									</label>
								</div>
							</div>
						</div>
					</div>
				    <div class="panel-body">
						<div class="col-md-9">
							<div id="myChart"></div>
						</div>
						<div class="col-md-1">
							<input type="submit" class="btn bg-brown" Value="HOURS">
						</div>
						<div class="col-md-1">
							<input type="submit" class="btn btn-default" Value="COSTS">
						</div>
						<div class="col-md-3">
							<div class="panel panel-flat" style="border:none">
								<div class="panel-heading">
									<h6 class="panel-title">Labour Cost</h6>
								</div>
								<div class="panel-body">
									<h3 class="panel-title text-bold">0hrs</h3>
									<span>vs. 0hrs last week</span> <br/>
									<span class="text-bold" style="color:#60b86b;font-size:1.15em;"><i class="icon-arrow-up5"style="font-size:1.35em;"></i> +100%<span>
								</div>
							</div>
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
