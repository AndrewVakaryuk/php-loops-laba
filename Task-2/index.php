<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Loops! Task-2</title>
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="http://www.itmathrepetitor.ru/zadachi-po-php-cikly-i-massivy/" target="_blank">Задачи по PHP. Циклы и массивы</a></h1>
    <div id="task2">
        <h2>Task 2</h2>
        <p class="mb-5">Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме. Если n некорректно, вывести фразу "Bad n".</p>
        <form action="index.php" method="POST">
            <input type="number" name="task2">
            <input type="submit" value="Submit">
        </form>
        <div class="result border p-2 mt-2">


            <?php
                if($_POST['task2'] && ($_POST['task2'] <= 0)) {
                    echo 'Bad n';
                }
            ?>

            <?php for ($i = 1; $i <= $_POST['task2']; $i++) : ?>
                <p><?php echo $i . '. Silence is golden' ?></p>
            <?php endfor ?>

<!--            --><?php //if($_POST['task2'] && ($_POST['task2'] > 0)) : ?>
<!--                --><?php //for ($i = 1; $i <= $_POST['task2']; $i++) : ?>
<!--                    <p>--><?php //echo $i . '. Silence is golden' ?><!--</p>-->
<!--                --><?php //endfor ?>
<!--            --><?php //elseif ($_POST['task2']) : ?>
<!--                <p>--><?php //echo 'Bad n' ?><!--</p>-->
<!--            --><?php //endif ?>


        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>