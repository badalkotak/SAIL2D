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
$query = $db->query("SELECT DISTINCT(state) FROM Cities WHERE state LIKE '%".$searchTerm."%' ORDER BY state ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['state'];
}
//return json data
echo json_encode($data);
?>
