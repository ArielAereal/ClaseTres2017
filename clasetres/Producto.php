<?php

    /**
     * 
     */
    class Producto
    {
        public $_codigo;
        public $_descripcion;
        public $_importe;
        
       public function __construct($unCodigo,$unProducto,$unImporte)
        {
          $this->_codigo = $unCodigo;  
          $this->_descripcion = $unProducto; // descr
          $this->_importe = $unImporte;
        }

        public function ToString()
        {
            return explode( "-" , $this->_codigo) . explode("-" ,$this->_descripcion) . explode("-" , $this->_importe);
        }
    }
    

?>