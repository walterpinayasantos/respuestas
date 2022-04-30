/*LA IDEA ES LA SIGUIENTE:
empiezo con el numero 1, el el for si var es 1 imprimo 1, si var es 2 imprimo 1+2, y si var es 3 imprimo 1+1.
en esta iteracion empiezo coon el 4, var es 1 imprimo 4, si var es 2 imprimo 4+2, y si var es 3 imprimo 4+1.
en esta iteracion empiezo coon el 7, var es 1 imprimo 7, si var es 2 imprimo 7+2, y si var es 3 imprimo 7+1.
Y asi puedo serguir, siempre controlando que el numero de terminos impresos sea menor o igual al numero ingresado por teclado.
*/
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
