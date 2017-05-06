<?php
//create Connection
$db = new PDO('mysql:host=localhost;dbname=coursemanage', 'root', '');

//build query
$qery = "INSERT INTO `students` (`id`, `seip_id`, `firstName`, `lastName`) VALUES (NULL, '".$_POST['seip']."', '".$_POST['firstName']."', '".$_POST['lastName']."');";

$stmt = $db->exec($qery);
if ($stmt){
    header("location:http://localhost/rahul/CRUD1/students/allstudent.php");
}
else{
    echo "Could not added";
}


?>