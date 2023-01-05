<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./styles.css">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="submit.php" class="frame">
            <legend>New TO DO</legend>
            <br>
            <input type="text" name="to_do_list">
            <input type="submit">
        </form>

        <?php
        $fileContents = file_get_contents('to_do.json');
        $todoList = json_decode($fileContents, true);
        ?>

        <div class="frame">
            <legend>TO DOs</legend>
            <ul>
                <?php foreach ($todoList as $toDoItem): ?>
                    <li><?= $toDoItem['todo'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </body>
</html>