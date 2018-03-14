<div class="navbar navbar-inverse" id="navbar-main">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard.php"><label>MFAT</label></a>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile" >
			<ul class="nav navbar-nav" >
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="schedule.php">Schedule</a></li>
				<li><a href="timesheets.php">Timesheets</a></li>
				<li><a href="timeclock.php">Timeclock</a></li>
				<li><a href="manager_log.php">Manager Log</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="reports.php">Reports</a></li>
				<li><a href="settings.php">Settings</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#modal_form_message">
						<i class="icon-envelop5"></i>
						<span class="visible-xs-inline-block position-right">Users</span>
					</a>
				
				</li>				

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
						<i class="icon-bell2"></i>
						<span class="visible-xs-inline-block position-right">Alerts</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Alerts
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="images/face3.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">WAGE RATE</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">Victoria Elizabeth currently has no assigned wage rate!</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="images/face25.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">WAGE RATE</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">Margaret Robbie currently has no assigned wage rate!</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="" data-original-title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="badge bg-warning-400">4</span>
					</a>
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messenger
							<ul class="icons-list">
								<li><a href="javascript:void(0);"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Entire Team</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">No Messages... Yet!<br/>Clicks</span>
								</div>
							</li>

							<li class="media">
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">All Managers</span>
										<span class="media-annotation pull-right">18:10</span>
									</a>

									<span class="text-muted">No Messages... Yet!<br/>Clicks</span>
								</div>
							</li>
							<li class="media">
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Celebration</span>
										<span class="media-annotation pull-right">20:18</span>
									</a>

									<span class="text-muted">No Messages... Yet!<br/>Clicks</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="" data-original-title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/face11.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="my_week.php"><i class="icon-user-plus"></i>My Week</a></li>
						<li><a href="settings.php"><i class="icon-cog5"></i> My Settings</a></li>
						<li><a href="manage_plan.php"><i class="icon-comment-discussion"></i> Manage Plan</a></li>
						<li><a href="billing.php"><i class="icon-coins"></i> Billings</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>