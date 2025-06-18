<?php

if(!isset($_SESSION))
{
    session_start();
}

$base_url = "http://localhost/sekolah_sd/";

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sekolah_sd'
) or die(mysqli_error($mysqli));



?>
