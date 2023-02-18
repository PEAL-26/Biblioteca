/* fazer emprestimo */
insert into emprestimos (livro_id,gerente_id,visitante_id,data_emprestimo)
values
(3, 1, 1, now());

/* fazer devolucao */
update emprestimos 
set 
estado='devolvido', 
data_devolucao= now()
where id = 1;