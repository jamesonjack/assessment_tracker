<!DOCTYPE html>
<?php 
  if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time() + (86400 * 30), "/");
    setcookie ("pass",$_POST["pass"],time() + (86400 * 30), "/");
   
  } else {
    setcookie("email","");
    setcookie("pass","");
  
  } ?>
  
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.regbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .regbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
 include 'model/database.php';
  include 'model/user.php';
  

// identify email and pass variables lowercase email
if(isset($_POST['login'])){

  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $new_pass = md5($pass.$email);

  // use get user function

 $u_result = getuser($email,$new_pass);

  if(!$u_result){
    echo '<div class="alert alert-danger">Email or Password is incorrect! please try again. </div>';
  }



  else{
   
    $_SESSION['email'] = $email; 

    $user_id=login_user_id($email);
    $_SESSION['U_ID'] = $user_id; 
 
    
   header('location: index.php'); 


   }



  }
?>
<h2>Login Form</h2>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">


  <div class="container">
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Enter email" id="email" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" required>
        
    <button type="submit" id="login" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">

    
  </div>
</form>
<button onclick="window.location.href='register.php'" class="regbtn">Register</button>
</main>
<style>
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  font-size: 12px;
}</style>
<footer>Jack Jameson 2022</footer>
</body>
</html>
