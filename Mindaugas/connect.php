<?php
/**
 * Created by PhpStorm.
 * User: minsol
 * Date: 2017.12.21
 * Time: 18:42
 */
try {
    $db = new PDO('mysql:host=localhost:3306;dbname=zinutes;charset=utf8mb4', 'root', '');

//    Is kontaktu formos ivedami duomenys i duomenu baze

    $Vardas = $_POST['vardas'];
    $Pavarde = $_POST['pavarde'];
    $Emailas = $_POST['pastas'];
    $Zinute = $_POST['zinute'];

    $sql_query = "INSERT INTO zinutes (Vardas, Pavarde, Emailas, Zinute) VALUES ( '$Vardas', '$Pavarde', '$Emailas', '$Zinute')";

    $result = $db->exec($sql_query);
    $insertId = $db->lastInsertId();
    echo "Jusu zinute gauta.";
    echo " ID: " . $insertId;


//    echo "<pre>";
//    var_dump(getData($db));
//    echo "</pre>";


// echo json_encode (getData($db));


} catch (\PDOException $e) {
    echo "Gavom klaida: " . $e->getMessage();
};

function getData($db)
{
    $stmt = $db->query('SELECT * FROM zinutes');
    return $stmt->fetchAll{PDO::FETCH_ASSOC};
}


