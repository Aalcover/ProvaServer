<?php

header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("192.168.1.44", "aleix", "12345", "nautic");
$result = $conn->query("SELECT * FROM vaixell");
$outp = $result->fetch_assoc();
echo json_encode($outp);