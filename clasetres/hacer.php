<?php


/*
Clase container, crear el metodo
leer de archivo

que lea de un archivo un listado de productos
cuyos atributos están separados por ;

luego cargar el array de productos con los objetos creados
a partir de los datos del archivo

2) agregar un cuadro de texto con el nombre del archivo en donde se van a guardar los datos
en ese nombre se guardaran los datos cargados en los demás cuadros de texto. Si el archivo existe, 
primero moveremos el archivo ya existente a la carpeta "backup", cambiándole el nombre al nombre
que tiene más la fecha y hora de hoy. 

3) al leer, si el archivo no existe, informarlo. 

file, exists. Usar el explode, (separo un string en un arrray)




*/

echo "hola mundo<br>";

// tipo var dump ver

// transferencia por get o por post
var_dump($_REQUEST);

echo "<br>";
// get el method por defecto del form action o algo asi
var_dump($_GET);

echo "<br>";

var_dump($_POST);

// quiero devolver algo, se usa ajax (jscript)

// desde php no puedo afectar el form html, 

echo "<br>";




include_once "Producto.php";
//include "Container.php";
// etc.
//$product = new Producto($_POST["codigo"],$_POST["descripción"],$_POST["importe"]);




// isset si el boton es o no
if (isset($_POST["Guardar"]))
{
    $product = new Producto($_POST["codigo"],$_POST["descripción"],$_POST["importe"]);
    $archivo = fopen("producto.txt","w");

// humble manejador de archivo
// ver
fwrite($archivo,$product->ToString());

fclose($archivo);


} else
{
        $archivo = fopen("producto.txt","r");

//$datosarchivados = fread($archivo);

$datosarchivados = fgets($archivo);

echo $datosarchivados;

$miarray = explode("-",$datosarchivados);
        
}
/*
var_dump($product);

echo $product->ToString();

//funciones 

$archivo = fopen("producto.txt","w+");

// humble manejador de archivo

fwrite($archivo,$product->ToString());

fclose($archivo);



/*

$elcontainer = new Container(10);
 var_dump($elcontainer);


echo "<br> <br>";
for($i=0;$i<10;$i++)
{
    $elcontainer->AgregarProducto($product);


}

var_dump($elcontainer);

$elcontainer->guardarproducto();*/

// explode e implode


?>