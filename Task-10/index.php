<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-10</title>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div>
        <h2>Task 10</h2>
        <p class="mb-5">
            Найдите количество прямоугольных треугольников со сторонами, меньшими 100.
        </p>

        <div class="result border p-2 mt-2">

            <?php
            $time_start = microtime(true);
            $n = 0;
                for ($x = 3; $x < 100; $x++){
                    for ($y = $x + 1; $y < 100; $y++) {
                        $z = sqrt($x**2 + $y**2);
                        if($z < 100 && ($z - floor($z) == 0)) {
                            echo "a: ". $x." b:".$y." c:".$z." <BR>";
                            $n++;
                        }
                    }
                }
            $time_end = microtime(true);
            $time = $time_end - $time_start;
            ?>

            <?php
//            $n = 0;
//            $time_start = microtime(true);
//            for ($a = 3; $a<100; $a++) {
//                for ($b=$a+1; $b<100; $b++) {
//                    $c = round(sqrt($a*$a+$b*$b));
//                    if (($c < 100) && ($a*$a+$b*$b==$c*$c)) {
//                        echo "a: ". $a." b:".$b." c:".$c." <BR>";
//                        $n++;
//                    }
//                }
//            }
//            $time_end = microtime(true);
//            $time = $time_end - $time_start;
//            ?>
<!--            <p>Total: --><?//= $n ?><!--</p>-->
<!--            <p>Time: --><?//= $time ?><!--</p>-->

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>