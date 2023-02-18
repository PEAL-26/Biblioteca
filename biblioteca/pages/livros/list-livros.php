<?php include '../../includes/header.php' ?> 
<?php include '../../databases/livros.php' ?> 

    <h1>Livros</h1>
    
    <a href="./insert-livro.php">Inserir Livro</a>
    
    <table border>
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>Autor</th>
            <th>Data de lançamento</th>
            <th>disponivel</th>
            <th>acção</th>
        </thead>

        <tbody>
            <?php $livros = listarLivros(); ?> 
            <?php foreach ($livros as $livro): ?> 
                <tr>
                    <td><?= $livro['id']; ?></td>
                    <td><?= $livro['titulo']; ?></td>
                    <td><?= $livro['subtitulo']; ?></td>
                    <td><?= $livro['autor']; ?></td>
                    <td><?= $livro['data_lancamento']; ?></td>
                    <td><?= $livro['disponivel']; ?></td>
                    <td>
                        <a href="./update-livro.php?id=<?= $livro['id']; ?>">Alterar</a> |
                        <a href="javascript: confirm('Deseja remover esse livro?') ?  window.location.href = '../../databases/livros.php?action=delete&id=<?= $livro['id']; ?>' : window.location.reload() ">Remover</a>
                    </td>
                </tr>   
            <?php endforeach; ?> 
        </tbody>
        
    </table>


<?php include  '../../includes/footer.php'?> 