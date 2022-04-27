<!DOCTYPE html>
<html>
<head>
    <title>Canvas Pirata</title>
    <link rel="stylesheet" href="view/css/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Zilla+Slab:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
        <nav>
            <li class="cerrarSesion">cerar sesion</li> <!--se cierra sesion llamando una funcion echa en php o js. aun no se debe de programar-->
            <li>Escuela</li>
            <li class="nombrePersona">nombre de persona <!--nombre variable. depende del usario--> </li>
        </nav>

    </header>

    <main>
        <div class="cajaCurso"> <!--Esta estructura se repite para todos los cursos-->
            <header class="hederCurso">
                Matematicas
            </header>
            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2<!--cantidad de tareas que el maestro a dejado  y se refleja como un numero-->
                </p></div>
            </div>
            <div class="notaCurso">
                notas <!--nota del curos. se imprimer la suma de puntos de las tareas que el alumno ingresa-->
            </div>
        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Lenguaje Espaniol
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2<!--cantidad de notas-->
                </p></div>
            </div>

            <div class="notaCurso">
                notas <!--nota del curos-->
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Leguaje Ingles
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Sociales
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Ciencas Naturales
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Estadistica
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Contabilidad
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

        <div class="cajaCurso">

            <header class="hederCurso">
                Educacion Fisica
            </header>

            <div class="mainCurso">
                <div class="tareasPendiente"><p>
                    <Tarea>Tareas Pendientes</Tarea>
                    2
                </p></div>
            </div>

            <div class="notaCurso">
                notas
            </div>

        </div>

    </main>

    <?php require_once "view/vistas/foder.php" ?>

