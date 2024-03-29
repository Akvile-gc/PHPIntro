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
            <input type="date" name="to_do_date">
            <input type="time" name="to_do_time">
            <input type="submit">
        </form>

        <?php
        $fileContents = file_get_contents('to_do.json');
        $todoList = json_decode($fileContents, true);
        ?>

        <div class="frame">
            <legend>TO DOs</legend>
            <table>
                <?php if (file_get_contents('./to_do.json')):?>
                <?php foreach ($todoList as $key => $toDoItem): ?>
                <tr>
                    <td>
                            <?= $toDoItem['todo'] ?>
                    </td>
                    <td>
                        <?= 'Created at: ' . $toDoItem['created']?>
                    </td>
                    <td>
                        <form method="POST" action="delete.php" >
                            <input type="hidden" name="id" value="<?php echo $key ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>                    <td>
                        <form method="POST" action="edit.php" >
                            <input type="hidden" name="editId" value="<?php echo $key ?>">
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= 'Due date: ' . $toDoItem['until']?>
                    </td>
                    <td></td>
                </tr>
                    <?php endforeach ?>
                    <?php endif ?>
            </table>

<!--            Another way to do just the list-->
<!--            <ul>-->
<!--                -->
<!--                --><?php //foreach ($todoList as $toDoItem): ?>
<!--                    <li>--><?php //= $toDoItem['todo'] . '   Created at: ' . $toDoItem['created']['date']?>
<!--                    <br>-->
<!--                        Due date: --><?php //=$toDoItem['until']?>
<!--                    </li>-->
<!--                --><?php //endforeach ?>
<!--            </ul>-->
        </div>
    </body>
</html>