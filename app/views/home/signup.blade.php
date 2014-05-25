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
		  
		  <a href="/login/facebook" class="btn btn-lg btn-primary btn-block"><i class="fa fa-facebook-square"></i> Sign up with Facebook</a>
		
		  <a href="/login/google" class="btn btn-lg btn-primary btn-block google-btn"><i class="fa fa-google-plus-square"></i> Sign up with Google</a>
          
          
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="/signin" class="btn btn-lg btn-default btn-block">Sign in</a>
        </form>
      </section>
    </div>
  </section>
@stop