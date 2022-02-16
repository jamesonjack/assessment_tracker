<?php  
   // function for user data

 function insertUser($email, $pass){
    global $db;
    try {
        $new_pass = md5($pass.$email);    
        $query = "INSERT INTO user (email, pass) VALUES (:email, :pass)";
        $statement = $db->prepare($query); 
        $statement->bindparam(':email',$email);
        $statement->bindparam(':pass',$new_pass);
    
        $statement->execute();
        return true;
        
    }  catch (PDOexception $e) {
        echo $e->getMessage();
        return false;
    }
}
// function for login 

function getuser($email,$pass){
    global $db;
try{   
$query = "select * from user where email = :email AND pass = :pass";
$statement = $db->prepare($query); 
$statement->bindparam(':email', $email);
$statement->bindparam(':pass', $pass);
$statement->execute();
$result = $statement->fetch();
return $result;

}catch (PDOexception $e) {
    echo $e->getMessage();
    return false;
}
}

 // function for stored session ID
 function login_user_id($email){
    global $db;
    try{
   $query = "SELECT U_ID from user where email = :email";
   $statement = $db->prepare($query);  
   $statement->execute(array('email' => $email));

   $row = $statement->fetch();
   return $row['U_ID'];
    }
    catch(PDOexception $e)
    { echo '<p class="bg-danger">'.$e->getmessage().'</p>';   

}

 }


