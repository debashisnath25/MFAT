<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MFAT | Manager Log</title>
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
    <div class="panel panel-flat" style="background:#F9F9FB;padding:25px;height:90px;">
      <div class="col-md-12">
        <div class="col-md-2">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="icon-calendar22">
              </i>
            </span>
            <input type="text" class="form-control daterange-single" value="03/18/2013">
            <span class="input-group-addon">
              <i class="icon-calendar22">
              </i>
            </span>
          </div>
        </div>
        <div class="col-md-7">
          <div class="input-group">
            <span class="input-group-addon">@
            </span>
            <input type="text" class="form-control" placeholder="Left addon">
          </div>
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary" style="width:100%;" data-toggle="modal" data-target="#modal_new_board">Create New Board</button>
        </div>
        <div class="col-md-1">
          <span class="btn btn-success">
            <i class="icon-printer"> PRINT</i>
          </span>
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
            <div class="col-lg-8">
              <div class="col-lg-12">
                <div class="panel border-left-lg border-left-primary timeline-content">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="no-margin-top" >
                          <a href="" style="color:black;font-size:18px;">Manager Notes
                          </a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer panel-footer-condensed" style="padding:25px;">
                    <div class="col-md-10">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon-menu6">
                          </i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left and right icons">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary" style="width:100%;">Save Note
                      </button>
                    </div>
                  </div>
                </div>
				<div class="panel border-left-lg border-left-primary timeline-content">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="no-margin-top" >
                          <a href="" style="color:black;font-size:18px;">Injury Log
                          </a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer panel-footer-condensed" style="padding:25px;">
                    <div class="col-md-10">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon-menu6">
                          </i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left and right icons">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary" style="width:100%;">Save Note
                      </button>
                    </div>
                  </div>
                </div>
							<div class="panel border-left-lg border-left-primary timeline-content">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="no-margin-top" >
                          <a href="" style="color:black;font-size:18px;">Maintenance
                          </a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer panel-footer-condensed" style="padding:25px;">
                    <div class="col-md-10">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon-menu6">
                          </i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left and right icons">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary" style="width:100%;">Save Note
                      </button>
                    </div>
                  </div>
                </div>
				<div class="panel border-left-lg border-left-primary timeline-content">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="no-margin-top" >
                          <a href="" style="color:black;font-size:18px;">Cleaning
                          </a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer panel-footer-condensed" style="padding:25px;">
                    <div class="col-md-10">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon-menu6">
                          </i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left and right icons">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary" style="width:100%;">Save Note
                      </button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <div class="col-lg-4">
              <!-- Daily sales -->
              <div class="panel panel-flat">
                <div class="panel-heading">
                  <h6 class="panel-title text-semibold">Today at Clicks
                  </h6>
                </div>
                <div class="container-fluid">
                  <div class="row ">
					<div class="col-md-6 text-left">
						<div class="content-group text-center">
							<h6 class="text-semibold no-margin"><i class="icon-sun3 position-left text-slate"></i>WEATHER</h6>
							<span class="text-muted text-size-medium text-semibold">48&deg;</span>
						</div>
					</div>

					<div class="col-md-6 text-right">
						<div class="content-group text-center">
							<h6 class="text-semibold no-margin"><i class="icon-coin-dollar position-left text-slate"></i>SALES</h6>
							<span class="text-muted text-size-medium text-semibold">$0.00<br/>vs $0.00 YESTERDAY</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-left">
						<div class="content-group text-center">
							<h6 class="text-semibold no-margin"><i class="icon-users4 position-left text-slate"></i>EST. LABOR</h6>
							<span class="text-muted text-size-medium text-semibold ">$0.00<br/>vs. $0.00 YESTERDAY</span>
						</div>
					</div>

					<div class="col-md-6 text-right">
						<div class="content-group text-center">
							<h6 class="text-semibold no-margin"><i class="icon-graph position-left text-slate"></i>EST. LABOR %</h6>
							<span class="text-muted text-size-medium text-semibold">0% <br/>vs. 0% YESTERDAY</span>
						</div>
					</div>
				  </div>
                  <div class="panel-heading text-center">
                    <a href="reports.php" class="btn btn-primary">View all Reports</a>
                  </div>
                </div>
              </div>
              <!-- /daily sales -->
              <!-- My messages -->
            
              <!-- /my messages -->
              
              <div class="panel panel-flat">
                <div class="panel-heading">
                  <h6 class="panel-title text-semibold">Upcoming Time-Off
                  </h6>
                  <div class="alert alert-info text-center">
                    <button type="button" class="close" data-dismiss="alert">
                    </button>
                    No upcoming time-off requests. Yay!
                  </div>
                  <div class="panel-heading text-center">
                    <a href="listing_time_off.php" class="btn btn-primary">View all Time off</a>
                  </div>
                </div>
              </div>
              <!-- Daily financials -->
              <div class="panel panel-flat">
                <ul class="media-list">
                  <li class="media  panel-body stack-media-on-mobile">
                    <div class="media-body">
                      <h6 class="media-heading text-semibold">
                        Employee Shift Feedback
                      </h6>
                      <p class="content-group-sm">Here's your average from Clicks between Mar 05, 2018 and Mar 11, 2018:
                      </p>
                      <ul class="list-inline list-inline-separate" >
                        <div class="text-nowrap text-center" >
                          <i class="icon-star-full2 text-size-base text-warning-300"  style="font-size: 29px;">
                          </i>
                          <i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;">
                          </i>
                          <i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;">
                          </i>
                          <i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;">
                          </i>
                          <i class="icon-star-empty3 text-size-base text-warning-300" style="font-size: 29px;">
                          </i>
                        </div>
                      </ul>
                    </div>
                    <div class="panel-heading text-center">
                      <a href="reports.php" class="btn btn-primary">View All Shift Feedback</a>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /daily financials -->
          </div>
          <!-- /dashboard content -->
        </div>
        <!-- /main content -->
      </div>
      <!-- /page content -->
    </div>
    <!-- /page container -->
    <!-- Footer -->
	<div id="modal_new_board" class="modal fade in" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-info">
				<button type="button" class="close" data-dismiss="modal"><i class="icon-close2"></i></button>
				<h5 class="modal-title text-center">Create New Board</h5>
			</div>

			<form action="#">
				<div class="modal-body">
					<div class="form-group">
						<label>Board Name</label>
						<div class="multi-select-full">
							<input type="text" class="form-control" placeholder="Enter a name for your board...">
						</div>
					</div>
					<div class="form-group">
						<label>Board Description</label>
						<textarea rows="3" cols="3" maxlength="500" class="form-control maxlength-textarea" placeholder="This textarea has a limit of 500 chars."></textarea>
					</div>
				</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-link">Reset</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
	</div>
    <?php include("footer.php");?>
    <script type="text/javascript" src="js/dashboard.js">
    </script>
  </body>
</html>
