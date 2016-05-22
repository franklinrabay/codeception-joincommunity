<?php
$string = "nenhum dado enviado";
 
if (!empty($_POST['string'])) {
    $string = "STRING: " . strtoupper($_POST['string']);
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Join Community - Codeception</title>
</head>
<body>
 
    <h1>Mostrando Nada para <?php echo $_POST['string']; ?></h1>
 
    <p><?php echo $string; ?></p>
 
    <p><a href="index.html">Voltar</a></p>
 
</body>
</html>