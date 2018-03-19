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
                <button type="button" class="btn btn-default btn-circle" id="buttonedit" data-toggle="tab" href="#"><i class="fa fa-cogs fa-3x"></i></button>
                <p><small>Edit user</small></p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-selected btn-circle" id="buttonview" data-toggle="tab" href="#menu4"><i class="fas fa-users fa-3x"></i></button>
                <p><small>View users</small></p>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div id="menu1" class="tab-pane fade active in">



              <div class="container-fluid">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-3">
                        <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-list-alt"> </span> Users list </h2>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="col-xs-12 col-md-4">
                            <label> Search </label>
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control input-md" name="search">
                                <div class="input-group-btn">
                                  <button type="button" class="btn btn-md btn-warning"> <span class=" glyphicon glyphicon-search"></span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel-body table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center"> Id </th>
                          <th class="text-center"> Account </th>
                          <th class="text-center"> Full name  </th>
                          <th class="text-center"> Date of birth </th>
                          <th class="text-center"> Gender </th>
                          <th class="text-center"> Phone number </th>
                          <th class="text-center"> Email </th>
                          <th class="text-center"> Date of joining </th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="edit" id="detail">
                          <td id="no" class="text-center"> 1 </td>
                          <td id="name" class="text-center"> ABC </td>
                          <td id="mobile" class="text-center"> 5412547854 </td>
                          <td id="mail" class="text-center"> abc@gmail.com </td>
                          <td id="city" class="text-center"> New York </td>
                          <td id="" class="text-center"> 2 </td>
                          <td id="" class="text-center"> DFG </td>
                          <td id="" class="text-center"> 4025478965 </td>
                        </tr>


                      </tbody>
                    </table>
                  </div>

                  <div class="panel-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4">
                          <p class="muted pull-right"><strong>  </strong></p>
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
  </div>
</body>
</html> 