<?php
function gradient_conjugate($A, $b, $x0, $tolerance, $max_iterations) {
    $r = subtract($b, multiply($A, $x0));
    $d = $r;
    $x = $x0;
    $r_norm_squared = dot_product($r, $r);
    $tolerance_squared = $tolerance * $tolerance;
    for ($i = 0; $i < $max_iterations; $i++) {
        $Ad = multiply($A, $d);
        $alpha = $r_norm_squared / dot_product($d, $Ad);
        $x = add($x, multiply($d, $alpha));
        $r = subtract($r, multiply($Ad, $alpha));
        $new_r_norm_squared = dot_product($r, $r);
        if ($new_r_norm_squared < $tolerance_squared) {
            break;
        }
        $beta = $new_r_norm_squared / $r_norm_squared;
        $d = add($r, multiply($d, $beta));
        $r_norm_squared = $new_r_norm_squared;
    }
    return $x;
}

function dot_product($u, $v) {
    $result = 0;
    for ($i = 0; $i < count($u); $i++) {
        $result += $u[$i] * $v[$i];
    }
    return $result;
}

function multiply($A, $x) {
    $result = array();
    for ($i = 0; $i < count($A); $i++) {
        $row = $A[$i];
        $sum = 0;
        for ($j = 0; $j < count($row); $j++) {
            $sum += $row[$j] * $x[$j];
        }
        $result[] = $sum;
    }
    return $result;
}

function subtract($u, $v) {
    $result = array();
    for ($i = 0; $i < count($u); $i++) {
        $result[] = $u[$i] - $v[$i];
    }
    return $result;
}

function add($u, $v) {
    $result = array();
    for ($i = 0; $i < count($u); $i++) {
        $result[] = $u[$i] + $v[$i];
    }
    return $result;
}

// Ejemplo de uso
$A = array(array(4, 1), array(1, 3));
$b = array(1, 2);
$x0 = array(0, 0);
$tolerance = 1e-6;
$max_iterations = 1000;
$x = gradient_conjugate($A, $b, $x0, $tolerance, $max_iterations);
echo "La solución es: ";
print_r($x);
?>
