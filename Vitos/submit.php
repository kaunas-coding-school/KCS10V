<?php
/**
 * Created by PhpStorm.
 * User: tautiz
 * Date: 17.12.14
 * Time: 18.33
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=kcs;', 'root', '');

    $sql_query = "INSERT INTO `students` (`id`, `Name`, `Surname`, `phone`, `email`) VALUES (NULL, 'Jonas', 'Jonaitis', '865425365', 'ddd@ddl.lt')";
$

    $result = $db->exec($sql_query);
    $insertId = $db->lastInsertId();

    echo "Last inserted element ID: " . $insertId;

  var_dump(getdate($db))  ;


} catch (\PDOException $e) {
    echo "Gavom klaida: " . $e->getMessage();
}

function getdate($db)
{
    $stmt=$db->query("SELECT * FROM 'students'");
    return $stmt->fetchall(PDO::FETCH_Assc);
}