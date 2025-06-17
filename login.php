<?php
session_start();
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST['email'];
  $clave = $_POST['clave'];

  // Conexión a la base de datos
  $conn = new mysqli("localhost", "root", "", "viajes_db");
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM usuarios WHERE email = ? AND clave = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email, $clave);
  $stmt->execute();
  $resultado = $stmt->get_result();

  if ($usuario = $resultado->fetch_assoc()) {
    $_SESSION['usuario'] = $usuario;
    if ($usuario['rol'] === 'jefe') {
      header("Location: panel_jefe.php");
    } else {
      header("Location: productos.html");
    }
    exit;
  } else {
    $mensaje = "Usuario o clave incorrectos";
  }
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viajaconmigo - Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f4ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      margin-bottom: 20px;
      color: #0a58ca;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #0a58ca;
      color: white;
      border: none;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
    .mensaje {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Iniciar sesión</h2>
    <form method="post">
      <input type="email" name="email" placeholder="Correo electrónico" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
    <?php if ($mensaje): ?>
      <div class="mensaje"><?php echo $mensaje; ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
