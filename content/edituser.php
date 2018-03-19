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
								<button type="button" class="btn btn-default btn-circle" id="buttonprofile" data-toggle="tab" href="userprofile.php"><i class="far fa-id-card fa-3x"></i></button>
								<p><small>User profile</small></p>
							</div>
							<div class="process-step">
								<button type="button" class="btn btn-default btn-circle" id="buttonadd" data-toggle="tab" href="userprofile.php"><i class="fas fa-user-plus fa-3x"></i></button>
								<p><small>Add user</small></p>
							</div>
							<div class="process-step">
								<button type="button" class="btn btn-selected btn-circle" id="buttonedit" data-toggle="tab" href="#"><i class="fa fa-cogs fa-3x"></i></button>
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
									<div class="col-md-10 ">
										<form class="form-horizontal">
											<fieldset>

												<!-- Form Name -->
												<legend>User profile form requirement</legend>

												<!-- Account-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editaccount">Account</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-user">
																</i>
															</div>
															<input id="editaccount" name="editaccount" type="text" placeholder="Account" class="form-control input-md">
														</div>
													</div>
												</div>

												<!-- Old Password-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editoldpassword">Old Password</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fas fa-key">
																</i>
															</div>
															<input id="editoldpassword" name="editoldpassword" type="password" placeholder="Old Password" class="form-control input-md">
														</div>
													</div>
												</div>

												<!-- New Password-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editnewpassword">New Password</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fas fa-key">
																</i>
															</div>
															<input id="editnewpassword" name="editnewpassword" type="password" placeholder="New Password" class="form-control input-md">
														</div>
													</div>
												</div>



												<!-- Full name-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editname">Name (Full name)</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fas fa-user-circle">
																</i>
															</div>
															<input id="editname" name="editname" type="text" placeholder="Name (Full name)" class="form-control input-md">
														</div>
													</div>
												</div>

												<!-- File Button --> 
												<div class="form-group">
													<label class="col-md-4 control-label" for="editphoto">Upload photo</label>
													<div class="col-md-4">
														<input id="editphoto" name="editphoto" class="input-file" type="file">
													</div>
												</div>

												<!-- Date birth-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editdatebirth">Date Of Birth</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-birthday-cake"></i>
															</div>
															<input id="editdatebirth" name="editdatebirth" type="date" placeholder="Date Of Birth" class="form-control input-md">
														</div>
													</div>
												</div>

												<!-- Gender -->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editgender">Gender</label>
													<div class="col-md-4"> 
														<label class="radio-inline" for="editGender-0">
															<input type="radio" name="editgender" id="editGender-0" value="1" checked="checked">
															Male
														</label> 
														<label class="radio-inline" for="editGender-1">
															<input type="radio" name="editgender" id="editGender-1" value="2">
															Female
														</label> 
													</div>
												</div>

												<!-- Phone-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editphone">Phone number </label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-phone"></i>
															</div>
															<input id="editphone" name="editphone" type="tel" placeholder="Phone number " class="form-control input-md">
														</div>
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-4 control-label" for="editemail">Email Address</label>  
													<div class="col-md-4">
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fas fa-envelope"></i>
															</div>
															<input id="editemail" name="editemail" type="email" placeholder="Email Address" class="form-control input-md">
														</div>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label" ></label>  
													<div class="col-md-4">
														<a href="#" class="btn btn-success"><span class="fas fa-thumbs-up"></span> Submit</a>
														<a href="#" class="btn btn-danger" value=""><span class="fas fa-eraser"></span> Clear</a>

													</div>
												</div>

											</fieldset>
										</form>
									</div>
									<div class="col-md-2 hidden-xs">
										<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
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