<?php 
session_start();
include('config.php');
$Id=$_SESSION['user'];
echo $Id;
$view=mysqli_fetch_array(mysqli_query($link,"select * from sqtdb_test where Id='$Id'"));
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           

        <A href="login.php" >Logout</A>
       <br>
<p class=" text-info"><?php echo date("l jS \of F Y h:i:s A");?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $view['name'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $view['picture'];?>" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $view['email'];?></td>
                      </tr>
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $view['Id'];?></td>
                      </tr>
                      <tr>
                                            
                     
                    </tbody>
                  </table>
                  
                  <a href="update.php" class="btn btn-primary">Edit Profile</a>
                  
                </div>
              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
    </div>
