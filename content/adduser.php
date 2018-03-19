<?php session_start(); ?>
<?php include "db.php";?>
<?php include "createuser.php";?>
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
              <button type="button" class="btn btn-selected btn-circle" id="buttonadd" data-toggle="tab" href="userprofile.php"><i class="fas fa-user-plus fa-3x"></i></button>
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
                <div class="col-md-10 ">
                  <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"  enctype='multipart/form-data'>
                    <fieldset>
                      <!-- Form Name -->
                      <legend>User profile form requirement</legend>
                      <!-- Account-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="addaccount">Account</label>  
                        <div class="col-md-4">
                         <div class="input-group">
                           <div class="input-group-addon">
                            <i class="fa fa-user">
                            </i>
                          </div>
                          <input id="addaccount" name="addaccount" value="<?php if (isset($addaccount)) echo $addaccount?>" type="text" placeholder="Account" class="form-control input-md">
                        </div>
                      </div>
                    </div>

                    <!-- Password-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="addpassword">Password</label>  
                      <div class="col-md-4">
                       <div class="input-group">
                         <div class="input-group-addon">
                          <i class="fas fa-key">
                          </i>
                        </div>
                        <input id="addpassword" name="addpassword" type="password" value="<?php if (isset($addpassword)) echo $addpassword?>" placeholder="Password" class="form-control input-md">
                      </div>
                    </div>
                  </div>

                  <!-- Full name-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="addname">Name (Full name)</label>  
                    <div class="col-md-4">
                     <div class="input-group">
                       <div class="input-group-addon">
                        <i class="fas fa-user-circle">
                        </i>
                      </div>
                      <input id="addname" name="addname" type="text" placeholder="Name (Full name)" value="<?php if (isset($addname)) echo $addname?>" class="form-control input-md">
                    </div>
                  </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="addphoto">Upload photo</label>
                  <div class="col-md-4">
                    <input id="addphoto" name="addphoto" class="input-file" type="file">
                  </div>
                </div>

                <!-- Date birth-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="adddatebirth">Date Of Birth</label>  
                  <div class="col-md-4">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-birthday-cake"></i>
                     </div>
                     <input id="adddatebirth" name="adddatebirth" type="date" value="<?php if (isset($adddatebirth)) echo $adddatebirth?>" placeholder="Date Of Birth" class="form-control input-md">
                   </div>
                 </div>
               </div>

               <!-- Gender -->
               <div class="form-group">
                <label class="col-md-4 control-label" for="addgender">Gender</label>
                <div class="col-md-4"> 
                  <label class="radio-inline" for="Gender-0">
                    <input type="radio" name="addgender" id="addGender-0" value="Male" checked="checked">
                    Male
                  </label> 
                  <label class="radio-inline" for="Gender-1">
                    <input type="radio" name="addgender" id="addGender-1" value="Female">
                    Female
                  </label> 
                </div>
              </div>

              <!-- Phone-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="addphone">Phone number </label>  
                <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                   </div>
                   <input id="addphone" name="addphone" type="tel" value="<?php if (isset($addphone)) echo $addphone?>" placeholder="Phone number " class="form-control input-md">
                 </div>
               </div>
             </div>

             <!-- Text input-->
             <div class="form-group">
              <label class="col-md-4 control-label" for="addemail">Email Address</label>  
              <div class="col-md-4">
                <div class="input-group">
                 <div class="input-group-addon">
                   <i class="fas fa-envelope"></i>
                 </div>
                 <input id="addemail" name="addemail" type="email" value="<?php if (isset($addemail)) echo $addemail?>" placeholder="Email Address" class="form-control input-md">
               </div>
             </div>
           </div>

           <?php if(isset($err_account)) echo $err_account ?>

           <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
              <button  class="btn btn-success" type="submit" name="action"  value="submit"><span class="fas fa-thumbs-up"></span> Submit</button>
              <button  class="btn btn-danger" type="reset" value="Reset"><span class="fas fa-eraser"></span> Clear</button>

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
