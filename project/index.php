<!DOCTYPE html>
<html lang="cmn-Hands">
<head>
    <meta charset="utf-8">
    <title>PHP小项目</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container">
    <h3>循环</h3>
    <table class="table table-hover table-bordered table-striped table-condensed text-center">
        <tbody>
            <?
                for ($i = 1; $i <= 10; ++$i) {
                    echo '<tr>';
                    for ($j = 1; $j <= 10; ++$j) {
                        echo '<td>'.($i * $j).'</td>';
                    }
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

    <h3>水仙花</h3>
    <ul>
        <?
            for ($a = 100; $a <= 999; ++$a) {
                $n1 = floor($a / 100);
                $n2 = floor($a % 100 / 10);
                $n3 = $a % 10;

                if ($a == pow($n1, 3) + pow($n2, 3) + pow($n3, 3)) {
                    echo '<li>'.$a.'</li>';
                }
            }
        ?>
    </ul>

    <h3>九九乘法表</h3>
    <?
        for ($x = 1; $x <= 9; ++$x) {
            echo '<div class="row">';
            for($y = 1; $y <= $x; ++$y) {
                echo '<div class="col-xs-1">'."$y*$x=".($x * $y).'</div>';
            }
            echo '</div>';
        }
    ?>
</body>
</html>
