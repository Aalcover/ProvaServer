<?php

header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("10.100.65.33", "aleix", "12345", "nautic");
$stmt = $conn->prepare("SELECT * FROM vaixell");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);

?>
