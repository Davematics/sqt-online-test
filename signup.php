<?php include("config.php");

$Id=$_POST['Id'];
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
if(array_key_exists("submit",$_POST)){
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))

)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
  
      move_uploaded_file($_FILES["file"]["tmp_name"], "photos/" . $_FILES["file"]["name"]);
     // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  $imageurl = "photos/" . $_FILES["file"]["name"];
$result=mysqli_query($link,"select * from sqtdb_test");
$query=mysqli_query($link,"insert into sqtdb_test(Id,name,email,password,picture) values('$Id','$name','$email','$password','$imageurl')");
if($query==1){
?>
<script type="text/javascript">
alert("Registration was sucessfully");
</script>
<?php
}else{?>
    <script type="text/javascript">
alert("process was not successfull choose a Different username ");
</script>
<?php
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Sowing a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/smoothbox.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<!-- Banner-->
<!-- navigation -->
</br></br>
<!-- /Banner-->


<!-- News-->
</br></br>
<!--/News-->
<div align="center"><h1><a href="login.php">Click To Login</a></h1> </div>
<div align="center"><h1>Sign Up</h1> </div>

</div>

 <div class="container">
  <form action="" method="post"  enctype="multipart/form-data" name="form1" >

<div class="form-group">
<label for="lastName" class="col-sm-2 control-label">	Username:</label>
<input type="text" name="Id" class="form-control" id="ld" placeholder="Choose a username">
</div>
 

<div class="form-group">
<label for="dob" class="col-sm-2 control-label">Your Name:</label>
<input type="text" name="name" class="form-control" id="name" placeholder=" Enter Your Name">

</div>
<div class="form-group">
<label for="dob" class="col-sm-2 control-label">Email:</label>
<input type="email" name="email" class="form-control" id="name" placeholder=" Enter Your Email">

</div>

 
<div class="form-group">
<label for="passwd" class="col-sm-2 control-label">Password:</label>
<input type="password" name="password" class="form-control" id="passwd" placeholder="Password">
</div>
 
<div class="form-group">
<label for="passwd" class="col-sm-2 control-label">PHOTO: REQUIRED</label>
<input name="file" type="file">
</div>

<div class="form-group">

<input type="submit" name="submit" class="btn btn-primary" id="button" value="Submit" />

</div>
 
</form>
 </div>
 </body>
</html>
