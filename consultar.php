<?php

include "config.php"

$sql = "SELECT * FROM `teste`.`usuarios`;"; 
$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>
<head>
    <title>Página de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/3.4.0/css/bootstrap.min.css">;
</head>

<body>
    <div class="container">
        <h2>Usuários</h2>
        <table clas="table">
            <tr>
        <th>Primeio Nome:</th>
        <th>Último Nome:</th>
        <th>E-mail:</th>
        <th>Gênero:</th>
            </tr>
        </thead>
        </table>
</div>
</body>
</html>