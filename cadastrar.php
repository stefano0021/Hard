<?php

    require __DIR__.'/vendor/autoload.php';
    
    
    use \App\Entity\Vaga;
    $obVaga = new Vaga;

    //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
    if (isset($_POST['titulo'], $_POST ['descricao'], $_POST['status'])) {
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->status = $_POST['status'];

     $obVaga->cadastrar();
     echo "<pre>"; print_r($obVaga); echo "</prev>"; exit;
    header('location: index.php?status=success');
    exit;

    }

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/formulario.php';
    require __DIR__.'/includes/footer.php';
    ?>