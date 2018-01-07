<?php
/**
 * Created by PhpStorm.
 * User: foght
 * Date: 2017-12-21
 * Time: 18:44
 */
header('content-type: application/json');
try {
    $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'root', '');

    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];

    $sql_query = "INSERT INTO Persons (LastName, FirstName, Address, City) VALUES (:LastName, :FirstName, :Address, :City)";

    $stmt = $db->prepare("$sql_query");
    $stmt->execute(array(':LastName' => $LastName, ':FirstName' => $FirstName, ':Address' => $Address, ':City' => $City));
    $affected_rows = $stmt->rowCount();

    $result = $db->exec($sql_query);
    $insertId = $db->lastInsertId();

  //  echo json_encode(getData($db));

} catch (\PDOException $e) {
    echo "Gavom klaida: " . $e->getMessage();
}
function getData($db) {
    $stmt = $db->query("SELECT * FROM Persons");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}