
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFAT | Settings</title>

	<!-- Global stylesheets -->
	<?php
		include ("metalinks.php")
	?>

</head>

<body>
	<?php include ('header.php');?>
	<!-- Page header -->

	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Toolbar -->



				<!-- User profile -->
				<div class="row">
					<?php include ('profile_sidebar.php');?>
					<div class="col-lg-9">
						<div class="panel panel-flat">
										<div class="panel-heading">
											<h6 class="panel-title">Profile information</h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<form action="#">
												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Username</label>
															<input type="text" value="Eugene" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Full name</label>
															<input type="text" value="Kopyov" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Address line 1</label>
															<input type="text" value="Ring street 12" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Address line 2</label>
															<input type="text" value="building D, flat #67" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-4">
															<label>City</label>
															<input type="text" value="Munich" class="form-control">
														</div>
														<div class="col-md-4">
															<label>State/Province</label>
															<input type="text" value="Bayern" class="form-control">
														</div>
														<div class="col-md-4">
															<label>ZIP code</label>
															<input type="text" value="1031" class="form-control">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Email</label>
															<input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
														</div>
														<div class="col-md-6">
								                            <label>Your country</label>
								                            <select class="select">
								                                <option value="germany" selected="selected">Germany</option> 
								                                <option value="france">France</option> 
								                                <option value="spain">Spain</option> 
								                                <option value="netherlands">Netherlands</option> 
								                                <option value="other">...</option> 
								                                <option value="uk">United Kingdom</option> 
								                            </select>
														</div>
													</div>
												</div>

						                        <div class="form-group">
						                        	<div class="row">
						                        		<div class="col-md-6">
															<label>Phone #</label>
															<input type="text" value="+99-99-9999-9999" class="form-control">
															<span class="help-block">+99-99-9999-9999</span>
						                        		</div>

														<div class="col-md-6">
															<label class="display-block">Upload profile image</label>
						                                    <input type="file" class="file-styled">
						                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
														</div>
						                        	</div>
						                        </div>

						                        <div class="text-right">
						                        	<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
						                        </div>
											</form>
										</div>
									</div>
					
					</div>

		
				</div>
				<!-- /user profile -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
		<?php
			include ('footer.php');
		?>
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
	<!-- /footer -->

</body>
</html>
