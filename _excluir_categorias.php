<html>
<!-- excluir_categorias.php -->
 
<head>
  <title>Excluir Categorias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  <style>
        h3{
            text-align: center;
           color: blue;
           
        }
     
    </style>
</head>
 
<body>
    <?php
    include 'conexao.php';
    $id_categoria = $_POST['id_categoria'];
    $sql = "delete from categorias where id_categoria = '$id_categoria'";
    $editar = mysqli_query($conexao, $sql);
    ?>
    <div class="container">
        <h4>Categoria deletada com sucesso!</h4>
        <a href="lista_categorias.php" class="bnt btn-primary">Voltar</a>
 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>