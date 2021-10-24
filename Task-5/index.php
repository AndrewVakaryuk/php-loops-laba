<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-5</title>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div>
        <h2>Task 5</h2>
        <p class="mb-5">
            Найти сумму натуральных чисел от a до b, где a и b вводит пользователь. В случае некорректных a и b (например, a>b) вывести сообщение 'Сумма не существует'.
        </p>
        <form action="index.php" method="POST">
            <input type="number" name="task5a" placeholder="a">
            <input type="number" name="task5b" placeholder="b">
            <input type="submit" value="Submit">
        </form>
        <div class="result border p-2 mt-2">
        <?php
            $a = $_POST['task5a'] ?? false;
            $b = $_POST['task5b'] ?? false;

            if ($a > $b) {
                echo 'Сумма не существует';
                die();
            } elseif ($a <= 0 || $b <= 0) {
                echo 'Numbers must be natural!';
                die();
            }

            if ($a && $b) {
                $sum = 0;
                $string = [];
                for ($i = $a; $i <= $b; $i++) {
                    $sum += $i;
                    $string[] = $i;
                }
                $string = implode('+', $string);
                echo $string . '=' . $sum;
            }
//            var_dump($b);
        ?>




        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>