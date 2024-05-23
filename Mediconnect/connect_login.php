<?php

$conn = new mysqli('localhost', 'root', '', 'medi');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
