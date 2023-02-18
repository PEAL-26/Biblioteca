<?php 
    include '../../includes/header.php';
    include '../../databases/livros.php'; 
?> 

<?php 
    $id = $_GET['id'] ?? '';

    if(!$id) die("Id nao informado");

    $livro = buscarLivrosPorId($id);

    if(!$livro) die("Nenhum livro foi encontrado.");
?> 

    <h1>Alterar Livros</h1>
    
    <form action="../../databases/livros.php?action=update" method="post">
        <input type="text" name="id" hidden value="<?= $livro['id']; ?>">
        
        <label for="titulo">Titulo</label> <br>
        <input type="text" name="titulo" value="<?= $livro['titulo']; ?>">
        <br> <br>

        <label for="subtitulo">Subtitulo</label> <br>
        <input type="text" name="subtitulo" value="<?= $livro['subtitulo']; ?>">
        <br> <br>
        
        <label for="autor">Autor</label> <br>
        <input type="text" name="autor"  value="<?= $livro['autor']; ?>">
        <br> <br>
        
        <label for="data_lancamento">Data de Lançamento</label> <br>
        <input type="date" name="data_lancamento"  value="<?= $livro['data_lancamento']; ?>">
        <br> <br>
        
        <label for="resumo">Resumo</label><br>
        <textarea name="resumo" cols="30" rows="10"><?= $livro['resumo']; ?></textarea>
        <br> <br>
        
        <label for="dispobnivel">Disponível</label> <br>
        <select name="disponivel" >
            <option value="sim" <?= $livro['disponivel'] === 'sim' ? 'selected' : ''; ?>>Sim</option>
            <option value="não" <?= $livro['disponivel'] === 'não' ? 'selected' : ''; ?> >Não</option>
        </select>
        <br> <br> <br>
        
        <button type="submit">Guardar</button>
    </form>

<?php include  '../../includes/footer.php'?> 