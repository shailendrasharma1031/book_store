<!DOCTYPE HTML>

<html>

<head>
  <title>Sign Up</title>
  <style type="text/css">

  input[type=text],input[type=email],input[type=password]{
    border-radius: 2px;
    border:solid;
    border-width: thin;
    border-color: #cccccc;
    height:30px;
    width:450px;
    font-size: 15px;

  }

  input[type=submit]{
    font-size: 15px;
    word-spacing: 3px;
    width:100px;
    height:50px;

  }

  span{
    display:block;
    margin-bottom: 15px;
  }

  div{
    width:500px;
    padding-left: 100px;
  }

  h4{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 28px;
    line-height: 1.2;
  }

  #banner{
    margin-bottom: 30px;
    height:70px;
    background-color:#003333;
  }

  #sitediv{
    padding: 0px;
    width:200px;
    margin:0px;
    float:left;
  }

  #logindiv{
    padding:0px;
    width:200px;
    margin:0px;
    float:right;
  }

  #site{
    width:320px;
    margin:0px;
    padding-top: 10px;
    padding-left: 10px;
    color: white;
    font-size: 40px;
    float:left;
  }

  #login{
    padding-right:30px;
    color:white;
    font-size: 25px;
    float:right;
    background-color: #003333;
    border:0px;
    height:70px;
  }

  body{
    margin: 0px;
    font-family: tahoma;
    background-repeat:no-repeat;
    background-image: url("background.jpeg");
    background-size: cover;
  }


  </style>

  <script  src="jquery-3.1.1.js"></script>

  <script>

  $(document).ready(function(){

  $("form").submit(function(){

    var password=document.getElementsByName('password')[0].value;

    if(password.length<6){
      alert("Password Should have atleast 6 characters");
      return false;
    }

    if(password != document.getElementsByName('cpassword')[0].value){
      alert("Passwords do not match");
      return false;
    }

    if(password.search(/[a-z]/)==-1){
      alert("Password should contain atleast 1 lower case , 1 upper case and 1 numerical");
      return false;
    }
    if(password.search(/[A-Z]/)==-1){
      alert("Password should contain atleast 1 lower case , 1 upper case and 1 numerical");
      return false;
    }
    if(password.search(/[0-9]/)==-1){
      alert("Password should contain atleast 1 lower case , 1 upper case and 1 numerical");
      return false;
    }

    return true;

  });
});

$(document).ready(function(){
  $("p").click(function(){
        window.location.href="/";
    });

  $("#login").click(function(){
        window.location.href="logout.php";
    });
});

  </script>
</head>

<body>
  <span id="banner">
    <div id="sitediv">
      <p id="site">Online Book Store</p>
    </div>
    <div id="logindiv">
      <button id="login">Log Out</button>
    </div>
  </span>
  <div align="left">
    <h4>Create Account</h4>
    <form action="signup_script.php" method="post">
      <span>
        <label align="left">First Name:<br></label>
        <input type="text" name="fname" required maxlength="30"/><br>
      </span>

      <span>
        <label>Last Name:<br></label>
        <input type="text" name="lname" maxlength="30"/><br>
      </span>

      <span>
        <label>Phone Number:<br></label>
        <input type="text" name="phno" maxlength="10"/><br>
      </span>
     
      <span>
        <label align="left">Address:<br></label>
        <input type="text" name="address" required maxlength="60"/><br>
      </span>


      <span>
        <label>Email Id:<br></label>
        <input type="email" name="email" required/><br>
      </span>

      <span>
        <label>Password:<br></label>
        <input type="password" name="password" required/><br>
      </span>

      <span>
        <label>Confirm Password:<br></label>
        <input type="password" name="cpassword" required/><br>
      </span>

      <span>
        <input type="submit" name="submit" value="Sign Up"/><br>
      </span>

    </form>
  </div>
</body>

</html>
