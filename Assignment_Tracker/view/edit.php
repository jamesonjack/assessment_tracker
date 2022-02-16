<?php include('view/header.php') ?>


<section id="edit" class="edit">
    <h2>edit Assignment</h2>
    <br>
    <form action="editpost.php" method="post" id="edit__form" class="edit__form">
        <div class="edit__inputs">
      
<?php 

// function for individual product data 
function getassignDetails($assignment_id){
    global $db;
    $sql = "SELECT * FROM `assignments`  WHERE ID = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindparam(':id', $assignment_id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}





//function for edit product 
function editassign($assignment_id, $description, $due_date){
    global $db;
    $sql = "UPDATE `assignments` SET Description =:description, due_date =:due_date WHERE ID = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindparam(':id', $assignment_id);
    $stmt->bindparam(':description', $description);
    $stmt->bindparam(':due_date',$due_date);
    $stmt->execute();
    return true;
}

         
$assign = getassignDetails($assignment_id);  ?> 
    <input type="hidden" name="ID" id="ID" value="<?php echo $assignment_id ?>"/>
    <input type="text" name="description" id="description"  maxlength="120" value ="<?php echo $assign['Description']; ?>" placeholder="Description" required>

            <input type="date" id="duedate" value="<?php echo $assign['due_date']  ?>" name="due_date" required>
        </div>

    
        <div class="edit__editItem">
            <button type="submit" name="editassign" class="edit-button bold">edit</button>
        </div>
    </form>
</section>