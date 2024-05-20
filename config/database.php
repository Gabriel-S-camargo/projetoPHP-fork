<?php

// Criar o BD
// Revisa para saber onde colocar para ser o primeiro codigo sql a ser executado 

$BdCreate = "CREATE DATABASE IF NOT EXISTS LogusDB; USE LogusDB;";
$BdCreation = $pdo->prepare($BdCreate);
$BdCreation->execute();

?>
