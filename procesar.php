<?php

// Verificar que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $nombre   = trim($_POST["name"]);
  $email    = trim($_POST["email"]);
  $password = $_POST["password"];
  $confirm  = $_POST["password_confirm"];

  // Validaciones básicas
  if (empty($nombre) || empty($email) || empty($password)) { 
    die("❌ Todos los campos son obligatorios");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("❌ Email no válido");
  }

  if ($password !== $confirm) {
    die("❌ Las contraseñas no coinciden");
  }

  // Encriptar contraseña
  $passwordHash = password_hash($password, PASSWORD_DEFAULT);

  echo "<h2>Registro exitoso ✅</h2>";
  echo "<p><strong>Nombre:</strong> $nombre</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Password hash:</strong> $passwordHash</p>";
}

