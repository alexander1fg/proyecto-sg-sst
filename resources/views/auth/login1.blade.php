<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- hoja de estilos bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- hoja de estilos datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- hoja de estilos bootstrap icons -->
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="stylesheet" href="/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css"
        integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">

</head>

<body>
    <form class="formulario">
        <h1>login</h1>
        <div class="contenedor">



            <div class="input-contenedor">
                <i class="bi bi-envelope-fill icon"></i>
                <input type="text" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="bbi bi-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Entrar" class="button">
            <p>Al registrarse, aceptas nuestras Condiciones de uso y politicade
                privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="registrate.html">Registrate</a></p>
        </div>
    </form>
</body>

</html>
