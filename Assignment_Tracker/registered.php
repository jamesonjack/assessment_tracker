<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
 <!-- Bootstrap CSS -->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    </head>
    <body>
<!-- connect to DB -->
    <?php    include 'model/database.php';
   include 'model/user.php';
 ?>
    
<!-- header -->
       
<header class = "header" id = "header">

            <div class = "head-top">
                <div class = "site-name">
              
                </div>

            </div>

            <div class = "head-bottom flex">
            <p class="text-white bg-dark">
            <?php

$uploadOk = 1;


  //Required fields validation

  if(isset($_POST['register'])){


    
    if(empty($_POST['email'])){
      echo "Email is required  <br><br>";
      $uploadOk = 0;

    }

 
  

    
  
  $email= $_POST['email'];
  
  // email valid function
  
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  
  {
  
    echo "Please enter a valid email address. <br><br>";
    $uploadOk = 0;
  
  }
    
    if(empty($_POST['pass'])){
      echo "Password is required  <br><br>";
      $uploadOk = 0;

    }


    if ($uploadOk == 0){ 
    echo "Go <a href='register.php'>Back</a>";
}
}

    if ($uploadOk == 1){
 
  // get data entered from register page and post to db 
  if(isset($_POST['register'])){
 
    $email = $_POST['email'];

    $pass = $_POST['pass'];
 
    insertUser($email, $pass); 
    
// send to log in page     
    header('location: login.php'); 

    
    }
    else{ echo '<h1 class= "text-center text-danger">There was an error in processing</h1>';

    }
  

  }

?>
</p>
         
  </div>

        </header>
        <!-- end of header -->

       

        <!-- footer -->

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