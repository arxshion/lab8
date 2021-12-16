<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showStudents.php")    
    ?>

    <form action="insertIntoStudents.php" method="post">
        <label>ПІБ</label><input name="name" type="text"><br>
        <label>Спеціальність</label><input name="sp" type="text"><br>
		 <label>Адреса</label><input name="adress" type="text"><br>
		  <label>номер телефону</label><input name="phone" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
