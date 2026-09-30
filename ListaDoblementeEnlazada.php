<?php 
declare (strict_types=1);
class ListaDoblementeEnlazada{
private ?Nodo $cabeza = null;
private ?Nodo $cola = null;
private int $tamanyo = 0;
public function agregarAlFinal (Nodo $nodo){
    if($this ->cabeza === null){ //si es nulo la cabeza y la cola apuntan al mismo nodo para apuntar al nuevo nodo si es que no es nodo
        $this->cabeza = $nodo;
        $this->cola = $nodo;
    }else{
        $this ->cola->siguiente = $nodo;
        $nodo->anterior = $this->cola; // cuando es this estamos en la lista actual y esto es para apuntar el anterior nodo es para apuntar la cola del anterior
        $this->cola = $nodo;
    }
    $this->tamanyo++;
  }
  public function obtenerId(): array{
    $ids = [];
    $actual = $this->cabeza;
    while($actual !== null){ // mientras exista el nodo rescatamos id 
        $ids[] = $actual->id;
        $actual = $actual->siguiente; //actualizamos del actual el siguiente para apuntar un nulo
    }
    return $ids;
  }
}

?>