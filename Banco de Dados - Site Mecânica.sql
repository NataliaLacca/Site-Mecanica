drop database if exists oficina;
create database oficina;
use oficina;

create table endereco(
	cep char(9) primary key,
	rua varchar(60) not null,
	bairro varchar(40) not null,
	cidade varchar(40) not null,
	uf char(2) not null);

create table cliente(
	cpf char(12) primary key,
	nome varchar(60) not null,
	telefone varchar(15) not null,
	cep char(9) not null,
	numerocasa integer not null,
	complemento varchar(30),
	foreign key(cep) references endereco(cep));

create table funcionario(
	matricula integer primary key auto_increment,
	nome varchar(60) not null,
	telefone varchar(15) not null,
	cpf char(12) not null,
	qualificacao varchar(20) not null,
	experiencia varchar(20) not null,
	cep char(9) not null,
	numerocasa integer not null,
	complemento varchar(30),
	usuario varchar(30) not null,
	senha varchar(15) not null,
	foreign key(cep) references endereco(cep));
	
create table veiculo(
	placa char(8) primary key,
	marca varchar(20) not null,
	modelo varchar(20) not null,
	cor varchar(20) not null,
	ano char(4) not null,
	cpf char(12) not null,
	foreign key(cpf) references cliente(cpf));
	
create table servico(
	ordemservico integer primary key auto_increment,
	defeito varchar(100) not null,
	dataentrada date not null,
	datasaida date not null,
	preco double not null,
	garantia varchar(50) not null,
	pagamento varchar(20) not null,
	placa char(8) not null,
	foreign key(placa) references veiculo(placa));

create table peca(
	codigopeca integer primary key auto_increment,
	preco double not null,
	nome varchar(60) not null,
	marca varchar(40) not null,
	estoque integer not null,
	modeloano varchar(250) not null);

create table servicopeca(
	idservicopeca integer primary key auto_increment,
	codigopeca integer not null,
	estoque integer not null,
	ordemservico integer not null,
	foreign key(codigopeca) references peca(codigopeca),
	foreign key(ordemservico) references servico(ordemservico));

create table servicofunc(
	idservicofunc integer primary key auto_increment,
	ordemservico integer not null,
	matricula integer not null,
	descricao varchar(100) not null,
	foreign key(ordemservico) references servico(ordemservico),
	foreign key(matricula) references funcionario(matricula));

insert into endereco(cep,rua,bairro,cidade,uf) values
('23082-610','Rua Padre Pauwels','Campo Grande','Rio de Janeiro','RJ'),
('26551-090','Travessa Elpidio','Cruzeiro do Sul','Mesquita','RJ'),
('23080-200','Rua Godofredo','Realengo','Rio de Janeiro','RJ'),
('25400-017','Rua Bela Aurora','Campo Grande','Rio de Janeiro','RJ');

insert into cliente(cpf,nome,telefone,cep,numerocasa,complemento) values
('123456789-10','Jariele','(21)99886-4587','23082-610',100,'apartamento 10'),
('234567891-01','Raphaela','(21)99785-3418','23080-200',222,'casa');

insert into funcionario(nome,telefone,cpf,qualificacao,experiencia,cep,numerocasa,complemento,usuario,senha) values 
('Marcelo','(21)99457-1239','123456789-10','eletricista','4 anos','26551-090',122,'casa','Marcelo','martelinho'),
('Alexandre','(21)99178-6512','345678912-02','mec??nico','2 anos','25400-017',133,'casa','Alex','madagascar');

insert into veiculo(placa,marca,modelo,cor,ano,cpf) values
('ONX89823','Chevrolet','Onix Plus','Preto','2023','123456789-10'),
('CRZ35721','Chevrolet','Cruze','Preto Ouro','2023','234567891-01');

insert into servico(defeito,dataentrada,datasaida,preco,garantia,pagamento,placa) values
('pneus furados','2022-12-12','2022-12-13',700,'2 anos','cr??dito','ONX89823'),
('airbag','2022-12-13','2022-12-14',350,'3 anos','d??bito','CRZ35721');

insert into peca(preco,nome,marca,estoque,modeloano) values
(700,'pneu','Michelin',500,'Primacy 4 225/50R17'),
(350,'airbag','Cobalt',150,'Cobalt 2019');

insert into servicopeca(codigopeca,estoque,ordemservico) values
(1,500,1),(2,150,2);

insert into servicofunc(ordemservico,matricula,descricao) values
(1,1,'trocar pneus'),
(2,2,'trocar airbag');

1) Pesquisar os dados de todos os clientes.
select * from cliente;

2) Pesquisar nome e telefone de todos os clientes.
select nome,telefone from cliente;

3) Pesquisar placa,marca e modelo de todos os ve??culos da cor preta.
select placa,marca,modelo from veiculo where cor = 'preto';

4) Pesquisar placa,marca e modelo de todos os ve??culos que tenham 
qualquer varia????o da cor preta.
select placa,marca,modelo from veiculo where cor like '%preto%';

5) Editar os dados dos clientes de cpf '123456789-10' e '234567891-01' 
para acrescentar o sobrenome.
update cliente set nome = 'Maria Jariele de Brito' where cpf = '123456789-10';
update cliente set nome = 'Raphaela dos Santos' where cpf = '234567891-01';

6) Pesquisar nome e telefone de todos os clientes que o nome comece com M.
select nome,telefone from cliente where nome like 'm%';

7) Pesquisar nome e telefone de todos os clientes que o ??ltimo sobrenome seja Santos.
select nome,telefone from cliente where nome like '%Santos';

8) Pesquisar ordem de servi??o, placa e defeito apresentados pelos carros que 
deram entrada na oficina entre os dias 11/12/2022 e 15/12/2022.
select ordemservico,placa,defeito from servico 
where dataentrada >= '2022-12-11' and dataentrada <= '2022-12-15';
OU
select ordemservico,placa,defeito from servico 
where dataentrada BETWEEN '2022-12-11' and '2022-12-15';

9) Pesquisar ordem de servico, placa, defeito que deram entrada na oficina 
nos dias 05 e 07 de dezembro.
select ordemservico,placa,defeito from servico 
where dataentrada in('2022-12-05','2022-12-07');

10) Mostrar a soma da quantidade das pe??as da oficina.
select sum(estoque) from peca;

11) Mostrar o valor total em mercadorias no estoque.
select sum(estoque*preco) from peca;
ou 
select sum(estoque*preco) as 'Valor total do estoque' from peca;

12) Calcular o valor m??dio das pe??as no estoque.
select avg(preco) from peca;
ou 
select avg(preco) as 'M??dia de pre??os' from peca;

13) Mostrar a pe??a com menor pre??o do estoque.
select min(preco) from peca;
ou 
select min(preco) as 'Menor pre??o' from peca;

14) Mostrar a pe??a com maior pre??o do estoque.
select max(preco) from peca;
ou 
select max(preco) as 'Maior pre??o' from peca;

15) Mostrar nome, telefone e qualifica????o de todos os funcion??rios.
select nome,telefone,qualificacao from funcionario;
select nome,telefone,qualificacao from funcionario;
	
16) Mostrar nome e telefone de todos os eletricistas.
select nome,telefone from funcionario where qualificacao = 'eletricista';
	
17) Mostrar nome e pre??o de todos os produtos da marca cobalt.
select nome,preco from peca where marca = 'cobalt';
	
18) Mostrar ordem de servico e pre??o pago de todos os servi??os 
que foram pagos a vista no dia 01/12/2022.
select ordemservico,preco from servico 
where formapagamento = 'a vista' and dataentrada = '2022-12-01';
	 
19) Pesquisar nome,telefone,nome da rua, n??mero da casa, bairro e cidade 
de todos os clientes da oficina.
select cliente.nome,cliente.telefone,endereco.rua,cliente.numerocasa,
endereco.bairro,endereco.cidade from endereco inner join cliente 
on endereco.cep = cliente.cep;
	
20) Pesquisar nome,telefone, placa e modelo do carro de todos os clientes.
select cliente.nome,cliente.telefone,veiculo.placa,veiculo.modelo 
from cliente inner join veiculo on cliente.cpf = veiculo.cpf;

21) Pesquisar nome e estoque de todas as pe??as usadas na ordem de servi??o 1.
select peca.nome,servicopeca.estoque from peca inner join servicopeca
on peca.codigopeca = servicopeca.codigopeca and servicopeca.ordemservico = 1;

22) Pesquisar nome do cliente, telefone, placa do ve??culo, ordem de servi??o e defeito
de todos os servi??os que j?? foram feitos na oficina.
select cliente.nome,cliente.telefone,veiculo.placa,servico.ordemservico,servico.defeito
from cliente inner join veiculo on cliente.cpf = veiculo.cpf
inner join servico on veiculo.placa = servico.placa;