create database aluguel_carros;
use aluguel_carros;
drop table carros;

create table carros (
	placa varchar(7) primary key,
    modelo varchar(20) not null,
    marca varchar(20) not null,
    ano int(4) not null,
    dt_aluguel date,
    dt_devolucao date,
    imagem varchar(500),
    valor float not null
);

create table dados_aluguel (
	CPF varchar (14) primary key,
    nome varchar(40) not null,
    telefone varchar(17) not null,
    endereco varchar(100) not null
);

insert into dados_aluguel (CPF, nome, telefone, endereco)
values ('333.333.333-33', 'Nelson Mandila', '(69) 9843333-3333', 'R. Projetada, 19 - Prosperidade, Cacoal - RO, 76968-899');
insert into dados_aluguel (CPF, nome, telefone, endereco)
values ('111.111.111-11', 'Guilherme Fornaciari', '(69) 9842311-2344', 'Av. Dois de Junho, 2251 - Centro, Cacoal - RO, 76963-767');

insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
values ('RIO2A18', 'Polo', 'Volkswagen', 2017, '2022/08/13', '2022/09/13', 'https://brasilwagen.com.br/bw/wp-content/uploads/2017/10/azul-biscay2.png', 150);
insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
values ('MTD2B12', 'Opera Peugeot', 'Volkswagen', 2018, '2022/08/5', '2022/10/5', 'https://operapeugeot.com.br/wp-content/uploads/2021/08/20190821062038-vermelhoultimate.png', 230);
insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
values ('CMT6F23', 'Etios Hatch', 'Volkswagen', 2013, '2022/07/13', '2022/09/13', 'https://motorshow.com.br/wp-content/uploads/sites/2/2018/02/chevrolet-prisma-advantage.png', 80);
insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
values ('FTG8G99', 'Camaro', 'Chevrolt', 2013, '2022/07/13', '2022/09/13', 'https://cdn.autopapo.com.br/carro/chevrolet/camaro-cupe-ss-62-v8-2019/destaque-v1.png', 600);
insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
values ('CDF4F77', 'Buick', 'Volkswagen', 2013, '2022/07/13', '2022/09/13', 'https://www.pngmart.com/files/15/White-Buick-Car-PNG-Image.png', 123);