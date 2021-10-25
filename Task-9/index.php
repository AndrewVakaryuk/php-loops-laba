<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-9</title>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div>
        <h2>Task 9</h2>
        <p class="mb-5">
            Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр.
            Найдите количество счастливых билетов и  процент от общего числа билетов.
        </p>

        <div class="result border p-2 mt-2">

            <?php
                $happyNumbers = [];
                $from = 100000;
                $till = 1000000;
                for ($i = $from; $i < $till; $i++) {
//                    $twoHalves = str_split($i, 3);
//                    if (array_sum(str_split($twoHalves[0])) === array_sum(str_split($twoHalves[1]))) {
//                        echo $i . PHP_EOL;
//                    }
                    $values = str_split($i);
                    if (($values[0] + $values[1] + $values[2]) === ($values[3] + $values[4] + $values[5])) {
                        $happyNumbers[] = $i;
                        echo $i . PHP_EOL;
                    }
                }
                $happyNumbersPercentage = (round(($qty = count($happyNumbers))/($till - $from), 4)) * 100;
            ?>
            <p>Number of happy tickets: <?= $qty . ' from ' . number_format($from) . ' to ' . number_format($till) ?></p>
            <p>Percentage of happy tickets: <?= $happyNumbersPercentage ?>%</p>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>