@section('content')
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
		<div class="container aside-xl">
		<section class="m-b-lg">
		<header class="wrapper text-center">
		  <strong>Sign in to access your account</strong>
		</header>
		<form action="index.html">
		  <div class="list-group">
		    <div class="list-group-item">
		      <input type="email" placeholder="Email" class="form-control no-border">
		    </div>
		    <div class="list-group-item">
		       <input type="password" placeholder="Password" class="form-control no-border">
		    </div>
		  </div>
		  
		  <button type="submit" class="btn btn-lg btn-default btn-block">Sign in</button>
		  
		  <div class="text-center m-t m-b">OR</div>
		  
		  <a href="/login/facebook" class="btn btn-lg btn-primary btn-block"><i class="fa fa-facebook-square"></i> Facebook</a>
		
		  <a href="/login/google" class="btn btn-lg btn-primary btn-block google-btn"><i class="fa fa-google-plus-square"></i> Google+</a>

		  <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
		  <div class="line line-dashed"></div>
		  <p class="text-muted text-center"><small>Do not have an account?</small></p>
		  <a href="signup.html" class="btn btn-lg btn-default btn-block">Create an account</a>
		</form>
		</section>
		</div>
	</section>
@stop