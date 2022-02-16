<?php
    require('model/database.php');
    require('model/assignment_db.php');
    require('model/course_db.php');

if(isset($_POST['editassign'])){

    
    $id = $_POST['ID'];
    $description = $_POST['description'];
    $duedate = $_POST['due_date'];
    editProduct($id,$description,$duedate); 
    header('location: index.php'); 
}

?>