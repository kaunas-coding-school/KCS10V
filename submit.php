<?php
/**
 * Created by PhpStorm.
 * User: tautiz
 * Date: 17.12.14
 * Time: 18.33
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'root', 'root');

    $sql_query = "INSERT INTO Persons (PersonID, LastName, FirstName, Address, City) VALUES (1, 'Erichsen', 'Skagen', 'Stavanger', 'Berlin')";

    $result = $db->exec($sql_query);
    $insertId = $db->lastInsertId();

    echo "Last inserted element ID: " . $insertId;

} catch (\PDOException $e) {
    echo "Gavom klaida: " . $e->getMessage();
}
