<?php include '../../includes/header.php' ?> 

    <h1>Inserir Livros</h1>
    
    <form action="../../databases/livros.php?action=insert" method="post">
        
        <label for="titulo">Titulo</label> <br>
        <input type="text" name="titulo">
        <br> <br>

        <label for="subtitulo">Subtitulo</label> <br>
        <input type="text" name="subtitulo">
        <br> <br>
        
        <label for="autor">Autor</label> <br>
        <input type="text" name="autor">
        <br> <br>
        
        <label for="data_lancamento">Data de Lançamento</label> <br>
        <input type="date" name="data_lancamento">
        <br> <br>
        
        <label for="resumo">Resumo</label><br>
        <textarea name="resumo" cols="30" rows="10"></textarea>
        <br> <br>
        
        <label for="dispobnivel">Disponível</label> <br>
        <select name="disponivel" >
            <option value="sim" selected>Sim</option>
            <option value="não" >Não</option>
        </select>
        <br> <br> <br>
        
        <button type="submit">Guardar</button>
    </form>

<?php include  '../../includes/footer.php'?> 