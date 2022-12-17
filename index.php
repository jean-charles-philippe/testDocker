<?php
try {
    $dbh = new PDO('mysql:host=db;dbname=demo', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
echo 'Hello World !!';
