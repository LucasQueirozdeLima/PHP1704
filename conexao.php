<?php

$dsn = "mysql:host=localhost;dbname=exemplo";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM login");
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $linha['usuario'] . " - " . $linha['senha'] . "<br>";
}

/*$stmt = $pdo->prepare("INSERT INTO login (id, usuario, senha) VALUES (:id, :usuario, :senha)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);
$stmt->execute();*/