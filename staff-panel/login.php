<?php
session_start();
if (isset($_SESSION['staff'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Staff Login | Five Worlds RP</title>
<style>
body {
  background:#0b0b0b;
  color:white;
  font-family:Poppins, sans-serif;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}
form {
  background:#111;
  padding:30px;
  border-radius:10px;
  width:300px;
}
input, button {
  width:100%;
  margin-top:15px;
  padding:10px;
  border-radius:5px;
  border:none;
}
button {
  background:#3fa9f5;
  cursor:pointer;
}
</style>
</head>

<body>

<form method="POST" action="auth.php">
  <h2>Five Worlds Staff</h2>
  <input type="text" name="user" placeholder="Username" required>
  <input type="password" name="pass" placeholder="Password" required>
  <button type="submit">Accedi</button>
</form>

</body>
</html>
