# CRUD genérico utilizando a biblioteca PDO com PHP.

Uma classe para realizar operações de INSERT, UPDATE, DELETE e SELECT em qualquer tabela, sem a necessidade de criar classes individuais, ou seja, um CRUD genérico. 
Trabalhando com CRUD no PHP e utilizando a biblioteca PDO, testamos essa classe com sucesso apenas com os SGBD MariaDB, MySQL e PostgreSQL, não havendo problemas com outros bancos de dados uma vez que o PDO é extremamente portável para esse tipo de mudança e as instruções SQL são simples não envolvendo características particulares de nenhum tipo de SGBD, facilitando a ideia de um CRUD genérico.

## Connection.php : 
Esta Classe genérico tem por objetivo auxiliar nas operações de diversos SGBDS. 
## Crud.php : 
Classe elaborada com o objetivo de funcionalidades para construir instruções de INSERT, UPDATE E DELETE e o SELECT é recebido integralmente via parâmetro.

### index.php
Todas as operações aceitáveis estão neste único arquivo


