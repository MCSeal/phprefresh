<?php require_once 'dynamic.php' ; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>welcome</h1>


</head>




<body>
    <?php
$list = array(5,4,12,3,'5', '<h1>hello!</h1>');
foreach ($list as $value){

    echo "$value <br>";

}

?>
</body>

</html>