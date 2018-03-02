<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<div class="container-fluid">
				<div style="margin-top:10%" class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="card">
							<div class="header">
								<h4 class="title text-center">Login</h4>
							</div>
							<div class="content">
								<form method="POST" action="{{ route('login') }}">
									{{ csrf_field() }}
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control border-input" id="username" name="username">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control border-input" id="password" name="password">
											</div>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-info btn-fill btn-wd">Login</button>
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</html>
