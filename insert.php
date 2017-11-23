<?php

if ($_POST) {
  include 'config/connection.php';

  try {

    $query = "INSERT INTO users SET email=:email";

    $stmt = $pdo->prepare($query);

    $email=htmlspecialchars(strip_tags($_POST['email']));

    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
      echo "Inserido com sucesso";
    } else {
      echo "Erro ao inserir";
    }

  } catch (PDOException $exception) {
    die('ERROR: ' . $exception->getMessage());
  }

}

 ?>
