<?php 

$connect = new PDO('mysql: dbhost=localhost; dbname=chat','root','root');
if(!$connect){
echo 'db error';
}

?>