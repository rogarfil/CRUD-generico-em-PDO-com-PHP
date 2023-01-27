# CRUD-generico-com-PHP-e-PDO
CRUD genérico no PHP utilizando a biblioteca PDO.
Observando o funcionamento dessas classes, com algumas modificações e melhorias seria possível utilizar apenas uma classe para realizar operações de INSERT, UPDATE, DELETE e SELECT em qualquer tabela, sem a necessidade criar classes individuais, ou seja, um CRUD genérico.
Trabalho com CRUD no PHP e utilizo a biblioteca PDO por vários motivos, suas vantagens e principais características. Essa classe foi testada com sucesso apenas com os SGBD MySQL, SQL Server 2008 e PostgreSQL, acredito que não haverá problemas com outros banco de dados uma vez que o PDO é extremamente portável para esse tipo de mudança e as instruções SQL são simples não envolvendo características particulares de nenhum tipo de SGBD, facilitando a ideia de um CRUD genérico.

ARQUIVOS:
Crud.php
Descrição: A Classe de CRUD genérico foi elaborada com o objetivo de auxlilar nas operações CRUDs em diversos SGBDS, possui funcionalidades para construir instruções de INSERT, UPDATE E DELETE onde as mesmas podem ser executadas nos principais SGBDs, exemplo SQL Server, MySQL e Firebird. Instruções SELECT são recebidas integralmente via parâmetro.

Connection.php
Descrição: Classe elaborada com o objetivo de auxlilar nas operações CRUDs em diversos SGBDS, possui funcionalidades para construir instruções de INSERT, UPDATE E DELETE onde as mesmas podem ser executadas nos principais SGBDs, exemplo SQL Server, MySQL e Firebird. Instruções SELECT são recebidas integralmente via parâmetro.

index.php
Todas as operações aceitáveis estão neste único arquivo

crudrogarfil.sql
Contém as tabelas do Banco de Dados, são elas:
`artigo`
`categorias`
`clientes`
`funcionario`
`usuarios`


