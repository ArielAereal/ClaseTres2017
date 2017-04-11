<?php

include_once "Producto.php";
include "Container.php";
$product = new Producto(135,"Helado",70);

var_dump($product);

echo $product->ToString();

//funciones 

$archivo = fopen("producto.txt","w+");

// humble manejador de archivo

fwrite($archivo,$product->ToString());

fclose($archivo);

$elcontainer = new Container(10);
 var_dump($elcontainer);


echo "<br> <br>";
for($i=0;$i<10;$i++)
{
    $elcontainer->AgregarProducto($product);


}

var_dump($elcontainer);

$elcontainer->guardarproducto();
?>