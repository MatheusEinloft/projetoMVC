<?php
include './../app/config.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Database.php';
$db = new Database;

$usuarioId = 1;
$titulo = 'titulo do post 2';
$texto = 'texto do post 2';

$db->query("UPDATE posts SET usuario_id = :usuario_id, titulo = :titulo, texto = :texto");
$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->exec();

echo '<hr>Total resultados: ' . $db->totalResults();
echo '<hr>Ultimo id: ' . $db->lastIdInsert();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>/public/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    include '../app/Views/topo.php';
    $rotas = new Rota();
    include '../app/Views/rodape.php';

    ?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL ?>/public/js/main.js"></script>

</html>