<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-7</title>
    <style>
        .square {
            height: 50px;
            width: 50px;
            border:1px solid black;
            display: inline-block;
        }
        .scroll {
            width: 900px;
            height: 700px;
            display:table;
            margin: 0 auto;
            overflow: scroll;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div>
        <h2>Task 7</h2>
        <p class="mb-5">
            Вывести на экран квадрат, состоящий из n x n квадратов различного цвета.
        </p>
        <form action="index.php" method="POST">
            <input type="number" name="task7" placeholder="n">
            <input type="submit" value="Submit">
        </form>
        <div class="result border p-2 mt-2" style='line-height:1;'>

            <div class="scroll">
                <?php
                $n = $_POST['task7'] ?? false;
                if (!$n) {die();}

                function rand_color():string {
                    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                }

                function getUniqueColor(array &$colors): string
                {
                    $color = rand_color();
                    if (!in_array($color, $colors)) {
                        $colors[] = $color;
                        return $color;
                    } else {
                        return getUniqueColor($colors);
                    }
                }
                $usedColors = [];
                ?>

                <?php for ($i = 0; $i < $n ; $i++) : ?>
                    <div class="row" style="flex-wrap: nowrap;">
                        <?php for ($k = 0; $k < $n ; $k++) : ?>
                            <?php if($k === 0) : ?>
                                <br>
                            <?php endif ?>
                            <span class="square" style='background-color:<?php echo getUniqueColor($usedColors) ?>;'></span>
                        <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>