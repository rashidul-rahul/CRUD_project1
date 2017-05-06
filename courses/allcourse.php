<?php

//create Connection
$db = new PDO('mysql:host=localhost;dbname=coursemanage', 'root', '');

//build query
$qery = "SELECT * FROM `courses`";
//
$stmt = $db->query($qery);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet">

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
                <nav>
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="../index.php">Dashboard</a></li>
                        <li role="presentation"><a href="../students/allstudent.php">Student List</a></li>
                        <li role="presentation"><a href="../students/addstudent.php">Add Student</a></li>
                        <li role="presentation"><a href="../courses/allcourse.php">All Courses</a></li>
                        <li role="presentation"><a href="../courses/addcourse.php">Add Course</a></li>
                        <li role="presentation"><a href="../courses/assigncourse.php">Assign Courses</a></li>
                    </ul>
                </nav>


                <caption>ALL Course LIST</caption>
                <div>

                    <table class="table table-bordered">

                        <thead>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>CourseCode</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($courses as $course){
                        ?>
                        <tr>
                            <td><?=$course['id']?></td>
                            <td><?=$course['name']?></td>
                            <td><?=$course['code']?></td>
                            <td><a href="../students/show.php">Show</a> | <a href="../students/Edit.php">edit</a> | <a href="../students/delete.php">Delete</a></td>
                        </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
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