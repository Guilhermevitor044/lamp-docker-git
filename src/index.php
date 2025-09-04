<?php
$mysqli = new mysqli("mysql", "lampuser", "lamppass", "lampdb");
if ($mysqli->connect_errno) {
    echo "Falha na conexão: " . $mysqli->connect_error;
    exit();
}
echo "Conexão bem-sucedida!";
phpinfo();
