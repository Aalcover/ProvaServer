<?php

header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "aleix", "12345", "nautic");
$stmt = $conn->prepare("SELECT * FROM client inner join vaixell on client.matricula=vaixell.matricula");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);

?>