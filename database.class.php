<?php

$conn = new PDO("mysql:dbname=db_palermo_castelo;host=localhost", "root", "root");


/*
Transação
$conn->beginTransaction();
$conn->rollback();
$conn->commit();
*/

$stmt = $conn->prepare("INSERT INTO TB_USUARIOS (LOGIN, SENHA) VALUES (:LOGIN, :PASSWORD)");

$login = "adalberto";
$senha = "20508070";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);

$stmt->execute();

?>