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
        <?php if(isset($_POST['submit'])) {
                echo $_POST['todo_list'] . PHP_EOL;
            }
        ?>
        <form method="POST" action="" class="frame">
            <legend>New TODO</legend>
            <br>
            <input type="text" name="todo_list">
            <input type="submit">
        </form>
        <div class="frame">
            <legend>TODOs</legend>
            <p>Walk the dog</p>
            <p>Clean the house</p>
            <p>Wash the car</p>

            <?php echo $_POST['todo_list'] . PHP_EOL ?>

        </div>
    </body>
</html>