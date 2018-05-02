<?php

require_once ("persona.php");
require_once ("cliente.php");
require_once ("pedido.php");


$a = new Persona("Martin",25,103);
$b = new Persona ("Julio", 31,27);
$c = new Persona ("Pepe", 40,13);



$vector = array ($a,$b,$c);
$gaso1 = new Gasolinera ("Alburquerque", "GALP");

$c1 = new Cliente ("Juan", "01234567A");



$empleado1 = new Empleado ("Alonso", "24878954V");
$gaso1->altaEmpleado ($empleado1);
$e2 = new Empleado ("Manuel", "154897532R");
$gaso1->altaEmpleado ($e2);


$gaso1->bajaEmpleado ("Manuel");




$p1 = new Pedido (1.40 , "95");
$p2 = new Pedido (1.40 , "95");

$pedido->anadirPedido ($p1);
$pedido->anadirPedido ($p2);


$pedido->mostrar ();







//Imprimir lo que esta ocurriendo
echo "<pre>";
print_r ($pedido);
echo "</pre>";