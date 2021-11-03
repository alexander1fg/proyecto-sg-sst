<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initia
            l-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio</title>

        <!-- javascript bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>


        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>

        <!-- javascript de datatables -->
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <!-- hoja de estilos datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

        <!-- hoja de estilos propia -->
        <link rel="stylesheet" href="css/style_menu.css">

        <!-- hoja de estilos bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- hoja de estilos bootstrap icons -->
        <link rel="stylesheet" href="font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

            <!-- Fonts -->
                <link rel="dns-prefetch" href="//fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Sweealert  -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <title>Document</title>

        <body>
            <div class="app">
                <div class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
                    <img src="/img/cootrasana.jpg" id="imagen">
                    <div class="container">
                        <header>
                            <ul class="menu">
                                    
                                <li>
                                    <a href="usuarios.html">Usuarios</a>
                                </li>

                                <li>
                                    <a href="/proyecto/riesgospsicosociales.html">Riesgos Psicosociales</a>
                                </li>

                                <li>
                                    <a href="/proyecto/Politica.html">Politica</a>
                                </li>

                                <li>
                                    <a href="/proyecto/planEmergencia.html">Plan Emergencia</a>
                                </li>

                                <li>
                                    <a href="/proyecto/Examenesingreso.html">Examenes Ingreso</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Empresa.html">Empresa</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/aliados.html">Aliados</a>
                                </li>

                                <li>
                                    <a href="/proyecto/AccionesMejora.html">Acciones Mejora</a>
                                </li>

                                <li>
                                    <a href="/proyecto/Encargado.html">Encargado</a>
                                </li>

                                <li>
                                    <a href="/proyecto/Matrizcapacitaciones.html">Matriz Capacitaciones</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Areas.html">Areas</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Cargos.html">cargos</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/DocumentosEmpleado.html">Documentos Empleado</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/DocumentosEmpresa.html">Documentos Empresa</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Empleados.html">Empleados</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Nivelesestudio.html">Niveles Estudio</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Productos.html">Productos</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/productosproveedor.html">Productos Proveedor</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Rolessgsst.html">Roles SGSST</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Tiposdocumento.html">Tipos Documento</a>
                                </li>

                                <li>
                                    <a href="/proyecto/matriz documentacion/Empleadosroles.html">Empleados Roles</a>
                                </li>

                            </ul>                 
                        </header>
                    </div>
                </div>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
    </head>
</html>
