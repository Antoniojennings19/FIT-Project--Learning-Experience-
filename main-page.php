<?php 

    include "./View/header.php";
    include './Controller/db-conn.php';
    include './Controller/student-cards.php';
    include './Model/query-courses.php';
    include "./View/navbar.php";
    
    //DB Connection
        //Get DB Connection
        $database = new Database();
        $db = $database->connect();

        //Initialize Objects 
        $product = new courseName($db);

        //Read all courses, students, & grade in the database
        $productGet = $product->courseRead();
    //DB Connection

?>

    <div class='student-course-grid'>
        <?php 
            $rowNum = 1;

            while ($row = $productGet->fetch(PDO::FETCH_ASSOC)){
                // Variables
                $stuCourse = $row['CourseName'];
                $stuName = $row['StudentName'];
                $stuGrade = $row['GradeLevel'];

                makeStudentCard($stuCourse, $stuName, $stuGrade, $rowNum);
                $rowNum++;
            }

        ?>
    </div>

<!-- Footer -->

    <div class='footer-grid'>
        <!-- Footer Left -->
            <div class='footer-left-grid'>
                <img class='cloud-pic'src='./View/Public/Images/cloud.png'>
            </div>
        <!-- Footer Left -->

        <!-- Footer Right -->
            <div class='footer-right-button-grid'>
                <button class='support-btn btn btn-primary'>Support</button>
            </div>
        <!-- Footer Right -->
    </div>
</div>
<!-- Footer -->
</body>
</html>