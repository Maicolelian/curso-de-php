<?php

class TiendaRopa {
    private $precioOriginal;
    private $descuento;
    public function
construct($precioOriginal, $descuento) {
    $this->precioOriginal = $precioOriginal;
    $this->descuento = $descuento;
} 

public function
calcularPrecioConDescuento() {
    $descuentoAplicado = $this->precioOriginal * ($this->descuento / 100);
    $precioConDescuento = $this->precioOriginal - $precioAplicado;
    return $precioConDescuento;
    }
} 

?>