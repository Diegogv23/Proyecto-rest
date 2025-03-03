<?php
session_start(); // Iniciar sesión si hay autenticación
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto MIG</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style-index.css" as="style">
    <link rel="stylesheet" href="css/style-index.css">
    <!-- Fuente Roboto de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <h1 class="titulo">Bienvenido al Sistema MIG</h1>
    </header>
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="#">Inicio</a>
            <a href="#">Sobre nosotros</a>
            <a href="#">Clientes</a>
            <a href="#">Contacto</a>
        </nav>
    </div>

    <section class="hero">
        <div class="contenido-hero">
            <h2 class="titulo">Soluciones para tu negocio</h2>

            <div class="ubicacion">
                <svg class="ubi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="80" height="80" stroke-width="2">
                    <path d="M12 9.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                    <path d="M6.428 12.494l7.314 -9.252"></path>
                    <path d="M10.002 7.935l-2.937 -2.545"></path>
                    <path d="M17.693 6.593l-8.336 9.979"></path>
                    <path d="M17.591 6.376c.472 .907 .715 1.914 .709 2.935a7.263 7.263 0 0 1 -.72 3.18a19.085 19.085 0 0 1 -2.089 3c-.784 .933 -1.49 1.93 -2.11 2.98c-.314 .62 -.568 1.27 -.757 1.938c-.121 .36 -.277 .591 -.622 .591c-.315 0 -.463 -.136 -.626 -.593a10.595 10.595 0 0 0 -.779 -1.978a18.18 18.18 0 0 0 -1.423 -2.091c-.877 -1.184 -2.179 -2.535 -2.853 -4.071a7.077 7.077 0 0 1 -.621 -2.967a6.226 6.226 0 0 1 1.476 -4.055a6.25 6.25 0 0 1 4.811 -2.245a6.462 6.462 0 0 1 1.918 .284a6.255 6.255 0 0 1 3.686 3.092z"></path>
                </svg>
                <p>En cualquier parte del mundo</p>
            </div>

            <a class="boton" href="#">Contactar</a>
        </div>

    </section>

    <main>
        <h2>Nuestros servicios</h2>

        <section>
            <h3>Facturacion electronica</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="36" height="36" stroke-width="2">
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                <path d="M9 7l1 0"></path>
                <path d="M9 13l6 0"></path>
                <path d="M13 17l2 0"></path>
            </svg>
            <p>adipisicing elit. Dolor, error dignissimos consequatur distinctio tempore consectetur
                laborum quas! Ratione quibusdam
                tempora odio veniam dolore sapiente facere possimus rem! Enim, eligendi quos!</p>
        </section>

        <section>
            <h3>Control de inventario</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="36" height="36" stroke-width="2">
                <path d="M3 21v-13l9 -4l9 4v13"></path>
                <path d="M13 13h4v8h-10v-6h6"></path>
                <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3"></path>
            </svg>
            <p>Ipsam atque, ducimus, a illum cumque quos quam asperiores sequi fuga sunt libero minus
                dolor inventore doloribus delectus
                deserunt magnam eos recusandae?</p>
        </section>

        <section>
            <h3>Facil administracion</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="36" height="36" stroke-width="2">
                <path d="M11.537 19.542l-7.037 -6.97a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.212 5.693"></path>
                <path d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5"></path>
            </svg>
            <p>Non sed impedit dolorem accusamus eaque, placeat architecto, ducimus mollitia eos
                molestias aliquid. Tenetur reiciendis autem architecto
                rerum placeat nisi voluptatibus officiis.</p>
        </section>

    </main>

    <section>
        <h2>Contacto</h2>

        <form>
            <fieldset>
                <legend>Contactanos llenando todos los campos</legend>

                <div>
                    <label>Nombre</label>
                    <input type="text" placeholder="Tu Nombre">
                </div>

                <div>
                    <label>Telefono</label>
                    <input type="text" placeholder="Tu Telefono">
                </div>

                <div>
                    <label>Correo</label>
                    <input type="email" placeholder="Mail">
                </div>

                <div>
                    <label>Mensaje</label>
                    <textarea></textarea>
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>

            </fieldset>
        </form>

    </section>

    <footer>
        <p>&copy; 2025 Proyecto MIG (SENA). Todos los derechos reservados.</p>
    </footer>
</body>

</html>