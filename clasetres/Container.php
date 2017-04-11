<?php

include_once "Producto.php";

/**
 * 
 */
class Container
{
   public $_numero;
    public $_producto;
    
    public function __construct($numerouno)
    {
        $this->_numero = $numerouno;

        $this->_producto = array();
    }

    public function AgregarProducto($elproducto)
    {
        // ver ejercicios de array, 
         array_push($this->_producto, $elproducto);



    }

    public function GuardarProducto()
    {
        // humble manejador de archivo

        $archivo = fopen("listado_de_productos.txt","w+");


for($i=0;$i<count($this->_producto);$i++)
{

// bajar una linea en php
// ver /r
fwrite($archivo,$this->_producto[$i]->ToString());

}
fclose($archivo);




/*foreach ($this->_producto as $value) {
    
    fwrite($archivo,$value->ToString());
    fclose($archivo);
}*/


}

}
?>