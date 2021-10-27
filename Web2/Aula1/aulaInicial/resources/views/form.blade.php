<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method='get'>
        <br>Nome: </br>
        <input type="text" name="nome"></br>
        <br>Curso:</br>
        <input type="text" name="curso"></br>
        <br>Matricula:</br>
        <input type="text" name="matricula"></br>
        <br>E-mail:</br>
        <input type="text" name="email"></br>
        <br>Cidade:</br>
        <input type="text" name="cidade"></br>
        <input type="submit" value="Salvar">
    </form>
</body>
<hr>
<h1>Chegada dos dados</h1><br>
<label>Nome: {{$nome}}</label><br>
<label>Curso: {{$curso}}</label><br>
<label>Matricula: {{$matricula}}</label><br>
<label>E-mail: {{$email}}</label><br>
<label>Cidade: {{$cidade}}</label><br>
</html>