<?php

include_once('db.php');



$id = $_POST['id'];
$name = $_POST['name'];
$sp = $_POST['sp'];
$adress = $_POST['adress'];
$phone = $_POST['phone'];

$sql = "UPDATE workers SET name='$name', sp='$sp', adress='$adress' , phone='$phone' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
