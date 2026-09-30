<?php 
declare(strict_types=1);
class Nodo{
    public function __construct(
        public readonly int $id_producto,
        public readonly string $nombre,
        public readonly float $precio,
        public readonly int $stock,
        public ?Nodo $siguiente = null, // estos son los punteros
        public ?Nodo $anterior = null,
    ){}
}
?>