<?php
$db = new PDO('mysql:hostname=localhost;dbname=coursemanage', 'root', '');
//build query
$query = "INSERT INTO `courses` (`name`, `code`) VALUES ('".$_POST['courseName']."', '".$_POST['courseCode']."');";
$stmt = $db->exec($query);
if($stmt){
    header('location:http://localhost/rahul/CRUD1/courses/allcourse.php');
}else{
    echo "Not added Try again";
}
?>