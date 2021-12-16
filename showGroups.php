<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Groups</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця employers</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM employers";


    if($result = $mysqli->query($sql))
    {   
        printf("Список роботодавців: <br><br>");   
        printf("<table><tr><th>ід</th><th>назва компанії</th><th>спеціальність</th><th>номер телефону</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr> <td>%s</td> <td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['namecom'], $row['speciality'] , $row['phone']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
