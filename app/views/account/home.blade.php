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