
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Timeclock</title>

	<!-- Global stylesheets -->
	<?php include("metalinks.php");?>
	<link href="css/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

</head>

<body>

	<?php include("header.php");?>
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-flat text-center">
								<img src="images/05c15fc36d60840bb89d9dd67cdaf191.png" alt="" class="img-rounded " style="height:100px;margin-top:80px;">
							<div class="panel-heading">
								<h6 class="panel-title">Time Clock</h6>
							</div>
							
							<div class="panel-body">
								Turn any mobile phone, tablet, or computer web browser into a time clock.
							</div>
						</div>
						<div class="panel panel-flat">
							<div class="panel-body">
								<div class="tabbable">
									<ul class="nav nav-tabs nav-tabs-component nav-justified">
										<li><a href="#basic-rounded-justified-tab1" data-toggle="tab">Tablet</a></li>
										<li class="active"><a href="#basic-rounded-justified-tab2" data-toggle="tab">Computer</a></li>
										<li><a href="#basic-rounded-justified-tab3" data-toggle="tab">Mobile</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane text-center" id="basic-rounded-justified-tab1">
											<h4 class="">Download the Time Clock app on any iOS or Android tablet.</h4>
											<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_web_clock"><i class="icon-alarm"></i> Launch Web Time Clock</button>
										</div>

										<div class="tab-pane active text-center" id="basic-rounded-justified-tab2">
											<h4 class="">Allow employees to clock in and out from any web browser.</h4>
											<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_web_clock"><i class="icon-alarm"></i> Launch Web Time Clock</button>
										</div>

										<div class="tab-pane text-center" id="basic-rounded-justified-tab3">
											<h4 class="">Download the Time Clock app on any iOS or Android mobile phone.</h4>
											<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_web_clock"><i class="icon-alarm"></i> Launch Web Time Clock</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<div id="modal_web_clock" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<img src="images/8957e2af7d1fed2.jpg" alt="" class="img-rounded " style="height:100px;margin-top:80px;border-radius:50%;">
			<div class="modal-body">
				<h6 class="text-semibold">Launch Web Time Clock?</h6>
				<p>You will be signed out of your personal account. To sign back in, click the Sign Out link in the header & sign back in with your email & password.</p>
			</div>

			<div class="modal-footer text-center">
				<button type="button" class="btn btn-success">Go To Time Clock</button>
			</div>
		</div>
	</div>
</div>

	<!-- Footer -->
	<?php include("footer.php");?>
	<!-- /footer -->

</body>
</html>
