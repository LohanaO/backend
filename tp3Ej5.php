<?php
/* Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente
hasta 2. */

/*----------while--------*/
$N=readline("Ingrese un número Par: ");
if($N%2==0){
while ($N>=2) {
    echo"$N". PHP_EOL;
    $N-=2;
}
}echo "Debe ingresar un numero par";

/*-------for--------*/

if($N%2==0){
$N=readline("Ingrese un número Par: ");
for($N>=2; $N-=2;) {echo "$N".PHP_EOL;

}
}
echo "Debe ingresar un numero par";