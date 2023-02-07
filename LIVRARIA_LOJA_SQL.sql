create database Livraria;

use Livraria;

create table  Livros(
codigo int not null primary key auto_increment,
titulo varchar(45) not null,
cost dec(10,2) not null,
unid bigint(255) not null
)engine = InnoDB;

create table reserva(
cod int not null primary key auto_increment,
codigo int not null

)engine = InnoDB;

create table Loja(
codigo int not null primary key auto_increment,
totalCost dec(10,2) not null,
nome varchar(45) not null
)engine = InnoDB;

select * from reserva;

drop table reserva;