@section('content')

@include('account.sidebar')

        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">              
                  <section class="row m-b-md">
                    <div class="col-sm-6">
                      <h3 class="m-b-xs text-black">Dashboard</h3>
                      <small>Welcome back, {{$first_name}} {{$last_name}}, <i class="fa fa-map-marker fa-lg text-primary"></i> {{$location['city'].", ".$location['state']}}</small>
                    </div>
                    <div class="col-sm-6 text-right text-left-xs m-t-md">
                      <div class="btn-group">
                        <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                        <ul class="dropdown-menu text-left pull-right">
                          <li><a href="#">Notification</a></li>
                          <li><a href="#">Messages</a></li>
                          <li><a href="#">Analysis</a></li>
                          <li class="divider"></li>
                          <li><a href="#">More settings</a></li>
                        </ul>
                      </div>
                      <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a>
                      <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a>
                    </div>
                  </section>
                  
                  <div class="row">
                  	<div class="col-md-6">
	                  	<section class="panel panel-default">
	                  		<header class="panel-heading font-bold">Add a Blood Glucose Reading</header> 
	                  		<div class="panel-body"> 
	                  			<form class="form-inline" role="form" method="post" action="/api/reading"> 
	                  				<div class="form-group"> 
	                  					<label class="sr-only" for="exampleInputEmail2">Reading</label> 
	                  					<input type="text" class="form-control" name="bg_reading" id="exampleInputEmail2" placeholder="Enter meter reading"> 
	                  					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	                  				</div> 
	                  				<div class="form-group">
	                  					<label class="sr-only" for="exampleInputPassword2">Notes</label> 
	                  					<input type="text" class="form-control" name="bg_note" id="exampleInputPassword2" placeholder="ex. Before Lunch">
	                  				</div>
	                  				<button type="submit" class="btn btn-default">Submit</button> 
	                  			</form>
	                  		</div> 
	                  	</section>
                  	</div>
                  	
                  	<div class="col-md-6">
	                  	<section class="panel panel-default">
	                  		<header class="panel-heading font-bold">Add a meal</header> 
	                  		<div class="panel-body"> 
	                  			<form class="form-inline" role="form"> 
	                  				<div class="form-group"> 
	                  					<label class="sr-only" for="exampleInputEmail2">Carbs (g)</label> 
	                  					<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter amount of carbs"> 
	                  					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	                  				</div> 
	                  				<div class="form-group">
	                  					<label class="sr-only" for="exampleInputPassword2">Notes</label> 
	                  					<input type="text" class="form-control" id="exampleInputPassword2" placeholder="Note">
	                  				</div>
	                  				
	                  				<div class="form-group">
	                  					<select name="account" class="form-control">
	                  						<option value="breakfast">Breakfast</option>
	                  						<option value="lunch">Lunch</option>
	                  						<option value="dinner">Dinner</option>
	                  						<option value="snack">Snack</option> 
		                  				</select>
	                  				</div>
	                  				<button type="submit" class="btn btn-default">Submit</button> 
	                  			</form>
	                  		</div> 
	                  	</section>
                  	</div>
                  </div>
                  
                <div class="row">
					<div class="col-md-6">
	                	<section class="panel panel-default">
	                  		<header class="panel-heading font-bold">Add a Food Item</header> 
	                  		<div class="panel-body"> 
	                  			<form class="form-inline" role="form" method="post" action="/api/food">
	                  				<div class="form-group">
	                  					<label class="sr-only" for="exampleInputPassword2">Description</label> 
	                  					<input type="text" class="form-control" name="description" id="exampleInputPassword2" placeholder="Description of item">
	                  					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	                  				</div>
	                  				<div class="form-group"> 
	                  					<label class="sr-only" for="exampleInputEmail2">Carbs (g)</label> 
	                  					<input type="text" class="form-control" name="carbs" id="exampleInputEmail2" placeholder="Enter amount of carbs"> 
	                  				</div> 
	                  				<div class="form-group">
	                  					<label class="sr-only" for="exampleInputPassword2">Brand</label> 
	                  					<input type="text" class="form-control" name="brand" id="" placeholder="Brand/Resturant">
	                  				</div>
	                  				<button type="submit" class="btn btn-default">Submit</button> 
	                  			</form>
	                  		</div> 
	                  	</section>
					 </div>
					 
					<div class="col-md-6">
	                	<section class="panel panel-default">
	                  		<header class="panel-heading font-bold">Food Items</header> 
	                  		<div class="panel-body"> 
	                  			<ul>
						  		@foreach($foods as $food)
						  			<li>print_r($food)</li>	
						  		@endforeach
	                  			</ul>
	                  		</div> 
	                  	</section>
					 </div>
				 </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="panel b-a">
                        <div class="row m-n">
                          <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                <i class="i i-plus2 i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-danger">2,000</span>
                                <small class="text-muted text-u-c">New Visits</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success">75%</span>
                                <small class="text-muted text-u-c">Bounce rate</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-alarm i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">9:30</span>
                                <small class="text-muted text-u-c">Meeting</small>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-3 hide">
                      <section class="panel b-a">
                        <header class="panel-heading b-b b-light">
                          <ul class="nav nav-pills pull-right">
                            <li>
                              <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c">
                                <i class="i i-cycle"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="panel-toggle text-muted">
                                <i class="i i-plus text-active"></i>
                                <i class="i i-minus text"></i>
                              </a>
                            </li>
                          </ul>
                          Connection
                        </header>
                        <div class="panel-body text-center bg-light lter" id="b-c">
                          <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                            <div>
                              <span class="h2 m-l-sm step"></span>%
                              <div class="text text-xs">completed</div>
                            </div>
                          </div>
                        </div>
                      </section>                      
                    </div>
                  </div>           
                  <div class="row bg-light dk m-b">
                    <div class="col-md-6 dker">
                      <section>
                        <header class="font-bold padder-v">
                          <div class="pull-right">
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle">
                                <span class="dropdown-label">Week</span> 
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-select">
                                  <li><a href="#"><input type="radio" name="b">Month</a></li>
                                  <li><a href="#"><input type="radio" name="b">Week</a></li>
                                  <li><a href="#"><input type="radio" name="b">Day</a></li>
                              </ul>
                            </div>
                            <a href="#" class="btn btn-default btn-icon btn-rounded btn-sm">Go</a>
                          </div>
                          Blood Glucose & Carb Counts
                        </header>
                        <div class="panel-body">
                          <div id="flot-sp1ine" style="height:210px"></div>
                        </div>
                        <div class="row text-center no-gutter">
                          <div class="col-xs-3">
                            <span class="h4 font-bold m-t block">150</span>
                            <small class="text-muted m-b block">Avg. Blood Glucose</small>
                          </div>
                          <div class="col-xs-3">
                            <span class="h4 font-bold m-t block">10,450</span>
                            <small class="text-muted m-b block">Sellings</small>
                          </div>
                          <div class="col-xs-3">
                            <span class="h4 font-bold m-t block">21,230</span>
                            <small class="text-muted m-b block">Items</small>
                          </div>
                          <div class="col-xs-3">
                            <span class="h4 font-bold m-t block">7,230</span>
                            <small class="text-muted m-b block">Customers</small>                        
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="col-md-6">
                      <section>
                        <header class="font-bold padder-v">
                          <div class="btn-group pull-right">
                            <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle">
                              <span class="dropdown-label">Last 24 Hours</span> 
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-select">
                                <li><a href="#"><input type="radio" name="a">Today</a></li>
                                <li><a href="#"><input type="radio" name="a">Yesterday</a></li>
                                <li><a href="#"><input type="radio" name="a">Last 24 Hours</a></li>
                                <li><a href="#"><input type="radio" name="a">Last 7 Days</a></li>
                                <li><a href="#"><input type="radio" name="a">Last 30 days</a></li>
                                <li><a href="#"><input type="radio" name="a">Last Month</a></li>
                                <li><a href="#"><input type="radio" name="a">All Time</a></li>
                            </ul>
                          </div>
                          Analysis
                        </header>
                        <div class="panel-body flot-legend">
                          <div id="flot-pie-donut"  style="height:240px"></div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <section class="panel b-a">
                        <div class="panel-heading b-b">
                          <span class="badge pull-right">12</span>
                          <span class="label bg-success">New</span> 
                          <a href="#" class="font-bold">HTML Courses</a>
                        </div>
                        <div class="panel-body">
                          <a href="#" class="block h4 font-bold m-b text-black">Get started with Bootstrap</a>                          
                          <div class="r b bg-warning-ltest wrapper m-b">
                            There are a few easy ways to quickly get started with Bootstrap...
                          </div>
                          <div class="m-b">
                            <a href="#" class="avatar thumb-sm">
                              <img src="/assets/images/a0.png" alt="...">
                              <i class="on b-white"></i>
                            </a>
                            <a href="#" class="avatar thumb-sm">
                              <img src="/assets/images/a1.png" alt="...">
                              <i class="busy b-white"></i>
                            </a>
                            <a href="#" class="avatar thumb-sm">
                              <img src="/assets/images/a2.png" alt="...">
                              <i class="away b-white"></i>
                            </a>
                            <a href="#" class="avatar thumb-sm">
                              <img src="/assets/images/a3.png" alt="...">
                              <i class="off b-white"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-rounded font-bold">
                              +152
                            </a>
                          </div>
                          <p class="text-sm">Start at 2:00 PM, 12/5/2016</p>
                          <a href="#" class="btn btn-default btn-sm btn-rounded m-b-xs"><i class="fa fa-plus"></i> Take me in</a>
                        </div>
                        <div class="clearfix panel-footer">
                          <small class="text-muted pull-right">5m ago</small>
                          <a href="#" class="thumb-sm pull-left m-r">
                            <img src="/assets/images/a0.png" alt="..." class="img-circle">
                          </a>
                          <div class="clear">
                            <a href="#"><strong>Jonathan Omish</strong></a>
                            <small class="block text-muted">San Francisco, USA</small>
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="col-md-4">
                      <section class="panel b-a">
                        <div class="panel-heading b-b">
                          <span class="badge bg-warning pull-right">10</span>
                          <a href="#" class="font-bold">Messages</a>
                        </div>
                        <ul class="list-group list-group-lg no-bg auto">                          
                          <a href="#" class="list-group-item clearfix">
                            <span class="pull-left thumb-sm avatar m-r">
                              <img src="/assets/images/a4.png" alt="...">
                              <i class="on b-white bottom"></i>
                            </span>
                            <span class="clear">
                              <span>Chris Fox</span>
                              <small class="text-muted clear text-ellipsis">What's up, buddy</small>
                            </span>
                          </a>
                          <a href="#" class="list-group-item clearfix">
                            <span class="pull-left thumb-sm avatar m-r">
                              <img src="/assets/images/a5.png" alt="...">
                              <i class="on b-white bottom"></i>
                            </span>
                            <span class="clear">
                              <span>Amanda Conlan</span>
                              <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
                            </span>
                          </a>
                          <a href="#" class="list-group-item clearfix">
                            <span class="pull-left thumb-sm avatar m-r">
                              <img src="/assets/images/a6.png" alt="...">
                              <i class="busy b-white bottom"></i>
                            </span>
                            <span class="clear">
                              <span>Dan Doorack</span>
                              <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
                            </span>
                          </a>
                          <a href="#" class="list-group-item clearfix">
                            <span class="pull-left thumb-sm avatar m-r">
                              <img src="/assets/images/a7.png" alt="...">
                              <i class="away b-white bottom"></i>
                            </span>
                            <span class="clear">
                              <span>Lauren Taylor</span>
                              <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
                            </span>
                          </a>
                        </ul>
                        <div class="clearfix panel-footer">
                          <div class="input-group">
                            <input type="text" class="form-control input-sm btn-rounded" placeholder="Search">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-default btn-sm btn-rounded"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="col-md-4">
                      <section class="panel b-light">
                        <header class="panel-heading"><strong>Calendar</strong></header>
                        <div id="calendar" class="bg-light dker m-l-n-xxs m-r-n-xxs"></div>
                        <div class="list-group">
                          <a href="#" class="list-group-item text-ellipsis">
                            <span class="badge bg-warning">7:30</span> 
                            Meet a friend
                          </a>
                          <a href="#" class="list-group-item text-ellipsis"> 
                            <span class="badge bg-success">9:30</span> 
                            Have a kick off meeting with .inc company
                          </a>
                        </div>
                      </section>                  
                    </div>
                  </div>
                </section>
              </section>
            </section>
            <!-- side content -->
            <aside class="aside-md bg-black hide" id="sidebar">
              <section class="vbox animated fadeInRight">
                <section class="scrollable">
                  <div class="wrapper"><strong>Live feed</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-reply fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Goody@gmail.com</a> sent your email
                        <small class="icon-muted">13 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                        <i class="fa fa-file-o fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Mide@live.com</a> invite you to join a meeting
                        <small class="icon-muted">20 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-map-marker fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Geoge@yahoo.com</a> is online
                        <small class="icon-muted">1 hour ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-info fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#"><strong>Admin</strong></a> post a info
                        <small class="icon-muted">1 day ago</small>
                      </span>
                    </li>
                  </ul>
                  <div class="wrapper"><strong>Friends</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="/assets/images/a3.png" alt="..." class="img-circle">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Chris Fox</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="/assets/images/a2.png" alt="...">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Amanda Conlan</a></div>
                          <small class="text-muted">about 2 hours ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="/assets/images/a1.png" alt="...">
                          <i class="busy b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Dan Doorack</a></div>
                          <small class="text-muted">3 days ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="/assets/images/a0.png" alt="...">
                          <i class="away b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Lauren Taylor</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
              </section>              
            </aside>
            <!-- / side content -->
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="/assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/bootstrap-dialog.min.js"></script>
  
	<script>
	$("form").on("submit", function(event) 
	{
		event.preventDefault();
		
		$.ajax({
			url: $(this).attr('action'),
			type: "POST",
			dataType: "JSON",
			data: $(this).serialize(),
			success: function(r)
			{
				BootstrapDialog.show({
					title: 'Success!',
					message: "We add this data to the log book.",
					buttons: [{
						label: 'Close',
						action: function(dialogItself)
						{
							dialogItself.close();
						}
					}]
				});
			}
		});
	});
	</script>
  
  <!-- App -->
  <script src="/assets/js/app.js"></script>  
  <script src="/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="/assets/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="/assets/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.min.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.spline.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="/assets/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="/assets/js/charts/flot/demo.js"></script>

  <script src="/assets/js/calendar/bootstrap_calendar.js"></script>
  <script src="/assets/js/calendar/demo.js"></script>

  <script src="/assets/js/sortable/jquery.sortable.js"></script>
  <script src="/assets/js/app.plugin.js"></script>
</body>
</html>
@stop