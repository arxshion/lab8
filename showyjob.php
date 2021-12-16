<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця yjob</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця yjob</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM yjob INNER JOIN workers ON yjob.idw=workers.id INNER JOIN employers ON yjob.ide=employers.id';


    if($result = $mysqli->query($sql)) {  

        printf("Список працевлаштованих: <br><br>");   
        printf("<table><tr><th>назва компанії</th><th>піб працівника</th><th>рік</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['namecom'], $row['name'] , $row['data'] ); 
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
