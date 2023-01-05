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
        <?php echo 'Form submitted!' ?>
        <br>
        <br>
        <button>
            <a href="index.php">Back to the list</a>
        </button>
        <?php
            $file = './to_do.json'; //get file
            $todo = $_POST['to_do_list'];
            $oldContents = file_get_contents($file); //obtain existing list
        //can var_dump just to check if it's working
            $todoList = [];

            if($oldContents !== false){
                $todoList = json_decode($oldContents, true); //decode the list

                if ($todoList === null)
                    $todoList = [];
            }

            $todoList[] = ['todo' => $todo];
            $newContents = json_encode($todoList, JSON_PRETTY_PRINT);
            file_put_contents($file, $newContents);
            ?>
    </body>
</html>

