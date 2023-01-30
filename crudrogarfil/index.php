<?php
/**
 * index.php
 *
 * created by: rogarfil
 * Inicial version created on: 08/11/2022 17:41
 *
 */

use Classes\Connection;

require_once 'classes/Connection.php';

require_once 'classes/Crud.php';

$pdo = Connection::getInstance();

/**
 * Confirmação da conexão com o banco, pode tirar.
 */
if ($pdo) {
    echo '<h6>Banco de dados Conectado!</h6>';
} else {
    echo '<h6>ERROR: Não foi possível Conectar!</h6>';
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Genérico com PHP e PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<?php
// Atribui uma instância da classe Crud, passando como parâmetro a conexão PDO e o nome da tabela
$crud = Crud::getInstance($pdo, 'usuarios');


// Inseri os dados do usuário
$arrayUser = array('nome' => 'Pedro Alvares Cabral', 'user' => 'Pedroca', 'email' => 'pac@gmail.com', 'senha' => sha1(md5('p2a0c2b2')));
var_dump($arrayUser);
$turn_back = $crud->insert($arrayUser);
var_dump($turn_back);

/**
 *
// Altera os dados do usuário
$arrayUser = array('nome' => 'Pedro Alvares Cabral', 'user' => 'Pedroca', 'email' => 'pac@yahoo.com.br', 'senha' => sha1(md5('p2a0c2b2')));
$arrayCond = array('id=' => 2);
var_dump($arrayUser);
$turn_back = $crud->update($arrayUser, $arrayCond);
 *
// Consulta os dados do usuário com id 2
$sql = "SELECT * FROM usuarios WHERE id = ?";
$arrayParam = array(2);
$turn_back = $crud->getSQLGeneric($sql, $arrayParam, false);
var_dump($turn_back);
 *
// Consulta os dados de todos os usuário com id
$sql = "SELECT * FROM usuarios";
$arrayParam = array();
$turn_back = $crud->getSQLGeneric($sql, $arrayParam, true);
var_dump($turn_back);
 *
// Exclui o registro do usuário com id 3
$arrayCond = array('id=' => 3);
$turn_back = $crud->delete($arrayCond);
 *
*/

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
