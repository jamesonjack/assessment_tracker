<?php

//$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
//$username = 'root';
//$password = 'pa55word';

//try {/
   // $db = new PDO($dsn, $username);
   // //$db = new PDO($dsn, $username, $password);
// }catch (PDOException $e) {
   // $error = "Database Error: ";
   // $error .= $e->getMessage();
   // include('view/error.php');
 //   exit();
//}


//remote connection
    $dsn = 'mysql:host=remotemysql.com;dbname=Q7cbSugRvM';
    $username = 'Q7cbSugRvM';
    $password = 'FJPrD1h2LI';

    try {
       // $db = new PDO($dsn, $username);
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('view/error.php');
        exit();
    }
    session_start();

 ?>