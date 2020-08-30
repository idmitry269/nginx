<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
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
        <?
        $str = 2;
        $stb = 5;
        $k = 10;
        $n = 1;
        for($i=1; $i <= $str; $i++)
        {
            echo "<tr>";
            for($j=1; $j <= $stb; $j++)
            {

                echo "<td class=table>";
                for($l=1; $l <= $k; $l++)
                {
                    echo "<tr1>";
                    echo "<td1 style='margin: 2px'> $n x $l = ".$n*$l."<br>";
                }
                $n++;


            }
            

        }
        ?>   </table>
</div>

</body>
</html>