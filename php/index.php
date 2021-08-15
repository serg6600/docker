<?php 
    $servername = 'localhost:8889';
    $usernsme = 'root';
    $password = 'root';
    $database = 'test';
    
    $connection = mysqli_connect($servername, $usernsme, $password, $database);

    if ($connection == false){
        echo 'Error connection';
    }

    $result = mysqli_query($connection,"SELECT * FROM `books`");
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>PHP test</title>
    </head>
    <body>
        <pre style="font-size: 2em"><strong><?php 
            while($table = mysqli_fetch_assoc($result)){    
                echo $table['title'] ."\t". $table['author']."\t". $table['amount'];
                echo '<br>';
            }
        ?></strong></pre>
    </body>
</html>