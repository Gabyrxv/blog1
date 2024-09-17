<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog','root', '');
} catch (PDOException $e) {
    // tentar reconectar após algum intervalo, por exemplo
    echo 'error'.$e;
}