<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <table>
        <?php
        $multiplier = 1;
        for ($t_l_score = 1; $t_l_score <= 2; $t_l_score++) {
            echo "<tr>";
            for ($t_c_score = 1; $t_c_score <= 5; $t_c_score++) {
                echo "<td class=table>";
                for ($multiplicand = 1; $multiplicand <= 10; $multiplicand++) {
                    echo "<tr1>";
                    echo "$multiplier x $multiplicand = " . $multiplier * $multiplicand . "<br>";
                }
                $multiplier++;
            }
        }
        ?>
    </table>
</div>
<br><a href="index.php">На главную</a>
</body>
</html>
