<?php
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_POST['action']))){

	if(isset($_POST['account']))   { 
		$account=filter_var($_POST['account'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['password']))  {
		$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['remeber']))   {
		$remeber=$_POST['remeber'];
	}
	$bool=true;
		/*
	if(!(preg_match('/[A-Za-z]',$name))){
		$err_name='<label class="error">The name field is not valid.</label>';
		$formerrors=true;
	}
	*/
	if($account==='') {
		$bool=false;
		$err_account='<div class="error"> User or password invalid </div>';
	}
	if($password==='') {
		$bool=false;
		$err_account='<div class="error">User or password invalid </div>';
	}

	$account=mysqli_real_escape_string($connection,$account);
	$password=mysqli_real_escape_string($connection,$password);

	$query = "Select * From users Where account ='{$account}' ";
	$select_user_query =mysqli_query($connection,$query);
	if(!$select_user_query){
		die("Query failed".mysqli_error($connection));
	} 


	while($row= mysqli_fetch_array($select_user_query)){
		$db_id=$row['id']; 		
		$db_account=$row['account'];
		$db_password=$row['password'];
		$db_firstname=$row['fullname'];
	}

	if(!(isset($db_account) && isset($db_password))){
		$bool=false;
		$err_account='<div class="error"> User or password invalid </div>';
	}else{

		if(!($db_password==$password &&$db_account==$account)){
			$bool=false;
			$err_account='<div class="error"> User or password invalid </div>';
		}
	}

	if($bool) {
		$_SESSION['id']=$db_id;
		$_SESSION['fullname']=$db_firstname;
		header ("Location: content/userprofile.php");
	}

}

?>