<?php

    class Student{
        public function __construct($db){
            $this->conn = $db;
        }

    function addStudent($data){
        //Variables

        $studFirst = $data['first'];
        $studLast = $data['last'];
        $studGrade = $data['grade'];
        $studEmail = $data['email'];
        $studPhone = $data['phone'];
        $studPass = $data['pwd'];
         
        //Inserting new users
        $query = "INSERT INTO Students
                    (StudentFirst, StudentLast, GradeLevel, Email, StudentPhone, StudentPassword)
                VALUES('$studFirst', '$studLast', '$studGrade', '$studEmail', '$studPhone', '$studPass');
        ";

        //Prepare Query Statement
        $stmt = $this->conn->prepare($query);

        //Execute Query
        $stmt->execute();
    }
}
?>