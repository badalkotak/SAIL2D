<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'SAIL2D';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM Cities WHERE city_name LIKE '%".$searchTerm."%' ORDER BY city_name ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['city_name'];
}
//return json data
echo json_encode($data);
?>
