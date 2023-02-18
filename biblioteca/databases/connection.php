<?php

$conectar = mysqli_connect('127.0.0.1', 'root', '', 'biblioteca', 3306);

if (!$conectar)
    die('Erro ao conectar a base de dados: ' . mysqli_error($conectar));
