<html>
<head>
<?php



?>
<style>

html, body {
    margin: 0;
    height: 100%;
}

#divbutton
{
height:30px;
width:100px;
color:#333;
background-color:white;
display:inline-block;
border-radius:8px;
padding:10px;
margin:-20 10 20 145;
vertical-align:middle;
text-align:center;
line-height: 50px;
font-family:lato;
font-weight:bold;
font-size:20px;
border: 2px solid black;
}

#divbutton:hover
{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

#entirediv {
    height:100%;
    width:100%;
    background-image: url("background-learner.jpg");
    repeat:no-repeat;
    opacity:0.7;

}
p
{
font-family:moderna;
color:black;
font-size:17px;
}
a{text-decoration:none;}

#boxdiv
{
position:fixed;
height:0px;
width:350px;
bordr:3px solid #59656E;
position:absolute;
margin:150 300 200 510;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

form
{
margin-top:80px;
font-family:Tahoma;
color:white
}

h3
{color:white;
font-size:30;}
</style>

</head>

<body>
<div id="entirediv"><div id="boxdiv">

<form align="center" action="admin_login_submit.php" method="post">
<br><br><br><br>

<input type="email" placeholder=" Email"  name="email" style="height:30px;font-size:14pt;float:center;margin:5px"/>
<br><br>
<input type="password" placeholder=" Password" name="password" style="height:30px; font-size:14pt; float:center;margin:5px"/>

<!--<a href="signup.php"><p><b>Not Registered? Create an account here!</b></p></a>-->
<p><input  type="submit" src="Login Button.png" alt="Submit" width="115" height="48" ></p>
</form>


 </div> </div>
</body>

</html>