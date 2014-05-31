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
                  		<div class="row">
                  			<div class="col-md-12">
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
                  		</div>
                  		<div class="row">
		                  	<div class="col-md-12">
		                  	<section class="panel panel-default"> 
		                  		<header class="panel-heading">Readings</header> 
		                  		<table class="table table-striped m-b-none"> 
		                  			<thead> 
		                  				<tr> 
		                  					<th>Date</th> 
		                  					<th>Reading</th> 
		                  					<th>Note</th> 
		                  				</tr> 
		                  			</thead> 
		                  			<tbody> 
		                  			@foreach($readings as $reading)
		                  			<tr>
		                  				<td> 
							  				{{date('m-d-Y H:i a',strtotime($reading->created_at))}}
							  			</td> 
							  			@if($reading->reading >= 150)
							  				<td class="text-danger">{{$reading->reading}}</td>
							  			@elseif($reading->reading <= 80)
							  			<td class="text-danger">
							  				<i class="fa fa-level-down"></i>
							  				{{$reading->reading}}
							  			</td>
							  			@else
							  				<td class="text-success">{{$reading->reading}}</td>
							  			@endif
							  			<td> 
							  				{{$reading->note}}
							  			</td>
							  		</tr>
							  		@endforeach
							  		</tbody>
							  		</table>
							</section>
							</div>
						</div>
                  </div>
                  	
                  <div class="row">
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
                  	<div class="col-md-6">
	                	<section class="panel panel-default">
	                  		<header class="panel-heading font-bold">Meal Items</header> 
	                  		<div class="panel-body"> 
	                  			<ul>
						  		@foreach($meals as $meal)
						  			<li>{{$meal->id}} | {{$meal->user_id}}</li>	
						  		@endforeach
	                  			</ul>
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
						  			<li>{{$food->brand}} | {{$food->description}} | Carbs: {{$food->carbs}}g</li>	
						  		@endforeach
	                  			</ul>
	                  		</div> 
	                  	</section>
					 </div>
				 </div>
                      
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