create database biblioteca;
use biblioteca;

Create table livros(
	id int not null auto_increment,
    titulo varchar(100) not null,
    subtitulo varchar(100),
    autor varchar(255) not null,
    data_lancamento date,
    resumo text,
    disponivel enum('sim','não') default 'sim',
    capa varchar(255),
    primary key(id)
);

create table visitantes(
	id int not null auto_increment,
    nome varchar(100)not null,
    telefone varchar(12),
    primary key(id)
);

create table gerentes(
	id int not null auto_increment,
	nome varchar (100),
	telefone varchar(12),
    endereco varchar(255),
    numero_bi char(14),
    palavra_passe varchar(255),
    primary key(id),
    unique index gerente_telefone_index(telefone),
	unique index gerente_numero_bi_index(numero_bi)
);

Create table emprestimos(
	id int not null auto_increment,
	livro_id int not null,
	gerente_id int not null,
	visitante_id int not null,
	data_emprestimo datetime not null,
	estado enum('devolvido','não devolvido') default 'não devolvido',
    data_devolucao datetime null,
    primary key(id),
    foreign key(livro_id) references livros(id),
    foreign key(gerente_id) references gerentes(id),
    foreign key(visitante_id) references visitantes(id)
);
