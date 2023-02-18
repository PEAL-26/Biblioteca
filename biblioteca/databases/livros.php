<?php

include 'connection.php';

function listarLivros()
{
    global $conectar;

    $sql = "select * from livros;";
    $registros = mysqli_query($conectar, $sql);

    return $registros ? $registros : [];
}
function buscarLivrosPorId($id)
{
    global $conectar;

    $sql = "select * from livros where id=$id;";
    $registros = mysqli_query($conectar, $sql);
    $result = mysqli_fetch_assoc($registros);

    return $result ? $result : null;
}

$action = $_GET['action'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$subtitulo = $_POST['subtitulo'] ?? '';
$autor = $_POST['autor'] ?? '';
$data_lancamento = $_POST['data_lancamento'] ?? '';
$resumo = $_POST['resumo'] ?? '';
$disponivel = $_POST['disponivel'] ?? '';

if ($action === 'insert') {
    $sql = "insert into livros(titulo, subtitulo, autor, data_lancamento, resumo, disponivel) 
            values 
            ('$titulo', '$subtitulo', ' $autor', ' $data_lancamento', '$resumo', '$disponivel');";

    $resultado = mysqli_query($conectar, $sql);

    if ($resultado) {
        header("Location: /biblioteca/pages/livros/list-livros.php");
    }
    else {
        echo "<h1>Erro ao fazer o cadastro! <a href='javascript:history.go(-1)'>Voltar</a></h1>";
    }

}

if ($action === 'update') {
    $id = $_POST['id'];

    $sql = "update livros set
            titulo ='$titulo',
            subtitulo='$subtitulo',
            autor='$autor', 
            data_lancamento='$data_lancamento',
            resumo='$resumo', 
            disponivel='$disponivel'
            where id=$id";

    $resultado = mysqli_query($conectar, $sql);

    if ($resultado) {
        header("Location: /biblioteca/pages/livros/list-livros.php");
    }
    else {
        echo "<h1>Erro ao fazer o cadastro! <a href='javascript:history.go(-1)'>Voltar</a></h1>";
    }

}

if ($action === 'delete') {
    $id = $_GET['id'];

    $livro = buscarLivrosPorId($id);

    if (!$livro)
        die('Livro nao existe');


    $sql = "delete from livros where id=$id;";
    $registro = mysqli_query($conectar, $sql);

    if ($registro)
        header("Location: /biblioteca/pages/livros/list-livros.php");

    die('Erro ao remover');

}
