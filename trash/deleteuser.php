<?php
if (!isset($_GET["id"])) {
exit("No hay id");
}
$pgsql = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $pgsql->prepare("DELETE FROM productos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: addingaccounts.php");