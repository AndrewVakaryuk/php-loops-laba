<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-6</title>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div>
        <h2>Task 6</h2>
        <p class="mb-5">
            Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.
        </p>

        <div class="result border p-2 mt-2">

            <?php
            for($i = 1; $i <= 10000; $i += 1) {
                if(in_array(3, str_split($i)) && ($i%5 !== 0)) {
                    echo $i.PHP_EOL;
                }
            }
            ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>