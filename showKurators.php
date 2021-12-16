<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця njob</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця njob</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM njob INNER JOIN workers ON njob.idw=workers.id';


    if($result = $mysqli->query($sql)) {  

        printf("Список не працевлаштованих: <br><br>");   
        printf("<table><tr><th>піб працівника</th><th>статус</th><th>рік</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['name'], $row['status'] , $row['data'] ); 
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
