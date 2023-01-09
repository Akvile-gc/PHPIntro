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
    <?php
        $task = $_POST['editId'];
        $file = './to_do.json';
        $tasks = file_get_contents($file);
        $todoArray = json_decode($tasks, true);

        $newContents = json_encode($todoArray, JSON_PRETTY_PRINT);
        file_put_contents($file, $newContents);
    ?>
    <form method="POST" action="edit-submit.php" class="frame">
        <legend>Edit your task:</legend>
        <input type="hidden" name="id" value="<?php echo $task?>">
        <input type="text" name="new_to_do_list" value="<?php echo $todoArray[$task]['todo'] ?>">
        <input type="submit">
    </form>

</body>
</html>