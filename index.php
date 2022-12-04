<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
        <div class="soy">
            <img src="img/chema.webp" alt="">
            <div class="informia">
                <h1>sobre mi</h1>
                <p>
                    Hola soy EliasDaniel soy aprendiz ha desarollador web Tengo 21 año,
                    Me quiero profesionalizar en back-end, pero tambien Tengo ciertas bases
                    de front-end,puedes tener mas informacion mia en Sobre mi
                </p>
            </div>
        </div>
    </div>

   <div class="lenguajes">
   <div class="center">
        <div class="mas_info">
            <div class="img"><img src="img/HTML.png" alt=""></div>
            <div class="info">
                <p>
                    <b>HTML</b> Tengo conocimientos en html
                    Ques muy util para el desarollo web
                </p>
            </div>
        </div>

        <div class="mas_info">
            <div class="img"><img src="img/css.png" alt="CSS"></div>
            <div class="info">
                <p>
                    <b>CSS</b> Con Css podemos añadirle
                    estilos a la pagina, para se vean mas 
                    llamativas 
                </p>
            </div>
        </div>

        <div class="mas_info">
            <div class="img"><img src="img/JW.png" alt=""></div>
            <div class="info">
                <p>
                    <b>JS</b> JS este ya es un lenguaje de programacion
                    que ayuda ser a las paginas dinamicas
                </p>
            </div>
        </div>
    </div>
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