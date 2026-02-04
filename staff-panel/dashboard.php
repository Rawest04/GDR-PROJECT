<?php
session_start();
if (!isset($_SESSION['staff'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Dashboard Staff | Five Worlds RP</title>
<style>
body {
  background:#0b0b0b;
  color:white;
  font-family:Poppins;
  padding:40px;
}
a {
  color:#3fa9f5;
  text-decoration:none;
}
.card {
  background:#111;
  padding:20px;
  border-radius:10px;
  margin-bottom:20px;
}
</style>
</head>

<body>

<h1>Dashboard Staff</h1>

<div class="card">
  <h3>Gestione Whitelist</h3>
  <p>Approva o rifiuta le richieste RP</p>
</div>

<div class="card">
  <h3>Gestione Staff</h3>
  <p>Ruoli, permessi, accessi</p>
</div>

<div class="card">
  <h3>News Server</h3>
  <p>Annunci e comunicazioni</p>
</div>

<a href="logout.php">Logout</a>

</body>
</html>
