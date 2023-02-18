/* listar todos livros */
select * from livros;

/* listar todos visitantes */
select * from visitantes;

/* listar todos gerentes */
select id,nome,telefone,numero_bi from gerentes;

/* listar todos emprestimos */
select e.*, l.titulo, g.nome gerente_nome, v.nome visitante_nome from emprestimos e
inner join livros l on l.id = e.livro_id
inner join gerentes g on g.id = e.gerente_id
inner join visitantes v on v.id = e.visitante_id
;

/* listar todos emprestimos nao devolvidos */
select e.*, l.titulo, g.nome gerente_nome, v.nome visitante_nome from emprestimos e
inner join livros l on l.id = e.livro_id
inner join gerentes g on g.id = e.gerente_id
inner join visitantes v on v.id = e.visitante_id
where e.estado = 'não devolvido';

/* listar todos emprestimos devolvidos */
select e.*, l.titulo, g.nome gerente_nome, v.nome visitante_nome from emprestimos e
inner join livros l on l.id = e.livro_id
inner join gerentes g on g.id = e.gerente_id
inner join visitantes v on v.id = e.visitante_id
where e.estado = 'devolvido';