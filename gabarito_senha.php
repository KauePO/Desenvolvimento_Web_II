<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
    # Seu código aqui.
    $filename = "senhas_usadas.txt";
    if(isset($_POST['senha'])){ // verifica se algo foi inserido no campo 'senha'
        if ($_POST['senha']!= '123'){   // Definição da senha correta
        echo '<br><br>';                // caso errada vvvvvv
        echo 'Você errou';

        $handle = fopen("senhas_usadas.txt", "a");  // cria/edita o arquivo senhas_usadas.txt

        fwrite ($handle, $_POST['senha'] . "\n"); // Anota
        fflush ($handle);                         // as senhas
        fclose ($handle);                         // no arquivo senhas_usadas.txt


    } else {             // caso certa vvvvvv
        echo '<br><br>';
        echo 'Parabéns, você sabe a senha: 123';

        if(!file_exists("senhas_usadas.txt")){
        $handle = fopen("senhas_usadas.txt", "a");
    } else {
        $handle = fopen("senhas_usadas.txt", "a");
    }

        fwrite ($handle, $_POST['senha'] . "\n");
        fflush ($handle);
        fclose ($handle);
    }
}
?>
</body>
</html>