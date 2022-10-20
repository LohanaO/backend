<?php
/*Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres
algoritmos con cada estructura */
/*$suma=0;
$cont=0;
$A=readline('Ingrese el valor de A: ');
$B=readline('Ingrese el valor de B: ');

if($B<$A){
    $temp=$A;
    $A=$B;
    $B=$temp;
}

while ($cont <$B) {
    $suma+=$A;
    $cont++;
}
echo "La suma es: $suma";*/

/*Instrucción For*/



$A=readline('Ingrese el valor de A: ');
$B=readline('Ingrese el valor de B: ');


if($B<$A){
    $temp=$A;
    $A=$B;
    $B=$temp;
}

if($A<0){
    $B*=-1;
    $A*=-1;
}

for($cont=0,$suma=0;($cont <$A);$cont++ ){
    $suma+=$B;
}

echo "La suma es: $suma";

