<?php
    function Var_CiCli($Time,$I,$Desire,){
        $Venta=0;$XAnon=$Desire/$Time;
        foreach($I as $valor){
            $Venta+=$valor;
        }
        $Xg=$Venta/$Time;
        echo '<br><strong><span>X&#772;g = </span></strong>'.$Xg.'<br/><br/>';
        foreach($I as $iteracion => $valor){
            $I[$iteracion]=$valor/$Xg;
            echo '<strong><span>I'.($iteracion+1).'= </span></strong>'.$I[$iteracion].'<br/>';
        }echo '<br>';
        for($i=0;$i<count($I);$i++){
            $Xt[$i]=$I[$i]*$XAnon;
            echo '<strong><span>Xi'.($i+1).'= </span></strong>'.$Xt[$i].'<br/>';
        }
    }
    if($_POST){
        $Time=$_POST["Time"];$Desire=$_POST["Desire"];$I=[];
        for($i=0;$i<$Time;$i++){
            $I[$i]=$_POST['Num'.$i];
        }
    Var_CiCli($Time,$I,$Desire);
    }
?>