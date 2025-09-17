create database GsPass /* criação do banco de dados */
default character set utf8 default collate utf8_general_ci; /* definição de caracteres acentuados */

use gspass;

create table if not exists cadastro_usuario ( /* criação da tabela cadastro_usuario se não existir */ 
nome_completo varchar(50),  /* criação do registro "nome_completo do tipo variável em até 50 caracteres */
data_de_nascimento date, /* criação do registro "data_de_nascimento" do tipo date */
telefone int unsigned, /* criação do registro "telefone" do tipo inteiro e sem sinal */
email varchar(50) not null unique, /* criação do registro "email" do tipo variável em até 50 caracteres, não nulo e único */ 
senha varchar(50) not null, /* criação do registro senha do tipo variável em até 50 caracteres e não nulo */
primary key (email) /* criação da chave primária */
)default charset utf8;

create table if not exists minhas_senhas ( /* criação da tabela minhas_senhas se não existir */ 
id_senha int not null auto_increment, /* crição do registro "id_senhas" do tipo inteiro, não nulo e auto incrementado */
senha varchar(50) not null, /* criação do registro "senhas_salvas" do tipo variável em até 50 caracteres e não nulo */
aplicacao varchar(50) not null, /* criação do registro "aplicação" do tipo variável em até 50 caracteres e não nulo */ 
data_salva date not null, /* criação do registro "data_salva" do tipo data exata e auto incrementada */ 
primary key (id_senha) /* criação da chave primária */
)default charset = utf8;

alter table minhas_senhas add email varchar(50); /* alteração da tabela "minhas_senhas" adicionando o registro "email" igual está na tabela "minhas_senhas para ser chave estrangeira */
alter table minhas_senhas add foreign key (email) references cadastro_usuario (email) on delete cascade; /* alteração da tabela "minhas_senhas" adicionando a chave estrangeira e a certificação de se o usuário for excluído as senhas relacionadas também serão */

/* insert into cadastro_usuario  values('evelyn fonseca araujo','2005/09/10','996570721','128evelynaraujo@gmail.com','evelyn123'),
									('joao silva','2004/03/24','1122334455','joao@gmail.com','joao123');

INSERT INTO minhas_senhas (senha, aplicacao, data_salva,email) 
VALUES ('dsvbyitys', 'Facebook', '2024/09/12','128evelynaraujo@gmail.com'),
		('52634754833624', 'suap', '2018/10/12','joao@gmail.com'),
        ('2346421qvb256', 'mine', '2015/05/15','128evelynaraujo@gmail.com'),
        ('b68766&¨5¨Z%86*%*&', 'google', '2024/09/01','joao@gmail.com');	

select senha,aplicacao,data_salva from minhas_senhas where email = '128evelynaraujo@gmail.com';

select senha,aplicacao,data_salva from minhas_senhas where email = 'joao@gmail.com'; */
