<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base_url = "http://localhost:8080/";

$conn = mysqli_connect(
    'sekolah_sd_db',
    'user',
    'password',
    'sekolah_sd'
) or die(mysqli_error($conn));
