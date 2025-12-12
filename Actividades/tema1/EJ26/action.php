<?php
// Datos de credenciales válidas y datos de usuario (Simulación de una base de datos)
$usuario_valido = "admin";
$clave_valida = "1234";

// Datos adicionales del usuario simulado
$datos_usuario = [
    "nombre_completo" => "Juan Pérez",
    "email" => "juan.perez@ejemplo.com",
    "rol" => "Administrador"
];

// 1. Obtener los datos enviados por el formulario (usando $_POST)
$nombre_usuario = $_POST["uname"] ?? ""; // Uso de ?? para evitar errores si no se envía
$clave_ingresada = $_POST["pass"] ?? "";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Login</title>
    <style>
        .exito { color: green; border: 1px solid green; padding: 10px; }
        .error { color: red; border: 1px solid red; padding: 10px; }
    </style>
</head>
<body>  

<?php
// 2. Verificar las credenciales
if ($nombre_usuario === $usuario_valido && $clave_ingresada === $clave_valida) {
    // 3. Login Exitoso: Mostrar datos del usuario
    echo '<div class="exito">';
    echo '<h2>¡Login Exitoso!</h2>';
    echo '<p>Bienvenido, usuario: <b>' . htmlspecialchars($nombre_usuario) . '</b></p>';
    echo '<h3>Tus Datos:</h3>';
    echo '<ul>';
    echo '<li>Nombre Completo: <b>' . htmlspecialchars($datos_usuario["nombre_completo"]) . '</b></li>';
    echo '<li>Correo Electrónico: <b>' . htmlspecialchars($datos_usuario["email"]) . '</b></li>';
    echo '<li>Rol: <b>' . htmlspecialchars($datos_usuario["rol"]) . '</b></li>';
    echo '</ul>';
    echo '</div>';
    
} else {
    // Login Fallido: Mostrar mensaje de error
    echo '<div class="error">';
    echo '<h2>Error de Login</h2>';
    echo '<p>El nombre de usuario o la clave son incorrectos.</p>';
    echo '<p>Por favor, <a href="index.html">inténtalo de nuevo</a>.</p>';
    echo '</div>';
}
?>

</body>
</html>