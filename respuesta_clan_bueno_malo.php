<?php
$num = readline("N: ");
$num_terminos =  0;
$i = 1;
while ($i <= $num+1) {

    for ($var = 1; $var<=3 and $num_terminos <= $num ; $var++){
        if ($var == 1) {
            echo $i;
            $num_terminos+=1;
        } elseif ($var == 2) {
            echo $i+2;
            $num_terminos+=1;
        } else {
            echo $i+1;
            $num_terminos+=1;
        }
        echo ' ' ;
    }
    $i = $i + 3;
}
?>