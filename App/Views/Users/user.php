<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:200px; height: 120px; background-color: wheat; display: inline-block">
        <p><?=  $param['name'] ?></p>
        <p><?= $param['family'] ?></p>
    </div>
</body>
</html>
<?php
// echo 'users file';
// var_dump($param);