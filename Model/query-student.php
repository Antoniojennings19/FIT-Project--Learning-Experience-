<?php

    class Student{
        public function __construct($db){
            $this->conn = $db;
        }

    function addStudent($data){
        //Variables
        $studentName = $data['name'];
        $student = $data['slices'];
        $personComment = $data['comments'];

        $fullName = $sahfjk . " " . $sdjkjdsf;
    

        //Inserting new users
        $query = "INSERT INTO Students
                    (name, comments)
                VALUES('$fullName', '$personComment');
        ";

        //Prepare Query Statement
        $stmt = $this->conn->prepare($query);

        //Execute Query
        $stmt->execute();
    }
}
?>