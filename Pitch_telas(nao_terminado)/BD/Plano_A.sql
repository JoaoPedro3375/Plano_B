create database plano_a;
use plano_a;

create table autenticacao_usuario(
id int unsigned auto_increment not null primary key,
usuario varchar(100) not null,
senha varchar(100) not null,
dt_cadastro datetime not null
) engine = innodb;

create table pronomes(
id int unsigned auto_increment not null primary key,
pronome varchar(10) not null
)engine = InnoDB;
-- botar junto:
insert into pronomes values(1,'ele/dele');
insert into pronomes values(2,'ela/dela');
insert into pronomes values(3,'elu/delu');
insert into pronomes values(4,'analisar');

show tables;
desc pessoa;

create table pessoa(
id int unsigned auto_increment not null primary key,
nome_completo varchar(100) not null,
pronomes_id int unsigned not null,
apelido varchar(20) not null,
email varchar(256) not null,
usuario_id int unsigned not null,
foreign key (pronomes_id) references pronomes(id),
foreign key (usuario_id) references autenticacao_usuario(id)
)engine = InnoDB;

create table psicologo(
id int unsigned auto_increment not null primary key,
crp varchar(10) not null,
curso varchar(100) not null,
dt_formacao date not null,
local_formacao varchar(500) not null,
crp_img longblob not null, 
diploma_img longblob not null,
identidade_img longblob not null,
pessoa_id int unsigned not null,
foreign key (pessoa_id) references pessoa(id)
)engine = InnoDB;


select * from autenticacao_usuario;
select * from pessoa;
select * from psicologo;


insert into  pessoa (id,nome_completo,pronomes_id,apelido,email,usuario_id) 
			values(null,   'juca'         ,4,      'juca','juca@gmail.com', 1);
            
insert into autenticacao_usuario values(1,'juca','123','2022/09/09');

update pessoa set nome_completo = 'JoazitosGameplay'  where id in (1);
update pessoa set pronomes_id = 2 where id in (1);
insert into pessoa (id,nome_completo,pronomes_id,apelido,email,usuario_id) 
                values(null,'{$this->nome}','{$this->pronome}','{$this->apelido}','{$this->email}',1);
                
                insert into pessoa (id,nome_completo,pronomes_id,apelido,email,usuario_id) 
                values(null,'',1,'gordiho','email@email.com',1)