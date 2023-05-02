<?php
    include("conecta.php");

    $matricula = $_GET["M"];

    $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula=$matricula");

    $resultado = $comando->execute();

    //Para voltar no forms
    header("Location: forms.html");
?>