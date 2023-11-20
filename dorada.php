<?php //decladacion
    //Funcion Principal
    function Funcion($x=0)
        {
            return 2*sin($x)-pow($x,2)/10;
        };
    //Intervalos
    $intervalo=array('Xl'=> 0,'Xu'=> 4);
?>
<!-- Inicia Html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> 
        /* Añado los estilos a las tablas*/
            *{font-size: 1.2em;}
                td{
                outline: 1px solid black;
            }td.title{
                background-color:#1ed4f0;
            }td[colspan="8"]{
                text-align: center;
            }
            table{
                border: 5px solid black;
            }
        </style>
    <title>Seleccion Dorada</title>
</head>
<body>  
    <!-- creo los titulos de las tablas -->
    <table>
        <tr>
            <td class="title">I</td>
            <td class="title">Xl</td>
            <td class="title">Xu</td>
            <td class="title">D</td>
            <td class="title">X1</td>
            <td class="title">FX1</td>
            <td class="title">X2</td>
            <td class="title">Fx2</td>
        </tr>
    <?php $a=1;
    // Inicio los ciclos
    while($a<9){
        echo '<tr><td>'.$a.'</td>';
        $D=((sqrt(5)-1)/2)*($intervalo['Xu']-$intervalo['Xl']);
        $X1=$intervalo["Xl"]+$D;
        $X2=$intervalo["Xu"]-$D;
        $Fx1=Funcion($X1);
        $Fx2=Funcion($X2);
        echo "<td>".round($intervalo["Xl"],4)."</td><td>".round($intervalo["Xu"],4)."</td><td>".round($D,4)."</td><td>".round($X1,4)."</td><td>".round($Fx1,4)."</td><td>".round($X2,4)."</td><td>".round($Fx2,4).'</td></tr>';
        
        if($Fx1>$Fx2){
            $intervalo['Xl']=$X2;
        }else if($Fx1<$Fx2){
            $intervalo['Xu']=$X1;
        }$a++;
    }
    // devuelve el valor final
    if($Fx1>$Fx2){
        echo '<tr><td colspan="8" class="title">Valor verdadero:'.round($Fx1,4).'</td></tr>';
    }else if($Fx1<$Fx2){
        echo '<tr><td colspan="8" class="title">Valor verdadero: '.round($Fx2,4).'</td></tr>';
    }
    ?>
    </table>
</body>
</html>