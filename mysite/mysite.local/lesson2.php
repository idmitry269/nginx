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
        $number = ['1', '2', '3', '4'];
        $num_col = [
            "<span class='r1'>1</span>",
            "<span class='g2'>2</span>",
            "<span class='y3'>3</span>",
            "<span class='b4'>4</span>"
        ];
        for ($t_l_score = 1; $t_l_score <= 2; $t_l_score++) {
            echo "<tr>";
            for ($t_c_score = 1; $t_c_score <= 5; $t_c_score++) {
                echo "<td class=table>";
                for ($multiplicand = 1; $multiplicand <= 10; $multiplicand++) {
                    $result = $multiplier * $multiplicand;
                    $res_str = "$multiplier x $multiplicand = $result<br>";
                    echo "<tr1>";
                    echo str_replace($number, $num_col, $res_str);
                }
                $multiplier++;
            }
        }
        ?>   </table>
</div>
<br><a href="index.php">На главную</a>
</body>
</html>
