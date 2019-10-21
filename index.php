<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<html>

<body >
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    
<div  class="img">
    
    <a href="http://localhost/dashboard/dbms/dashboard/" class="myButton">UPLOAD</a>
    <a href="http://localhost/dashboard/dbms/login.php" class="myButton2">LOG IN</a>
    <a href="http://localhost/dashboard/dbms/form.html" class="myButton3">Feedback</a>
    <img src="bg.png" height ="1000" width ="1500"     >
    <h1 class="title1">Upload all your College notes.<br> In one place.</h1>
    
    </div>

     
<style>
img{
  display:block;
  width:100%; height:100%;
  object-fit: cover;
}
    html,body{
    margin:0;
    height:100%;
}
    
.myButton {
     top: 50%;
  left: 50%;
     position: absolute;

  transform: translate(-250%, -30%);

    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #18ab29;

	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:27px;
	padding:26px 50px;

}
    .myButton2 {
     top: 50%;
  left: 50%;
     position: absolute;

  transform: translate(-265%, -150%);

    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0000A0), color-stop(1, #0000A0));
	
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #0000A0;

	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:27px;
	padding:26px 50px;

}
    .myButton3 {
      top: 80%;
  left: 40%;
     position: absolute;

  transform: translate(-265%, -150%);


	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:27px;


}
    .title1
    {
           top: 11%;
  left: 42%;
     position: absolute;

  transform: translate(10%, -30%);
        font-size: 350%;
        font-family: "Futura",bold;
        text-align: right;
        color:white;
    }



    </style>
</body>
</html>        