create database camillyfoidebase;
use camillyfoidebase;

create table cliente(
id int unsigned auto_increment primary key,
apelido varchar(80),
senha int,
nome varchar(80),
pronome char(9)
);
create table medico(
id int unsigned auto_increment primary key,
apelido varchar(80),
senha int,
crp char(8),
datformacao date,
localformacao varchar(100)
);
select * from cliente;
alter table cliente add column email varchar(100) default null; 
insert into cliente values(null,'juca','123','juca','ele/dele','juca@gmail.com')
