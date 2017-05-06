<?php
//create Connection
$db = new PDO('mysql:host=localhost;dbname=coursemanage', 'root', '');

//build query
$qery = "SELECT * FROM `students`";

$stmt = $db->query($qery);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

//buid query
$qery = "SELECT * FROM `courses`";
$stmt2 = $db->query($qery);

$courses = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>


    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div class="mainContent">
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <h2>Student and Course Management System</h2>
             <nav>
                 <ul class="nav nav-pills">
                     <li role="presentation"><a href="index.php">Dashboard</a></li>
                     <li role="presentation"><a href="students/allstudent.php">Student List</a></li>
                     <li role="presentation"><a href="students/addstudent.php">Add Student</a></li>
                     <li role="presentation"><a href="courses/allcourse.php">All Courses</a></li>
                     <li role="presentation"><a href="courses/addcourse.php">Add Course</a></li>
                     <li role="presentation"><a href="courses/assigncourse.php">Assign Courses</a></li>
                 </ul>
             </nav>
             <div class="panel panel-default margin20">
                 <div class="panel-heading">
                     Students
                 </div>
                 <div class="panel-body">
                     <?php
                     $count = 0;
                        foreach ($students as $number){
                            $count++;
                        }
                        echo '<p>Hear '.$count.'students </p>';
                     ?>
                     <p>View <a href="students/allstudent.php">ALL Students</a></p>
                     <p><a href="students/allstudent.php">Add</a> Students</p>
                 </div>
             </div>
             <div class="panel panel-default margin20">
                 <div class="panel-heading">
                     Courses
                 </div>
                 <div class="panel-body">
                     <?php
                     $countCourse = 0;
                     foreach ($courses as $number){
                         $countCourse++;
                     }
                     echo '<p>'.$countCourse.' Courses are available </p>';
                     ?>
                     <p>View <a href="courses/allcourse.php">ALL</a> Course</p>
                     <p><a href="courses/addcourse.php">Add</a> Course</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>