<?php
$won = $_GET['won'] ?? 0;
$secret = $_GET['secret'] ?? '';
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $won ? '¡Victoria!' : 'Fin del juego'; ?></title>
</head>
<body>
<h1>
<?php
if ($won) {
    echo "¡Correcto! El número era $secret.";
} else {
    echo "Se acabaron los intentos. El número era $secret.";
}
?>
</h1>
<p><a href="index.php"><button>Volver a jugar</button></a></p>
</body>
</html>
