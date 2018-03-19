<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/left.css">
	<link rel="stylesheet" href="../css/top.css">
	<link rel="stylesheet" href="../css/users.css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/userstab.js"></script>
	<title>Home</title>
</head>
<body>
	<div class="container-fluid" >
		<?php include "top.php";?>
		<?php include "left.php";?>

		<!--Main -->
		<div class="main" style="margin-top: 99px;">
			<div class="container">
				<div class="row">
					<div class="process">
						<div class="process-row nav nav-tabs">
							<div class="process-step">
								<button type="button" class="btn btn-selected btn-circle" id="buttonprofile" data-toggle="tab" href="userprofile.php"><i class="far fa-id-card fa-3x"></i></button>
								<p><small>User profile</small></p>
							</div>
							<div class="process-step">
								<button type="button" class="btn btn-default btn-circle" id="buttonadd" data-toggle="tab" href="userprofile.php"><i class="fas fa-user-plus fa-3x"></i></button>
								<p><small>Add user</small></p>
							</div>
							<div class="process-step">
								<button type="button" class="btn btn-default btn-circle" id="buttonedit" data-toggle="tab" href="#"><i class="fa fa-cogs fa-3x"></i></button>
								<p><small>Edit user</small></p>
							</div>
							<div class="process-step">
								<button type="button" class="btn btn-default btn-circle" id="buttonview" data-toggle="tab" href="#menu4"><i class="fas fa-users fa-3x"></i></button>
								<p><small>View users</small></p>
							</div>
						</div>
					</div>
					<div class="tab-content">
						<div id="menu1" class="tab-pane fade active in">
							<div class="container">    
								<div class="row">
									<div class="panel panel-default">
										<div class="panel-heading"> 
											<h4 >User Profile</h4>
										</div>
										<div class="panel-body">
											<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
												<img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
											</div>
											<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
												<div class="container" >
													<h2>Full Name</h2>
												</div>
												<hr>
												<ul class="container details"  style="  list-style-type: none;">
													<li><p><span class="fa fa-user" style="width:50px;"></span>Account</p></li>
													<li><p><span class="fa fa-birthday-cake" style="width:50px;"></span>Date of birth</p></li>
													<li><p><span class="fas fa-transgender" style="width:50px;"></span>Gender</p></li>
													<li><p><span class="fa fa-phone" style="width:50px;"></span>Phone number</p></li>
													<li><p><span class="fas fa-envelope" style="width:50px;"></span>Email address</p></li>
													<li><p><span class="far fa-calendar" style="width:50px;"></span>Date Of Joining</p></li>
												</ul>
												<hr>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 
