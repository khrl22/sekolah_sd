<?php
include('../include/koneksi.php');

// Tidak perlu session_start() lagi jika sudah di koneksi.php

session_unset();
session_destroy();

header("Location: " . $base_url);
exit;
