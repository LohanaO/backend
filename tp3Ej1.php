<?php
/*$nota=readline('Ingrese una nota: ');
$suma=0;
$cont=0;*/

/*WHILE*/

/*while($nota>0){
  $suma+=$nota;
  $cont++;
  $nota=readline('Ingrese una nota ');
}
$prom= ($cont)?$suma/$cont: "Error";
echo "Su promedio es: $prom";*/

/* DO WHILE*/

$nota=readline('Ingrese una nota: ');
$suma=0;
$cont=0;
if($nota>0){
do{
  $suma+=$nota;
  $cont++;
  $nota=readline('Ingrese una nota ');
}while($nota>0);
}
$prom= ($cont)?$suma/$cont: "Error";
echo "Su promedio es: $prom";




