<!DOCTYPE html>
<html>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
form {border: 3px solid #f1f1f1;}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {

  color: white;

  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
 
 
}


 .signupbtn {
  float: left;
  width: 100%;
}



/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
 span.psw {
     display: block;
     float: none;
  }

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<?php
   include 'model/database.php';
   include 'model/user.php';
 
   
?>

<form method="post" action="registered.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass">
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      
      <button type="submit" name ="register" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<button onclick="window.location.href='login.php'" class="cancelbtn">Cancel</button>
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
