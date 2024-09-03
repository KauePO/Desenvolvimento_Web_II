<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit; 
}
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input name="cpf" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
        <?php
        $filename = "Cadastros.txt";
        if (isset($_POST ['nome'])){
            $handle = fopen("Cadastros.txt", "a");

            fwrite ($handle, $_POST['nome']. "\n");
            fflush ($handle);
            fclose ($handle);
        }
        if (isset($_POST ['cpf'])){
            $handle = fopen("Cadastros.txt", "a");

            fwrite ($handle, $_POST['cpf']. "\n\n");
            fflush ($handle);
            fclose ($handle);          
        }
        ?>
</body>
</html>