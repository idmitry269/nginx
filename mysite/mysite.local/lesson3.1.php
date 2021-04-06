<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Урок3</title>
    <link rel="stylesheet" href="style.css">
</head>
<main>
    <form action="lesson3.php" method="post">
        <?php
        echo strrev(htmlspecialchars($_POST['text']));
        ?>
        <p><input type="submit" value="Назад"></p>
    </form>
</main>
