<?php 
session_start();
$msg="";
include('config.php');
 if(array_key_exists("submit", $_POST)){
$Id=$_POST['Id'];
$password=$_POST['password']; 
$query=mysqli_query($link,"select * from sqtdb_test where Id='$Id'");
$query2 = mysqli_num_rows($query);
if($Id=="" || $password==""){
$msg="Enter Username And Password";
}else if($query2==0){
$msg="User Does Not Exist";
}else{
while($check=mysqli_fetch_array($query)){
$user1=$check['Id'];
$pw1=$check['password'];
}
if($Id==$user1 && $password==$pw1){
$_SESSION['user'] = $Id;
$_SESSION['pass'] = $password;
echo "<meta http-equiv=\"refresh\" content=\"0;URL=profile.php\">";
}else{
$msg="Invalid Combination";
}

}
 } 
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top:30px">
<div class="col-md-4">
    
</div>
</div>

<br>
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In </h3>
                        <h3 class="panel-title"><font color="#FF0000"><?php echo $msg;?></font> </h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post"  enctype="multipart/form-data" name="form1" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="Id" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <input type="submit" name="submit" class="btn btn-primary" id="button" value="LOGIN"  class="btn btn-sm btn-success"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
<hr>

</div>
