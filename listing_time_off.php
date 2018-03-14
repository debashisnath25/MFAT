<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MFAT | Time off</title>
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
    <div class="panel panel-flat" style="background:#fff;padding:25px;height:90px;">
      <div class="col-md-12">
        <div class="col-md-3">
			<div class="page-title " style="padding:0px !important;margin-top:-5px;">
				<h1><span class="text-bold" style="font-size:20px;">Time off</span></h1>	
			</div>
        </div>
		<div class="col-md-8"></div>
		<div class="col-md-1">
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_time_off"><span class="text-bold" style="font-size:13px;">Add Time-off</span></button>
		</div>
		
		
      </div>
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
            
              <div class="col-lg-10 col-md-offset-1">
			  			<div class="panel panel-flat">
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead style="background:#f9f9fb;">
										<tr>
											<th>Employee</th>
											<th>Time Off Approved (Hrs)</th>
											<th>Paid Time Off</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="col-md-2">
													<a href="javascript:void(0);">
														<div class="media-left media-middle">
															<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs">
																<span class="letter-icon">P</span>
															</a>
														</div>
													</a>
												</div>
												<div class="col-md-3">
													<a href="javascript:void(0);" class="letter-icon-title">Paige Turner</a>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small">None</span>
											</td>
											<td>
												<span class="text-muted text-size-small">None</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="col-md-2">
													<a href="javascript:void(0);">
														<div class="media-left media-middle">
															<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs">
																<span class="letter-icon">B</span>
															</a>
														</div>
													</a>
												</div>
												<div class="col-md-3">
													<a href="javascript:void(0);" class="letter-icon-title">Bob Frapples</a>
												</div>
											</td>
											<td>
												<span class="text-muted text-size-small">None</span>
											</td>
											<td>
												<span class="text-muted text-size-small">None</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-10">
							<div class="page-title " style="padding:0px !important;margin-top:-5px;">
								<h1>
									<span class="text-semibold" style="font-size:15px;">Time off categories that count towards PTO:</span>
								</h1>
								<h5>
									<a href="time_off.php" class="text-semibold" style="font-size:15px;">Edit Time Off Settings <i class="icon-pencil4"></i></a>
								</h5>	
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
    
	<script type="text/javascript" src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/buttons.min.js"></script>
	<script type="text/javascript" src="js/select2.min.js"></script>

	<script type="text/javascript" src="js/select.min.js"></script>

	<script type="text/javascript" src="js/datatables_extension_buttons_print.js"></script>

	<!-- date picker -->
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

    </script>
<div id="modal_time_off" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Success header</h6>
			</div>

			<div class="modal-body">
				<h6 class="text-semibold">Text in a modal</h6>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

				<hr>

				<h6 class="text-semibold">Another paragraph</h6>
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Save changes</button>
			</div>
		</div>
	</div>
</div>
  </body>
</html>
