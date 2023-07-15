# Aula 10 - Banco de Dados

## Sistema Gerenciador de Banco de Dados (SGBD)
Um SGBD tem por propósito organizar e manter os dados. Um SGBD possui muito mais recursos do que apenas criar banco de dados. Ex: exportação do banco de dados.

Existem duas categorias de banco de dados:
- **Banco de dados relacional**
    - MySQL
    - SQL Server
    - PostgreSQL
    - **MariaDB**
- Banco de dados não relacional (NoSQL)
    - MongoDB
    - cassandra db
    - Redis 

O primeiro passo para construir um banco de dados é fazer o levantamento e modelagem dos dados.

Um banco de dados pode conter vários objetos, dentre eles:
- Tabelas
- Views
- Triggers
- Functions
- Stored Procedure

O principal objeto que iremos trabalhar será com Tabelas.

## Tabelas
Tabelas armazenam dados. Uma tabela representa algo do mundo real(ex: cliente, veículo, produto), a partir dessa representação, começamos a modelar a tabela. A tabela possui dois items principais:
- Campos: são as colunas da tabela, representa uma informação isolada
- Registros(Tuplas): são as linhas da tabela, representa um conjunto de dados de algo ou alguém.

## SQL - Standar Query Language
Os bancos de dados relacionais trabalham com a linguagem SQL para a criação, manutenção e organização dos objetos do banco de dados.
O SQL possui as seguintes categorias de comandos:
- DQL - comandos para consulta. Ex: consultar todos os clientes que moram em Americana. 
    - comandos: select
- DML - comandos para manipulação de dados. Ex: inserir um novo cliente. 
    - comandos: insert, update, delete
- DDL - comandos para manipulação de objetos(definições) do banco de dados. Ex: criar uma nova tabela para guardar as informações dos funcionários.
    - comandos: create, drop, alter
- DCL - comandos para gerenciamento de permissão. Ex: dar permissão à um usuário do banco de dados na tabela de clientes,.
    - comandos: grant, revoke
- DTL - comandos para gerencimanto de transações. Ex: você precisa fazer uma alteração no BD em produção, e quer poder voltar essa alteração.
    - comandos: begin, commit, rollback

### Prompt de comando
- cls
- cd\
- cd xampp
- cd mysql
- cd bin

### MYSQL
- conectar no servidor mysql: `mysql -h localhost -u root`
- limpar a tela: \! cls
- mostrar todos os bancos de dados do servidor: `show databases;`
- excluir BD: `drop database bd_lavajato;`
- criar BD: `create database bd_lavajato;`
- colocar o BD em uso: `use bd_lavajato;`
- criar a tabela:
```sql
create table tb_clientes(
    id int not null,
    nome varchar(100) not null,
    cidade varchar(50) not null
);
```
- exibir as tabelas: `show tables;`
- exibir a estrutura de uma tabela: `desc tb_clientes;`
- inserir um cliente: `insert into tb_clientes values(1,'Guto','SBO');`
- listar todos os clientes: `select * from tb_clientes;`
- listar apenas o nome dos clientes: `select nome from tb_clientes;`
- listar apenas os clientes de SBO: ` select * from tb_clientes where cidade = 'sbo';`
- alterar o id da Andrea para 5: `update tb_clientes set id = 5 where nome = 'Andrea';`
- excluir o registro da Silvia: `delete from tb_clientes where nome = 'Silvia';`
- sair do mysql: `exit;`
