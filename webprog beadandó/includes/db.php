<?php
// Adatbázis kapcsolódás létrehozása és funkciók definiálása

$db_host = $config['https://mysqladmin.nethely.hu/index.php'];
$db_name = $config['webprog'];
$db_user = $config['czineb'];
$db_pass = $config['Hurrikan122'];

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Hiba az adatbázishoz való csatlakozás közben: " . $e->getMessage());
}

// Egyéb adatbázis funkciók...
