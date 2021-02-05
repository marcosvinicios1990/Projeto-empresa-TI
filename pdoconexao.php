<?php

$host = "mysql:host=localhost;dbname=site_ti;port=3306";
$user = "root";
$pass = "";

try{
$db = new PDO($host,$user,$pass);
echo "Conexão feita com sucesso!";
}catch(PDOException $e){
echo "Não foi possivel realizar a conexão do banco de dados";
exit;
}


?>