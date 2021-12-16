<?php

include_once('db.php');


$name = $_POST['name'];
 $sp = $_POST['sp'];
 $adress = $_POST['adress'];
 $phone = $_POST['phone'];

$sql = "INSERT INTO workers (name, sp, adress, phone ) VALUES ('$name', '$sp', '$adress','$phone' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
