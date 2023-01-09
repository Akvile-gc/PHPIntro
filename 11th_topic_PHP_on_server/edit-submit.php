<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p>Task updated.</p>
    <br>
    <button>
        <a href="index.php">Back to the list</a>
    </button>
    <?php
//        $item = 0;
        $editID = $_POST['id'];
        $file = './to_do.json';
        $tasks = file_get_contents($file);
        $todoArray = json_decode($tasks, true);
        $todoArray[$editID]['todo'] = $_POST['new_to_do_list'];
        $newContents = json_encode($todoArray, JSON_PRETTY_PRINT);
        file_put_contents($file, $newContents);

    ?>
</body>
</html>

