create database Loja;
use Loja;

create table tbl_produto
(
	codigo smallint auto_increment primary key,
	descricao varchar(70) ,
	preco decimal(10,2),
	quant int
);

INSERT INTO tbl_produto values
(1, 'Sabonete',1.69 , 50),
(2, 'Creme Dental',3.49 , 10),
(3, 'Sabão em pó',14.9 , 5),
(4, 'Escova de Dentes',0.59 , 20);

create table tbl_pedido
(
	codigo_pedido smallint auto_increment primary key,
	produtos varchar(70) ,
	preco_total decimal(10,2)
);

alter table tbl_pedido add column codigo_produto smallint;

alter table tbl_pedido
ADD FOREIGN KEY (codigo_produto) REFERENCES tbl_produto(codigo);