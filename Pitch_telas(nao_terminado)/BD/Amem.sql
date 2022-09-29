create database plano_y;
use plano_y;

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
crp_img varchar(1000) not null, 
diploma_img varchar(1000) not null,
identidade_img varchar(1000) not null,
pessoa_id int unsigned not null,
foreign key (pessoa_id) references pessoa(id)
)engine = InnoDB;