<!doctype html>
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
<!--    <form method="POST" action="delete.php" >-->
<!--        <input type="hidden" name="id" value="--><?php //echo $key ?><!--">-->
    <p>The item has been deleted from the list.</p>
    <br>
    <button>
        <a href="index.php">Back to the list</a>
    </button>
    <?php
        $delete = $_POST['id'];
        $file = './to_do.json';
        $tasks = file_get_contents($file);
        $todoArray = json_decode($tasks, true);
        unset($todoArray[$delete]);
        $newContents = json_encode($todoArray, JSON_PRETTY_PRINT);
        file_put_contents($file, $newContents);
    ?>

</body>
</html>