<!DOCTYPE html>
<?php
include_once('login.php');
?>
<html>
<head>
<style>
form{
border: none;
font-size: 30 px;
font-family: Times New Roman;
}
body{
background-image:url(http://www.indiabankexams.com/wp-content/uploads/2017/01/DMRC.png);
background-repeat:no-repeat;
background-size:800px 500px;
background-position:top right;
}
input[type=text], input[type=password]{
width: 30%;
padding: 12px 20 px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}

.button {
color: white;
background-color: #DC143C;
padding: 15px 32px;
margin: 8px 0;
border:  none;
cursor: pointer;
width: 30%;
text-align: center;
font-size: 15px;
}

}
</style>

</head>

<body>
<h1><center><font face="Georgia" size="15" color="teal">LOGIN</font></center></h1>

<div class="Login-form">


<form action="" method="POST">
<b><font size="5">Username : </font></b>  
<input type="text" placeholder="  Enter Username" style="height: 35px;" class="input" name="username" required/> <br><br><br>
<b><font size="5">Password : </font></b>
<input type="password" placeholder="  Enter Password" style="height: 35px;" class="input" name="password" required/><br><br><br>

<button class="button" type="submit" name="submit">Login</button>
</form>
</div>

</body>
</html>
