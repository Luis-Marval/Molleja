<?php   

//  $fiboc=$_POST[``]
    $cuatro=0;$anterior=1;$aux=0;
    while($aux<101){ 
        $aux=$cuatro+$anterior; echo $aux."&ensp;";$anterior=$cuatro;$cuatro=$aux;
    }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="molleja.php" method="post">
        <input type="text">
        <button>Enviar</button>
    </form>
</body>
</html> -->