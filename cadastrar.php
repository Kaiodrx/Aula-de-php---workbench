<?php

include "config.php";

    if(isset($_POST['submit'])) {

        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];
        

      $sql = "INSERT INTO `teste`.`usuarios`
         (`primeironome`,`ultimonome`,`email`,`passowrd`,`genero`)
         VALUES ('$primeironome,', '$ultimonome', '$email', '$password','$genero',)";
        

        $result = $conn->query($sql);

        if($result == TRUE) {

            echo "Registro criado com sucesso!";

        }
         else {

            echo "Erro> ". $sql.  "<br>" . $conn->error;
        }

        $conn->close();

    }
?>

<!DOCTYPE html>

<html>
<body>
<h2> Cadastro de clientes </h2>
<form action="" method = "POST">
    <fieldset>
        <legend>informalções pessoais: </legend>
        Primeiro Nome: <br>
        <input type ="text" name="primeironome" >
        <br>
        Último Nome: <br>
        <input type="text" name="ultimonome" >
        <br>
        Email: <br>
        <input type="email" name="email">
        <br>
        Password: <br>
        <input type="password" name="password">
        <br>
        Gênero: <br>
        <input type="radio" name="genero" value="Masculino"> Masculino
        <input type="radio" name="genero" value="Feminino"> Feminino 
        <input type="radio" name="genero" value="Nãodeclarado"> Não declarado
        <br>

        <input type="submit" name="submit" value="submit">


</fieldset>
</body>



</html>