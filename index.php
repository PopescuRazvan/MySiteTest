<?php include "content/db.php";?>
<?php session_start();?>
<?php include "content/login.php";?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<!--My imports-->
	<link rel="stylesheet" href="css/login.css">
	<title>Log in</title>
</head>
<body class="page">
	<div class="head">
		<img class="img-responsive" src="img/logo.png">
	</div>
	<div class="container" >
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading"><center><b>Please sign in</b></center></div>
				<div class="panel-body">
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"  >
						<?php if(isset($err_account)) echo $err_account; ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user"></i></span>
							<input id="account" maxlength="12" type="text" class="form-control" name="account" placeholder="Account" value="<?php if (isset($account)) echo $account?>"/>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-key"></i></span>
							<input id="password" type="password" class="form-control" name="password"  value="<?php if (isset($password)) echo $password?>" placeholder="Password"/>
						</div>
						<div class="checkbox mb-3">
							<center>
								<input type="checkbox" value="remeber" id="remeber" name="remeber[]" <?php if(isset($remeber) && in_array('remeber',$remeber)) echo "checked"; ?> />
								<label for="remeber ">Remember me</label> 
							</center>
						</div>
						<button class="btn btn-sm btn-primary btn-block" type="submit" name="action"  value="submit">Sign in</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>