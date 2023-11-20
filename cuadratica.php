<?php
    $X=[0,1,4];
    function F($X){
        return 2*sin($X)-(pow($X,2)/10);
    }
    function X3($X){
        return (((F($X[0]))*(pow($X[1],2)-pow($X[2],2)))+((F($X[1]))*(pow($X[2],2)-pow($X[0],2)))+((F($X[2]))*(pow($X[0],2)-pow($X[1],2))))/((2*((F($X[0]))*($X[1]-$X[2])))+(2*((F($X[1]))*($X[2]-$X[0])))+(2*((F($X[2]))*($X[0]-$X[1]))));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            outline: 2px solid black;
            padding: 5px;
        }td.title{
            background-color:#1ed4ff;
        }td.In{
            background-color:#1ed4d0;
        }
    </style>
</head>
<body>
    <table>
    <tr><td class="In">i</td><td class="title">X0</td><td class="title">FX0</td><td class="title">X1</td><td class="title">FX1</td><td class="title">X2</td><td class="title">FX2</td><td class="title">X3</td><td class="title">FX3</td></tr>
    <?php 
        echo '<tr><td class="In">1</td><td>'.round($X[0],4).'</td><td>'.round(F($X[0]),4).'</td><td>'.round($X[1],4).'</td><td>'.round(F($X[1]),4).'</td><td>'.round($X[2],4).'</td><td>'.round(F($X[2]),4).'</td><td>'.round(X3($X),4).'</td><td>'.round(F(X3($X)),4).'</td></tr>';
        for ($i=1; $i < 5; $i++) { 
            $X3=X3($X);
            if($X3>$X[1]){
                $X[0]=$X[1];
                $X[1]=$X3;
            }
            if($X3<$X[1]){
                $X[2]=$X[1];
                $X[1]=$X3;
            }
            echo '<tr><td class="In">'.($i+1).'</td><td>'.round($X[0],4).'</td><td>'.round(F($X[0]),4).'</td><td>'.round($X[1],4).'</td><td>'.round(F($X[1]),4).'</td><td>'.round($X[2],4).'</td><td>'.round(F($X[2]),4).'</td><td>'.round(X3($X),4).'</td><td>'.round(F(X3($X)),4).'</td></tr>';
        }
        echo '<tr><td class="In" colspan="9"> Asi,el resultado converge al valor verdaredo:'.round(F(X3($X)),4). ' en X= '.round(X3($X),4);
    ?>
    </table>
</body>
</html>