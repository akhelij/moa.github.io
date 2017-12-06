<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>T&V</title>

        <!-- Required meta tags always come first -->
      	<meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<meta http-equiv="x-ua-compatible" content="ie=edge">

      	<!-- Main Font -->
      	<script src="js/webfontloader.min.js"></script>
      	<script>
      		WebFont.load({
      			google: {
      				families: ['Roboto:300,400,500,700:latin']
      			}
      		});
      	</script>

      	<!-- Bootstrap CSS -->
      	<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">

      	<!-- Theme Styles CSS -->
      	<link rel="stylesheet" type="text/css" href="{{asset('css/theme-styles.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('css/blocks.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">

      	<!-- Styles for plugins -->
      	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
      	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.css')}}">

    </head>

<body class="landing-page">

<div class="content-bg-wrap">
	<div class="content-bg"></div>
</div>


<div class="header--standard header--standard-landing">
	<div class="container">
		<div class="header--standard-wrap">



			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="icons/icons.svg#olymp-menu-icon"></use></svg>
			</a>

		</div>
	</div>
</div>

<div class="header-spacer--standard" style="height: 100px;margin-bottom:0px"></div>


<!-- Login-Registration Form  -->

<div class="container">
	<div class="row display-flex">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <a href="{{url('/')}}" class="logo" align="center" style="height:250px;margin-top:-10%;background: url('img/logo.png') no-repeat center;text-align: center;background-color:transparent !important;background-size: contain;">

			</a>
			<div class="landing-content">
				<h1>Welcome to the Biggest Social Network in the World</h1>
				<p>We are the best and biggest social network with 5 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
              <svg class="olymp-login-icon"><use xlink:href="icons/icons.svg#olymp-login-icon"></use></svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#home" role="tab">
              <svg class="olymp-register-icon"><use xlink:href="icons/icons.svg#olymp-register-icon"></use></svg>
            </a>
          </li>




				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
          <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" id="email" type="email" placeholder="" name="email"  required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder=""  id="password" type="password" name="password"  required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
									</div>

									<div class="remember">
                    <a class="btn-link pull-right" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
										<div class="checkbox">

											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
												Remember Me
											</label>
										</div>

									</div>

									<button type="submit" class="btn btn-lg btn-primary full-width">Login</button>

									<div class="or"></div>

									<button class="btn btn-lg bg-facebook full-width btn-icon-left" disabled><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</button>

									<button href="#" class="btn btn-lg bg-twitter full-width btn-icon-left" disabled><i class="fa fa-twitter" aria-hidden="true"></i>Login with Twitter</button>


									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				  <div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Test & Vote</div>
						<form class="content" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
							<div class="row">

								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control"  id="firstname"  name="firstname" placeholder="" type="text" required autofocus>
                    @if ($errors->has('firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                	</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" id="lastname" name="lastname"  placeholder="" type="text"  required autofocus>
                    @if ($errors->has('lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                  </div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input id="email" name="email" class="form-control" placeholder="" type="email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                	</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" id="password" name="password" placeholder="" type="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                	</div>
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Confirm Your Password</label>
                    <input class="form-control" id="password_confirm" name="password_confirmation" placeholder=""  type="password" required>

                  </div>
									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input  name="datetimepicker" id="birthday" />
										<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" id="gender" name="gender" >
											<option >Male</option>
											<option >Female</option>
										</select>
									</div>

									<div class="remember">

										<div class="checkbox">
											<label>
                        <input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>

									</div>

									<button type ="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>

              	</div>
							</div>
						</form>
					</div>

					</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Login-Registration Form  -->


<a class="back-to-top" href="#">
	<img src="icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>



      <!-- jQuery first, then Other JS. -->
      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>


      <!-- Js effects for material design. + Tooltips -->
      <script src="{{asset('js/material.min.js')}}"></script>

      <!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
      <script src="{{asset('js/theme-plugins.js')}}"></script>

      <!-- Init functions -->
      <script src="{{asset('js/main.js')}}"></script>


      <!-- Select / Sorting script -->
      <script src="{{asset('js/selectize.min.js')}}"></script>

      <!-- Datepicker input field script-->
      <script src="{{asset('js/moment.min.js')}}"></script>
      <script src="{{asset('js/daterangepicker.min.js')}}"></script>



      <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
      <script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>
    </body>
<!-- Mirrored from theme.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2017 15:52:24 GMT -->
</html>
