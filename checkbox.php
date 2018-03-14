
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<?php include("metalinks.php");?>
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	

	<!-- Theme JS files -->
	
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include("header.php");?>
	<!-- /main navbar -->


	<!-- Second navbar -->
	
	<!-- /second navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Checkboxes &amp; Radios</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="form_checkboxes_radios.html">Forms</a></li>
					<li class="active">Checkboxes &amp; radios</li>
				</ul>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
				</div>
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

				<!-- Checkboxes -->
            	<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Checkboxes</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

                	<div class="panel-body">
        				<p class="content-group">The HTML input element <code>&lt;input type=checkbox></code> is an input element to enter an array of different values. The <code>value</code> attribute is used to define the value submitted by the checkbox. The <code>checked</code> attribute is used to indicate whether this item is selected. The <code>indeterminate</code> attribute is used to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).</p>

        				<div class="row">
        					<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Left stacked default</label>
									<div class="checkbox">
										<label>
											<input type="checkbox" checked="checked">
											Checked default
										</label>
									</div>

									<div class="checkbox">
										<label>
											<input type="checkbox">
											Unchecked default
										</label>
									</div>

									<div class="checkbox disabled">
										<label>
											<input type="checkbox" checked="checked" disabled="disabled">
											Disabled default
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Left inline default</label>
									<label class="checkbox-inline">
										<input type="checkbox" checked="checked">
										Checked default
									</label>

									<label class="checkbox-inline">
										<input type="checkbox">
										Unchecked default
									</label>
								</div>

								<div class="form-group pt-15">
									<label class="display-block text-semibold">Left stacked styled</label>
									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled" checked="checked">
											Checked styled
										</label>
									</div>

									<div class="checkbox">
										<label>
											<input type="checkbox" class="styled">
											Unchecked styled
										</label>
									</div>

									<div class="checkbox disabled">
										<label>
											<input type="checkbox" class="styled" disabled="disabled">
											Disabled styled
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Lef inline styled</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" checked="checked">
										Checked styled
									</label>

									<label class="checkbox-inline">
										<input type="checkbox" class="styled">
										Unchecked styled
									</label>
								</div>
        					</div>

        					<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Right stacked default</label>
									<div class="checkbox checkbox-right">
										<label>
											<input type="checkbox" checked="checked">
											Checked default
										</label>
									</div>

									<div class="checkbox checkbox-right">
										<label>
											<input type="checkbox">
											Unchecked default
										</label>
									</div>

									<div class="checkbox checkbox-right disabled">
										<label>
											<input type="checkbox" checked="checked" disabled="disabled">
											Disabled default
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Right inline default</label>
									<label class="checkbox-inline checkbox-right">
										<input type="checkbox" checked="checked">
										Checked default
									</label>

									<label class="checkbox-inline checkbox-right">
										<input type="checkbox">
										Unchecked default
									</label>
								</div>

								<div class="form-group pt-15">
									<label class="display-block text-semibold">Right stacked styled</label>

									<div class="checkbox checkbox-right">
										<label>
											<input type="checkbox" class="styled" checked="checked">
											Checked styled
										</label>
									</div>

									<div class="checkbox checkbox-right">
										<label>
											<input type="checkbox" class="styled">
											Unchecked styled
										</label>
									</div>

									<div class="checkbox checkbox-right disabled">
										<label>
											<input type="checkbox" class="styled" checked="checked" disabled="disabled">
											Disabled styled
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Right inline styled</label>
									<label class="checkbox-inline checkbox-right">
										<input type="checkbox" class="styled" checked="checked">
										Checked styled
									</label>

									<label class="checkbox-inline checkbox-right">
										<input type="checkbox" class="styled">
										Unchecked styled
									</label>
								</div>
        					</div>
    					</div>
					</div>
				</div>
				<!-- /checkboxes -->


				<!-- Radio buttons -->
            	<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Radio buttons</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

                	<div class="panel-body">
        				<p class="content-group">Radio button is an element that can be turned on and off. Radio buttons are almost always grouped together in groups. Only one radio button within the same <code>radiogroup</code> may be selected at a time. The user can switch which radio button is turned on by selecting it with the mouse or keyboard. Other radio buttons in the same group are turned off. A label, specified with the <code>label</code> attribute may be added beside the radio button.</p>

        				<div class="row">
        					<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Left stacked default</label>
									<div class="radio">
										<label>
											<input type="radio" name="unstyled-radio-left" checked="checked">
											Selected default
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="unstyled-radio-left">
											Unselected default
										</label>
									</div>

									<div class="radio disabled">
										<label>
											<input type="radio" checked="checked" disabled="disabled">
											Disabled default
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Left inline default</label>
									<label class="radio-inline">
										<input type="radio" name="radio-unstyled-inline-left" checked="checked">
										Selected default
									</label>

									<label class="radio-inline">
										<input type="radio" name="radio-unstyled-inline-left">
										Unselected default
									</label>
								</div>

								<div class="form-group pt-15">
									<label class="text-semibold">Left stacked styled</label>
									<div class="radio">
										<label>
											<input type="radio" name="stacked-radio-left" class="styled" checked="checked">
											Selected styled
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="stacked-radio-left" class="styled">
											Unselected styled
										</label>
									</div>

									<div class="radio disabled">
										<label>
											<input type="radio" class="styled" disabled="disabled">
											Disabled styled
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Left inline styled</label>
									<label class="radio-inline">
										<input type="radio" name="radio-inline-left" class="styled" checked="checked">
										Selected styled
									</label>

									<label class="radio-inline">
										<input type="radio" name="radio-inline-left" class="styled">
										Unselected styled
									</label>
								</div>
        					</div>

        					<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Right stacked default</label>
									<div class="radio radio-right">
										<label>
											<input type="radio" name="unstyled-radio-right" checked="checked">
											Selected default
										</label>
									</div>

									<div class="radio radio-right">
										<label>
											<input type="radio" name="unstyled-radio-right">
											Unselected default
										</label>
									</div>

									<div class="radio radio-right disabled">
										<label>
											<input type="radio" checked="checked" disabled="disabled">
											Disabled default
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Right inline default</label>
									<label class="radio-inline radio-right">
										<input type="radio" name="radio-unstyled-inline-right" checked="checked">
										Selected default
									</label>

									<label class="radio-inline radio-right">
										<input type="radio" name="radio-unstyled-inline-right">
										Unselected default
									</label>
								</div>

								<div class="form-group pt-15">
									<label class="text-semibold">Right stacked styled</label>
									<div class="radio radio-right">
										<label>
											<input type="radio" name="stacked-radio-right" class="styled" checked="checked">
											Selected styled
										</label>
									</div>

									<div class="radio radio-right">
										<label>
											<input type="radio" name="stacked-radio-right" class="styled">
											Unselected styled
										</label>
									</div>

									<div class="radio radio-right disabled">
										<label>
											<input type="radio" class="styled" checked="checked" disabled="disabled">
											Disabled styled
										</label>
									</div>
								</div>

								<div class="form-group">
									<label class="display-block text-semibold">Right inline styled</label>
									<label class="radio-inline radio-right">
										<input type="radio" name="radio-inline-right" class="styled" checked="checked">
										Selected styled
									</label>

									<label class="radio-inline radio-right">
										<input type="radio" name="radio-inline-right" class="styled">
										Unselected styled
									</label>
								</div>
        					</div>
        				</div>
					</div>
				</div>
				<!-- /radio buttons -->


				<!-- Colors -->
            	<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Color options</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

                	<div class="panel-body">
        				<p class="content-group">Besides default color, both checkboxes and radio buttons support 5 additional contextual color classes and other custom colors from color system. Colors are adapted to use in different background colors of parent elements - dropdown menus, active list states, input group addons - all checkboxes and radios are white on dark backgrounds. To use, simply add <code>background</code> and <code>text</code> color classes to Uniform's <code>wrapperClass</code> options.</p>

                		<div class="row">
	                		<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Checkboxes</label>
									<div class="row">
										<div class="col-md-6">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-primary" checked="checked">
													Primary checkbox
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-danger" checked="checked">
													Danger checkbox
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-success" checked="checked">
													Success checkbox
												</label>
											</div>
										</div>

										<div class="col-md-6">
											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-warning" checked="checked">
													Warning checkbox
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-info" checked="checked">
													Info checkbox
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" class="control-custom" checked="checked">
													Custom color
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="text-semibold">Radio buttons</label>
									<div class="row">
										<div class="col-md-6">
											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-primary" checked="checked">
													Primary radio
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-danger">
													Danger radio
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-success">
													Success radio
												</label>
											</div>
										</div>

										<div class="col-md-6">
											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-warning">
													Warning radio
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-info">
													Info radio
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="radio-styled-color" class="control-custom">
													Custom color
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
    				</div>
				</div>
				<!-- /colors -->


				<!-- Switchery toggles -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Switchery toggles</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Default switchers</h6>
									<p class="content-group">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</p>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Checked switch
										</label>
									</div>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery">
											Unchecked switch
										</label>
									</div>

									<div class="checkbox checkbox-switchery disabled">
										<label>
											<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
											Checked disabled
										</label>
									</div>

									<div class="checkbox checkbox-switchery disabled">
										<label>
											<input type="checkbox" class="switchery" disabled="disabled">
											Unchecked disabled
										</label>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Switcher colors</h6>
									<p class="content-group">You can change the default color of the switch to fit your design perfectly. According to the color system, any of its color can be applied to the switchery. Custom colors are also supported.</p>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery-primary" checked="checked">
											Switch in <span class="text-semibold">primary</span> context
										</label>
									</div>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery-danger" checked="checked">
											Switch in <span class="text-semibold">danger</span> context
										</label>
									</div>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery-info" checked="checked">
											Switch in <span class="text-semibold">info</span> context
										</label>
									</div>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery-warning" checked="checked">
											Switch in <span class="text-semibold">warning</span> context
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Single label</h6>
									<p class="content-group">You can choose one of 4 main Switch sizes - large (29px height), default (25px height), small (21px height) and mini (17px height). Just add proper class to the <code>.checkbox</code> wrapper.</p>

									<div class="checkbox checkbox-switchery switchery-lg">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Large size
										</label>
									</div>

									<div class="checkbox checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Default size
										</label>
									</div>

									<div class="checkbox checkbox-switchery switchery-sm">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Small size
										</label>
									</div>

									<div class="checkbox checkbox-switchery switchery-xs">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Mini size
										</label>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Multiple labels</h6>
									<p class="content-group">Switchery can be used with single label or with multiple labels. To use, add <code>.switchery-double</code> class to the container. All sizing options are available for this switchery type as well.</p>

									<div class="checkbox checkbox-switchery switchery-lg switchery-double">
										<label>
											Option 1
											<input type="checkbox" class="switchery" checked="checked">
											Option 2
										</label>
									</div>

									<div class="checkbox checkbox-switchery switchery-double">
										<label>
											Option 1
											<input type="checkbox" class="switchery" checked="checked">
											Option 2
										</label>
									</div>

									<div class="checkbox checkbox-switchery switchery-sm switchery-double">
										<label>
											Option 1
											<input type="checkbox" class="switchery" checked="checked">
											Option 2
										</label>
									</div>

									<div class="checkbox checkbox-switchery switchery-xs switchery-double">
										<label>
											Option 1
											<input type="checkbox" class="switchery" checked="checked">
											Option 2
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Right alignment</h6>
									<p class="content-group">Default switchery position is left. Use <code>.checkbox-right</code> class to change switchery position to right. This class sets correct side padding for label and changes main position.</p>

									<div class="checkbox checkbox-right checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery" checked="checked">
											Checked switch
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery">
										<label>
											<input type="checkbox" class="switchery">
											Unchecked switch
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery disabled">
										<label>
											<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
											Checked disabled
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery disabled">
										<label>
											<input type="checkbox" class="switchery" disabled="disabled">
											Unchecked disabled
										</label>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="content-group-lg">
									<h6 class="text-semibold">Sticked to the right</h6>
									<p class="content-group">Sometimes it's very useful to have switches on the right side of the container. Just add <code>.display-block</code> class to the <code>&lt;label></code> for the very right side switcher alignment.</p>

									<div class="checkbox checkbox-right checkbox-switchery">
										<label class="display-block">
											<input type="checkbox" class="switchery" checked="checked">
											Checked switch
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery">
										<label class="display-block">
											<input type="checkbox" class="switchery">
											Unchecked switch
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery disabled">
										<label class="display-block">
											<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
											Checked disabled
										</label>
									</div>

									<div class="checkbox checkbox-right checkbox-switchery disabled">
										<label class="display-block">
											<input type="checkbox" class="switchery" disabled="disabled">
											Unchecked disabled
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /switchery toggles -->


				<!-- Bootstrap switch -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Bootstrap switch</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="content-group">
									<h6 class="text-semibold">Switch states</h6>
									<p>By default Bootstrap Switch supports standard attributes for checkboxes such as <code>disabled</code>, <code>checked</code> and <code>readonly</code> or use <code>true</code> or <code>false</code> in plugin options.</p>

									<div class="row">
										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" checked="checked">
													Checked switch
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" checked="checked" disabled="disabled">
													Checked disabled
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" readonly="readonly" checked="checked">
													Checked readonly
												</label>
											</div>
										</div>

										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch">
													Unchecked switch
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" disabled="disabled">
													Unchecked disabled
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" readonly="readonly">
													Unchecked readonly
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="content-group">
									<h6 class="text-semibold">Switch colors</h6>
									<p>You can change the default color of the switch by choosing one of 6 predefined classes and use them in <code>data-on-color</code> and <code>data-off-color</code> attributes.</p>

									<div class="row">
										<div class="col-sm-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="default" data-off-color="danger" checked="checked">
													Default color
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="primary" data-off-color="default" checked="checked">
													Primary color
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="danger" data-off-color="default" checked="checked">
													Danger color
												</label>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="success" data-off-color="default" checked="checked">
													Success color
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="warning" data-off-color="default" checked="checked">
													Warning color
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="info" data-off-color="default" checked="checked">
													Info color
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="content-group">
									<h6 class="text-semibold">Switch sizes</h6>
									<p>Default height is equal to input field height, but you can also choose one of 4 available sizes (large, small and mini) by changing <code>data-size</code> attribute.</p>

									<div class="row">
										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-size="large" checked="checked">
													Large switch
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" data-size="small" checked="checked">
													Small switch
												</label>
											</div>
										</div>

										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" checked="checked">
													Default switch
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" data-size="mini" checked="checked">
													Mini switch
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="content-group">
									<h6 class="text-semibold">Label options</h6>
									<p>Labels support any text or icon via <code>data-on-text</code> and <code>data-off-text</code> attributes. If no custom text specified, switch will display default on/off text.</p>

									<div class="row">
										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked">
													Default text
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-color="warning" data-off-color="info" data-on-text="<i class='icon-link'></i>" data-off-text="<i class='icon-unlink'></i>" class="switch" checked="checked">
													Icons only
												</label>
											</div>
										</div>

										<div class="col-md-6">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="Enable" data-off-text="Disable" class="switch" checked="checked">
													Enable/Disable
												</label>
											</div>

											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch" checked="checked">
													Online/Offline
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bootstrap switch -->

			</div>
			<!-- /content wrapper -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<?php include("footer.php");?>
	<script type="text/javascript" src="js/uniform.min.js"></script>
	<script type="text/javascript" src="js/switchery.min.js"></script>
	<script type="text/javascript" src="js/switch.min.js"></script>

	<script type="text/javascript" src="js/form_checkboxes_radios.js"></script>
	<!-- /footer -->

</body>
</html>
