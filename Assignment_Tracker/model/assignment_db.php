<?php 

    function get_assignments_by_course($course_id) {
        global $db;
    
         $query = 'SELECT A.ID, A.Description, A.due_date, A.courseID, C.courseName FROM assignments A LEFT JOIN courses C ON A.courseID = C.courseID WHERE A.courseID = :course_id ORDER BY ID';
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
        $statement->execute();
        $assignments = $statement->fetchAll();
        $statement->closeCursor();
        return $assignments;
    }


    function delete_assignment($assignment_id) {
        global $db;
        $query = 'DELETE FROM assignments WHERE ID = :assign_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':assign_id', $assignment_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_assignment($course_id, $description,$due_date) {
        global $db;
        $query = 'INSERT INTO assignments (Description, courseID, due_date)
              VALUES
                 (:descr, :courseID, :duedate)';
        $statement = $db->prepare($query);
        $statement->bindValue(':descr', $description);
        $statement->bindValue(':courseID', $course_id);
        $statement->bindValue(':duedate', $due_date);
        $statement->execute();
        $statement->closeCursor();
    }


    