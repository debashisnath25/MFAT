
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Sales Summery</title>

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
						<h5 class="panel-title">Reports - Sales Summary</h5>
					</div>
				</div>
				<!-- /simple panel -->


				<!-- Table -->
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="col-md-6">
							<div class="form-group">
								<button type="button" class="btn btn-default daterange-predefined">
									<i class="icon-calendar22 position-left"></i>
									<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
									<b class="caret"></b>
								</button>
								<input type="submit" value="UPDATE" class="btn btn-primary">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group text-right">
								<button type="button" class="btn btn-info"><i class="icon-printer position-left"></i>Print</button>
							</div>
						</div>
					</div>
				    <div class="panel-body">
						<h5 class="panel-title">Sales Summary</h5>
							<div class="col-md-4">
								<div class="panel panel-flat"  style="height:160px;">
									<div class="panel-heading">
										<h6 class="panel-title">SALES</h6>
									</div>
									<div class="panel-body">
										<h3 class="panel-title text-bold">$0.00 <span class="text-bold" style="color:#60b86b;font-size:15px;"><i class="icon-arrow-up5"></i>0<span></h3>
										<span>vs $0.00 last week</span> <br/>
										<span class="text-semibold">Sales data updated about 18 hours ago</span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-flat" style="height:160px;">
									<div class="panel-heading">
										<h6 class="panel-title">EST. LABOUR</h6>
									</div>
									<div class="panel-body">
										<h3 class="panel-title text-bold">$0.00 <span class="text-bold" style="color:#de7a3f;font-size:15px;"><i class="icon-arrow-up5"></i>0<span></h3>
										<span>vs $0.00 last week</span> <br/>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-flat"  style="height:160px;">
									<div class="panel-heading">
										<h6 class="panel-title">EST. LABOUR %</h6>
									</div>
									<div class="panel-body">
										<h3 class="panel-title text-bold">100% <span class="text-bold" style="color:#60b86b;font-size:15px;"><i class="icon-arrow-down5"></i>0<span></h3>
										<span>vs 100% last week</span> <br/>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<div id='myChart'></div>
							</div>
							<div class="table-responsive">
							<table class="table datatable-button-html5-columns">
								<thead>
									<tr>
										<th>DATE</th>
										<th>SALES</th>
										<th>LABOUR COST</th>
										<th>LABOR COST AS % OF SALES</th>
									</tr>
								</thead>
								<tbody>
									<?php
										for($i=0;$i<5;$i++){
									?>
									<tr>
										<td>Mon, Mar 12</td>
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
			<!-- /main content -->
			</div>
	<!-- /page content -->
	<?php include("footer.php");?>
	</div>
	<!-- /page container -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/select2.min.js"></script>
	<script type="text/javascript" src="js/jszip.min.js"></script>
	<script type="text/javascript" src="js/pdfmake.min.js"></script>
	<script type="text/javascript" src="js/vfs_fonts.min.js"></script>
	<script type="text/javascript" src="js/buttons.min.js"></script>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/datatables_extension_buttons_html5.js"></script>

	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
var myConfig = {
    "type":"bar3d",
    "background-color":"#fff",
    "3d-aspect":{
        "true3d":0,
        "y-angle":10,
        "depth":30
    },
    "title":{
        "text":"Sales vs Labour",
        "height":"40px",
        "font-weight":"normal",
        "text-color":"#ffffff"
    },
    "legend":{
        "layout":"float",
        "background-color":"none",
        "border-color":"none",
        "item":{
            "font-color":"#333"
        },
        "x":"37%",
        "y":"10%",
        "width":"90%",
        "shadow":0
    },
    "plotarea":{
        "margin":"95px 35px 50px 70px",
        "background-color":"#fff",
        "alpha":0.3
    },
    "scale-y":{
        "background-color":"#fff",
        "border-width":"1px",
        "border-color":"#333",
        "alpha":0.5,
        "format":"$%v",
        "guide":{
            "line-style":"solid",
            "line-color":"#333",
            "alpha":0.2
        },
        "tick":{
            "line-color":"#333",
            "alpha":0.2
        },
        "item":{
            "font-color":"#333",
            "padding-right":"6px"
        }
    },
    "scale-x":{
        "background-color":"#fff",
        "border-width":"1px",
        "border-color":"#333",
        "alpha":0.5,
        "values":["January","February","March","April","May","June"],
        "guide":{
            "visible":false
        },
        "tick":{
            "line-color":"#333",
            "alpha":0.2
        },
        "item":{
            "font-size":"11px",
            "font-color":"#333"
        }
    },
    "series":[
        {
            "values":[22650,18750,29050,28745,31500,31625],
            "text":"Sales",
            "background-color":"#03A9F4 #4FC3F7",
            "border-color":"#03A9F4",
            "legend-marker":{
                "border-color":"#03A9F4"
            },
            "tooltip":{
                "background-color":"#03A9F4",
                "text":"$%v",
                "font-size":"12px",
                "padding":"6 12",
                "border-color":"none",
                "shadow":0,
                "border-radius":5
            }
        },
        {
            "values":[24200,12750,24250,11500,22550,24250],
            "text":"Labour",
            "background-color":"#673AB7 #9575CD",
            "border-color":"#673AB7",
            "legend-marker":{
                "border-color":"#673AB7"
            },
            "tooltip":{
                "background-color":"#673AB7",
                "text":"$%v",
                "font-size":"12px",
                "padding":"6 12",
                "border-color":"none",
                "shadow":0,
                "border-radius":5
            }
        }
    ]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: 500, 
	width: 900,
	defaults:{
	  'font-family':'sans-serif'
	}
});
 </script>
	
</body>
</html>
