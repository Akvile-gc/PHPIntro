<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Already uploaded files:</h1>
    <table>
        <?php
            $existingData = file_get_contents('meta.json');
            $deserializedData = json_decode($existingData, true);
            foreach ($deserializedData as $file):
                foreach ($file as $image):
        ?>
        <tr>
            <td colspan="3" class="mid">
                <img src="../13th_topic_Upload_Download/data/<?php echo $image['unique_id']?>"/>
            </td>
        </tr>
        <tr>
            <td class="mid">
                <form action="./downloaded.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $image['unique_id']?>">
                    <input type="submit" value="Download">
                </form>
            </td>
            <td> </td>
            <td class="mid">
                <form action="./deleted.php" method="POST">
                    <input type="hidden" name="idDelete" value="<?php echo $image['unique_id']?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <tr>
            <td><strong>File name: </strong><?php echo $image['name']?></td>
            <td><strong>File size: </strong><?php echo $image['size']?></td>
            <td><strong>Upload date: </strong><?php echo $image['time']?></td>
        </tr>
            <?php
                    endforeach;
                endforeach;
            ?>
    </table>

</body>
</html>