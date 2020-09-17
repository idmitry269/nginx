<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: separate;
        }
        .table {
            border: 1px solid #030303;
            line-height: 20px;
        }
    </style>
</head>
<body>
<div>
    <table>
        <?php
        $str = 2;
        $stb = 5;
        $k = 10;
        $n = 1;
        $l = 1;
        $r1 = "<span class='r1'>1</span>";
        $g2 = "<span class='g2'>2</span>";
        $y3 = "<span class='y3'>3</span>";
        $b4 = "<span class='b4'>4</span>";
        for ($i = 1; $i <= $str; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $stb; $j++) {
                echo "<td class=table>";
                for ($l = 1; $l <= $k; $l++) {
                    $rez_new = [];
                    $rez = $n*$l;
                    $rez_s = "$n x $l = $rez<br>";
                    $rezl = strlen($rez_s);
                    echo "<tr1>";
                    for ($p = 0; $p < $rezl; $p++) {
                        if ($rez_s[$p] == "1") {
                            $rez_new[$p] = $r1;
                        } elseif ($rez_s[$p] == "2") {
                            $rez_new[$p] = $g2;
                        } elseif ($rez_s[$p] == "3") {
                            $rez_new[$p] = $y3;
                        } elseif ($rez_s[$p] == "4") {
                            $rez_new[$p] = $b4;
                        } else {
                            $rez_new[$p] = $rez_s[$p];
                        }
                    }
                    $rez2 = implode($rez_new);
                    echo $rez2;
                }$n++;
            }
        }
        ?>   </table>
</div>
<br><a href="index.html">На главную</a>
</body>
</html>