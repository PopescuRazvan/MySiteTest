<?php
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_POST['action']))){

	if(isset($_POST['addaccount']))   { 
		$addaccount=filter_var($_POST['addaccount'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['addpassword']))  {
		$addpassword=filter_var($_POST['addpassword'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['addname']))  {
		$addname=filter_var($_POST['addname'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['adddatebirth']))  {
		$adddatebirth=filter_var($_POST['adddatebirth'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['addgender']))  {
		$addgender=filter_var($_POST['addgender'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['addphone']))  {
		$addphone=filter_var($_POST['addphone'],FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['addemail']))  {
		$addemail=filter_var($_POST['addemail'],FILTER_SANITIZE_STRING);
	}



	$bool=true;
	//check image 
	if(strlen($_FILES['addphoto']['tmp_name'])==0)
	{
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Insert photo</div></div>";
	}else{
		$file   =$_FILES['addphoto']['tmp_name'];
		// read photo
		$fp = fopen($file, 'r');
		$data = fread($fp, filesize($file));
		$data = addslashes($data);
		fclose($fp);
	}

	


	//check data
	if($adddatebirth==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Date invalid</div></div>";
	}
	if($addemail==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Email invalid</div></div>";
	}
	if($addphone==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Phone invalid</div></div>";
	}
	if($addgender==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Gender invalid</div></div>";
	}
	if($addname==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Full name invalid</div></div>";
	}
	if($addpassword==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Password invalid</div></div>";
	}
	if($addaccount==='') {
		$bool=false;
		$err_account="<div class='form-group'><div class='col-md-4 control-label'>Account invalid</div></div>";
	}	
	
	

	$query = "Select account From users Where account ='{$addaccount}' ";
	$select_user_query =mysqli_query($connection,$query);
	if(!$select_user_query){
		die("Query failed".mysqli_error($connection));
	} 
	else{
		$rowcount=mysqli_num_rows($select_user_query);
		if($rowcount!=0){
			$bool=false;
			$err_account="<div class='form-group'><div class='col-md-4 control-label'>Account exist</div></div>";
		}
	}
	if($bool){
		$query = "INSERT INTO users (fullname,account,password,date_of_birth,gender,phone,email,photo) Values('{$addname}','{$addaccount}','{$addpassword}','{$adddatebirth}','{$addgender}','{$addphone}','{$addemail}','{$data}') ";
		$select_user_query =mysqli_query($connection,$query);
		if(!$select_user_query){
			die("Query failed".mysqli_error($connection));
		}else{
			header ("Location: viewusers.php");
		}
	}


}

?>