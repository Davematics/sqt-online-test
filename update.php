<?php 
session_start();
include('config.php');
$Id=$_SESSION['user'];
echo $Id;
$view=mysqli_fetch_array(mysqli_query($link,"select * from sqtdb_test where Id='$Id'"));
if(array_key_exists("submit",$_POST)){

extract($_POST);
$query=mysqli_query($link,"update sqtdb_test SET name='$name', email='$email' where Id='$Id'")or die("cannot Update".mysqli_error($link));
if($query==1){
	
?>
<script type="text/javascript">
alert("Update was sucessfully");
</script>
<?php
echo "<meta http-equiv=\"refresh\" content=\"0;URL=update.php\">";
}else{
	
	?>
    <script type="text/javascript">
alert("process was not successfull ");
</script>
<?php
}

}
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
   
   <form action="" method="post"  enctype="multipart/form-data" name="form1" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $view['name'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="abt1.jpg" class="img-circle img-responsive"> </div>
                
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
                        <td>Username:</td>
                        <td><input type="text" class="form-control" name="Id" id="Id"  value="<?php echo $view['Id'];?>" disabled/></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><input type="text" class="form-control" name="email" id="Id"  value="<?php echo $view['email'];?>"/></td>
                      </tr>
                      <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control" name="name" id="Id"  value="<?php echo $view['name'];?>"/></td>
                      </tr>
                      <tr>
                                            
                     
                    </tbody>
                  </table>
                  
                  <input type="submit" name="submit" class="btn btn-primary" id="button" value="Update"  class="btn btn-sm btn-success"/>
                  
                </div>
              </div>
            </div>
               </form>  
            
          </div>
        </div>
      </div>
    </div>