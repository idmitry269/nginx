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
        $red_1 = "<span class='r1'>1</span>";
        $green_2 = "<span class='g2'>2</span>";
        $yellow_3 = "<span class='y3'>3</span>";
        $blue_4 = "<span class='b4'>4</span>";
        for ($t_l_score = 1; $t_l_score <= 2; $t_l_score++) {
            echo "<tr>";
            for ($t_c_score = 1; $t_c_score <= 5; $t_c_score++) {
                echo "<td class=table>";
                for ($multiplicand = 1; $multiplicand <= 10; $multiplicand++) {
                    $res_arr = [];
                    $result = $multiplier * $multiplicand;
                    $res_str = "$multiplier x $multiplicand = $result<br>";
                    $res_str_len = strlen($res_str);
                    echo "<tr1>";
                    for ($res_key = 0; $res_key < $res_str_len; $res_key++) {
                        switch ($res_str[$res_key]) {
                            case 1:
                                $res_arr[$res_key] = $red_1;
                                break;
                            case 2:
                                $res_arr[$res_key] = $green_2;
                                break;
                            case 3:
                                $res_arr[$res_key] = $yellow_3;
                                break;
                            case 4:
                                $res_arr[$res_key] = $blue_4;
                                break;
                            default:
                                $res_arr[$res_key] = $res_str[$res_key];
                        }
                    }
                    $res_screen = implode($res_arr);
                    echo $res_screen;
                }
                $multiplier++;
            }
        }
        ?>   </table>
</div>
<br><a href="index.php">На главную</a>
</body>
</html>
