<?php 
declare (strict_types=1); // siempre debe existir esto en los pryectos
require_once 'conexion.php';
require_once 'Nodo.php';
require_once 'ListaDoblementeEnlazada.php';

$db = new Database();
$pdo = $db->getPdo();
$stmt = $pdo->query('SELECT id_producto, nombre, precio, stock FROM producto ORDER BY precio DESC'); // proyeccion porque estamos pidiendo que ver o que mostrar de la tabla
$producto = $stmt->fetchAll();
$lista = new ListaDoblementeEnlazada(); //inicializar tengo que llamar a su constructor con el new
foreach($producto as $p){
    $nodo = new Nodo(
       (int) $p ['id_producto'], //casteo es poner el (int) 
        $p ['nombre'],
        (float) $p ['precio'],
        (int) $p ['stock'],
        );
    $lista->agregarAlFinal($nodo);// me permite agregar 1 a 1 los registros esta iteracion
}
echo "se insertaron los registros".implode(', ', $lista->obtenerId());
?>