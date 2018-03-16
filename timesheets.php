
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Timesheets</title>
	<?php include("metalinks.php");?>
	
	<style>
		.show-calendar
		{
			z-index: 2050 !important;
		}
		.AnyTime-win
		{
			z-index: 2050 !important;
		}
	</style>
</head>

<body>

	<!-- Main navbar -->
	<?php include("header.php");?>
	
	<!-- Page header -->


	    <div class="panel panel-flat" style="background:white;padding:25px;height:90px;">
      <div class="col-md-12">
        <div class="col-md-3">
			<div class="form-group" >
				<button type="button" class="btn btn-default daterange-predefined"  style="padding-right:0px;">
					<i class="icon-calendar22 position-left"></i>
					<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
					<b class="caret"></b>
				</button>
			</div>
		</div>
		
		<div class="col-md-2">
			<div class="form-group" >
						<select class="bootstrap-select" data-width="100%" tabindex="-98">
							<option value="" selected>Summary View</option>
							<option value="Detailed View">Detailed View</option>
							<option value="Day View">Day View</option>
						</select>
					</div>
				</div>

				<div class="col-md-3">
						<div class="form-group">
							<select class="bootstrap-select" data-width="100%" tabindex="-98">
								<option value="" selected>All Employees</option>
								<option value="Paul Molive">Paul Molive</option>
								<option value="Anna Mull">Anna Mull</option>
							</select>
						</div>
					</div>
		
			<div class="col-md-1">
			<button type="button" class="btn border-slate text-slate-800 btn-flat"><i class="icon-download7"></i>&nbsp;Export</button>
			
			</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary" style="width:100%;" data-toggle="modal" data-target="#modal_add_schedule">Add Time Card
			  </button>
			</div>
      </div>
    </div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic example -->
				<div class="panel panel-flat" style="margin-top:-15px;">
					<div class="panel-heading">
						<h5 class="panel-title text-semibold">Mar 05 2018 - Mar 11 2018</h5>
					</div>

					<div class="panel-body">
						<div class="col-md-10">
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted " style="font-size:11px;">Total Paid Hours&nbsp; <span style="color:black;">0.00</span></span></h6>
							</div>
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted" style="font-size:11px;">Estimated Wages <i class="icon-question4"></i>&nbsp; <span style="color:black;">$0.00</span></span></h6>
							</div>
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted" style="font-size:11px;">Net Sales <i class="icon-question4"></i>&nbsp; <span style="color:black;">$0.00</span></span></h6>
							</div>
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted" style="font-size:11px;">Total Tips <i class="icon-question4"></i>&nbsp; <span style="color:black;">$0.00</span></span></h6>
							</div>
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted" style="font-size:11px;">Overtime <i class="icon-question4"></i>&nbsp; <span style="color:black;">$0.00</span></span></h6>
							</div>
							<div class="col-md-2">
								<h6 class="panel-title text-semibold"><span class="text-muted" style="font-size:11px;">Early Clock-Ins <i class="icon-question4"></i>&nbsp;<span style="color:black;"> $0.00</span></span></h6>
							</div>
						</div>
					</div>

					<table class="table datatable-button-print-columns">
						<thead>
							<tr style="background-color:#f9f9fb;">
								<th><span class="text-muted">First&nbsp;Name</span></th>
								<th><span class="text-muted">Last&nbsp;Name</span></th>
								<th><span class="text-muted">Role</span></th>
								<th><span class="text-muted">Wage&nbsp;Rate</span></th>
								<th><span class="text-muted">Sched.</span></th>
								<th><span class="text-muted">Actual</span></th>
								<th><span class="text-muted">Sch.&nbsp;vs.&nbsp;Paid&nbsp;Diff</span></th>
								<th><span class="text-muted">Total&nbsp;Paid</span></th>
								<th><span class="text-muted">Regular</span></th>
								<th><span class="text-muted">Estimated&nbsp;OT</span></th>
								<th><span class="text-muted">Unpaid&nbsp;Breaks</span></th>
								<th><span class="text-muted">Est.&nbsp;Wages</span></th>
								<th><span class="text-muted">Cash&nbsp;Tips</span></th>
								<th><span class="text-muted">Credit&nbsp;Tips</span></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>Mario </td>
								<td>Speedwagon</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Petey </td>
								<td>Cruiser</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Anna </td>
								<td>Sthesia</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Paul </td>
								<td>Molive</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Anna </td>
								<td>Mull</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Gail </td>
								<td>Forcewind</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Paige </td>
								<td>Turner</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
									<tr>
								<td>Bob </td>
								<td>Frapples</td>
								<td></td>
								<td></td>
								<td>90.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
								<td>$0.00</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



				<div id="modal_add_schedule" class="modal fade in" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<div class="modal-header bg-info">
									<button type="button" class="close" data-dismiss="modal"><i class="icon-close2"></i></button>
									<h5 class="modal-title">Add New Timesheet</h5>
							   </div>
								
							</div>
							<div class="panel panel-flat" style="border:none;">
								<div class="panel-body">
									<div class="tabbable">
									
										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-justified-tab1">
													<form action="#">
														<div class="modal-body" style="padding:0 !important">
															<div class="form-group">
																<div class="row">
																	<div class="col-sm-4">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">From</label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="icon-alarm"></i></span>
																			<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Role</label>
																		<div class="multi-select-full">
																				<select class="multiselect" multiple="multiple" style="display: none;">
																					<option value="Entire Team">Entire Team</option>
																					<option value="Employees">Employees</option>
																					<option value="Managers">Managers</option>
																					<option value="Scheduled Today">Scheduled Today</option>
																					<option value="Scheduled Tomorrow">Scheduled Tomorrow</option>
																				</select>
																			</div>
																	</div>
																	<div class="col-sm-4">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Date</label>
																			<div class="input-group">
																				<span class="input-group-addon"><i class="icon-calendar22"></i></span>
																				<input type="text" class="form-control daterange-single " id="idTourDateDetails" value="03/18/2013">
																			</div>
																	</div>

																	
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Clock In Time</label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="icon-alarm"></i></span>
																			<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
																		</div>
																	</div>

																			<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Clock Out Time</label>
																			<div class="input-group">
																			<span class="input-group-addon"><i class="icon-alarm"></i></span>
																			<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
																		</div>
																	</div>

																</div>
															</div>

															<div class="form-group">
																<div class="row">
																	<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Cash Tips</label>
																			   <div class="input-group">
																				<span class="input-group-addon">
																				  <i class="icon-coin-dollar">
																				  </i>
																				</span>
																				<input type="text" class="form-control" placeholder="Left and right icons">
																			 </div>
																	</div>

																		<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Credit Tips</label>
																		   <div class="input-group">
																				<span class="input-group-addon">
																				  <i class="icon-coin-dollar">
																				  </i>
																				</span>
																				<input type="text" class="form-control" placeholder="Left and right icons">
																			 </div>
																	</div>
																</div>
															</div>
																	<div class="form-group">
																<div class="row">
																	<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Break Start</label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="icon-alarm"></i></span>
																			<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
																		</div>
																	</div>

																			<div class="col-sm-6">
																		<label style="color: #959eac;font-size: 15px;text-transform: uppercase;font-weight: 700;">Break End</label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="icon-alarm"></i></span>
																			<input type="text" class="form-control" id="anytime-time" value="12:34" readonly="">
																		</div>
																	</div>

																</div>
															</div>
														</div>

														<div class="modal-footer">
															<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Submit form</button>
														</div>
													</form>
											</div>

											<div class="tab-pane" id="highlighted-justified-tab2">
												<div class="col-md-6">
													<div class="col-md-12">
													<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
													<div class="col-md-12">
													<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
													<div class="col-md-12">
													<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
												</div>
												<div class="col-md-6">
												<div class="col-md-12">
												<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
													<div class="col-md-12">
													<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
													<div class="col-md-12">
													<span style="vertical-align: middle;width: 10px;height: 10px;margin-right: 7px;border-radius: 3px;background-color: #E96E57;"></span>
													<span style="font-weight: 600;margin-right: 10px;vertical-align: middle;color: #40A6B7;">7 am-10 pm</span>
													<span style="vertical-align: middle;color: #40A6B7;font-weight: 600;cursor: pointer;">Manegar</span>
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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

	<script type="text/javascript" src="js/bootstrap_select.min.js"></script>
	<script type="text/javascript" src="js/form_bootstrap_select.js"></script>
	<!-- /footer -->

</body>
</html>
