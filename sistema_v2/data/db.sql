create database app_david;

use app_david;
show tables;
create table usuario (
	codigo int auto_increment not null,
	nome varchar(120) not null,
	login varchar(255) not null,
	senha varchar(255) not null,
	status varchar(1) default 'S',
	
	primary key(codigo)
);

create table produto (
	codigo int auto_increment not null,
	desc_produto varchar(255) not null,
	marca varchar(80) not null,
	valor decimal(10,2) not null,
	status varchar(1) default 'S',
	
	primary key(codigo)
);

insert into usuario (nome, login, senha) values ('Administrador', 'admin', SHA1('12345678'));

insert into produto (desc_produto,marca,valor) values ('Ferrari SF90', 'Ferrari', 4690000.00);
