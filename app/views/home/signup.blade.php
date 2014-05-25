@section('content')
  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html">Scale</a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign up to find interesting thing</strong>
        </header>
        <form action="index.html">
          <div class="list-group">
            <div class="list-group-item">
              <input placeholder="Name" class="form-control no-border">
            </div>
            <div class="list-group-item">
              <input type="email" placeholder="Email" class="form-control no-border">
            </div>
            <div class="list-group-item">
               <input type="password" placeholder="Password" class="form-control no-border">
            </div>
          </div>
          <div class="checkbox m-b">
            <label>
              <input type="checkbox"> Agree the <a href="#">terms and policy</a>
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-default btn-block">Sign up</button>
          
   		  <div class="text-center m-t m-b">OR</div>
		  
		<a href="/login/facebook" class="btn btn-lg btn-primary btn-block">
			<div style="margin: 0 auto; display: inline-block; width: 10%; margin-left: 10%;">
				<i class="fa fa-facebook-square" style="padding-right: 10px;"></i>
			</div>
			<div style="width: 75%; display: inline-block; text-align: left;">
				Sign up with Facebook
			</div>
		</a>
		
		<a href="/login/google" class="btn btn-lg btn-primary btn-block google-btn">
			<div style="margin: 0 auto; display: inline-block; width: 10%; margin-left: 10%;">
				<i class="fa fa-google-plus-square" style="padding-right: 10px;"></i>
			</div>
			<div style="width: 75%; display: inline-block; text-align: left;">
				Sign up with Google
			</div>
		</a>
          
          
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="/signin" class="btn btn-lg btn-default btn-block">Sign in</a>
        </form>
      </section>
    </div>
  </section>
@stop