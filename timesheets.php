
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Timesheets</title>
	<?php include("metalinks.php");?>
</head>

<body>

	<!-- Main navbar -->
	<?php include("header.php");?>
	<div class="navbar-collapse collapse" id="navbar-second-toggle" style="background:white;">
	   <ul class="nav navbar-nav">
		<li class="active"><a href="javascript:void(0);" style="color:#9c70c2;font-weight: 600;"> Timesheets</a></li>

		<li class="dropdown mega-menu mega-menu-wide">
		 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="color:#9c70c2;font-weight: 600;">Errors</a>
		</li>

		<li class="dropdown mega-menu mega-menu-wide">
		 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="color:#9c70c2;font-weight: 600;">Company Level</a>
		</li>
	   </ul>
	 </div>
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content" style="padding:0px;margin:0px;">
			<div class="page-title">
				<div class="col-md-8" >
					<div class="col-md-4">
						<div class="form-group" >
							<button type="button" class="btn btn-default daterange-predefined"  style="padding-right:0px;">
								<i class="icon-calendar22 position-left"></i>
								<span>February 8, 2018 &nbsp; - &nbsp; March 9, 2018</span>
								<b class="caret"></b>
							</button>
						</div>
					</div>
					<div class="col-md-3">
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
				</div>
				<div class="col-md-4">
					<div class="col-md-8 text-right" style="padding-right:5px;">
						<div class="form-group">
							<a href="javascript:void(0);" class="btn btn-default"><h6 class="text-semibold text-muted"><i class="icon-download7"></i> Export</h6></a>
						</div>
					</div>
					<div class="col-md-4" style="padding:0px;margin:0px;">
						<div class="form-group">
							<a href="javascript:void(0);" class="btn btn-success"><h6 class="text-semibold">Add a Time Card</h6></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	    <div class="panel panel-flat" style="background:#F9F9FB;padding:25px;height:90px;">
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
			<div class="col-md-2">
				<div class="form-group">					
					<select data-placeholder="Select a State..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
						<option>By Status</option>
						<optgroup label="Mountain Time Zone">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
						</optgroup>
						<optgroup label="Central Time Zone">
							<option value="AL">Alabama</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
						</optgroup>
						<optgroup label="Eastern Time Zone">
							<option value="CT">Connecticut</option>
							<option value="FL">Florida</option>
							<option value="MA">Massachusetts</option>
							<option value="WV">West Virginia</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="col-md-2">
					<div class="form-group">					
					<select data-placeholder="Select a State..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
						<option>By Role</option>
						<optgroup label="Mountain Time Zone">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
						</optgroup>
						<optgroup label="Central Time Zone">
							<option value="AL">Alabama</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
						</optgroup>
						<optgroup label="Eastern Time Zone">
							<option value="CT">Connecticut</option>
							<option value="FL">Florida</option>
							<option value="MA">Massachusetts</option>
							<option value="WV">West Virginia</option>
						</optgroup>
					</select>
				</div>
			  
			</div>
			<div class="col-md-1">
			  <span class="input-group-addon" style="width:48%;border:1px solid #cccccc;">
				<i class="icon-printer2">
				</i>
			  </span>
			    <span class="input-group-addon" style="width:48%;border:1px solid #cccccc;">
				<i class="icon-file-download">
				</i>
			  </span>
			</div>
			<div class="col-md-1">
			<button type="button" class="btn border-slate text-slate-800 btn-flat">Invite Team</button>
			
			</div>
				<div class="col-md-1">
			
					<button type="button" class="btn btn-primary" style="width:100%;">Add
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
							<?php
								for($i=0;$i<10;$i++){
							?>
							<tr>
								<td>Victoria</td>
								<td>Margaret</td>
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
							<?php
								}
							?>
						</tbody>
					</table>
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
