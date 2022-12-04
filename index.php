<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <link rel="stylesheet" href="style.css">
    <title>Portafolio</title>
</head>
<!--COMENTARIO-->
<body>
    <header class="navega">
        <nav class="nav">
            <a href="index.html">Inicio</a>
            <a href="#">otros proyectos</a>
            <a href="#">cursos</a>
        </nav>
    </header>
    <main class="contenido">
    </main>
    <div class="mi_persona">
        <div class="imgen">
            <img src="/img/chema.webp" alt="soy-yo" class="persna">
        </div>
        <div class="informacion">
            <h1>SOBRE MI</h1>
            <p>
                Hola soy <b>EliasDaniel</b> soy aprendiz ha desarollador web
                Tengo 21 año, Me quiero profesionalizar en back-end, pero tambien Tengo
                ciertas bases de front-end,puedes tener mas informacion mia en <a href="#">Sobre mi</a>
            </p>
        </div>
    </div>

    <div class="or">
    </div>

    <div class="suscribete">
        <form action="db.php" method="post">
            <label for="name">NOMBRE</label>
            <input type="text" name="name" placeholder="nombre" class="name">

            <label for="email">Correo</label>
            <input type="email" name="email" placeholder="correo" class="correo">

            <button name="button">ENVIAR INFORME</button>
        </form>
    </div>
    
</body>

</html>