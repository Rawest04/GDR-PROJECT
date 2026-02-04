<?php
session_start();

/* === CREDENZIALI STAFF === */
$STAFF_USER = "admin";
$STAFF_PASS = "passwordSicura123"; // CAMBIALA

$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';

if ($user === $STAFF_USER && $pass === $STAFF_PASS) {
    $_SESSION['staff'] = true;
    header("Location: dashboard.php");
    exit;
}

echo "Accesso negato";
