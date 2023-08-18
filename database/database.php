<?php

$conn = new mysqli("localhost", "root", "secret", "fashion_db");
//var_dump($conn);

if(!$conn) {
    die(mysqli_error($conn));
}