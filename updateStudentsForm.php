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
        include_once("showStudents.php");    
    ?>

<form action="updateStudents.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення ПІБ</label><input name="name" type="text"><br>
        <label>Нове значення спеціальності</label><input name="sp" type="text"><br>
		<label>Нове значення адреси</label><input name="adress" type="text"><br>
		<label>Нове значення телефону</label><input name="phone" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>