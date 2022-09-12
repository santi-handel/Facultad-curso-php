<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $valor=rand(1,3);
    if($valor == 1){
        echo "el valor es uno";
    }
    elseif($valor==2){
        echo "el valor es dos";
    }
    else{
        echo "el valor es tres";
    }
?>
</body>
</html>