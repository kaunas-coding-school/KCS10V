<?php
/**
 * Created by PhpStorm.
 * User: tautiz
 * Date: 17.12.14
 * Time: 18.33
 */

header('Content-type: application/json');

try {
    $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'root', 'root');

    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];

    $sql_query = "INSERT INTO Persons (LastName, FirstName, Address, City) VALUES (:LastName, :FirstName, :Address, :City)";
    $stmt = $db->prepare($sql_query);


    $stmt->execute([':LastName' => $LastName, ':FirstName' => $FirstName, ':Address' => $Address, ':City' => $City]);
    $affected_rows = $stmt->rowCount();

    echo json_encode(getData($db));

} catch (\PDOException $e) {
    echo "Gavom klaida: " . $e->getMessage();
}



function getData($db) {
    $stmt = $db->query("SELECT * FROM Persons");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}