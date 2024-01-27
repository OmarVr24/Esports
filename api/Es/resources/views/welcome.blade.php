<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esports</title>
    
    <!-- Enlace al CDN de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            padding-top: 56px; /* Ajuste para evitar que la barra de navegación cubra el contenido en dispositivos pequeños */
            background-color: #faf1fa;
        }
        .jumbotron {
            background-color: #212529;
            color: darkgrey;
            padding: 2rem;
            margin-bottom: 0;
        }
        .feature {
            text-align: center;
            margin-bottom: 2rem;
        }
        .custom-image {
            width: 500px; /* Establece el ancho deseado */
            height: 350px; /* Ajusta automáticamente la altura según el ancho */
        }
        .carousel-inner {
            display: flex;
        }
        .image-container {
            position: relative;
            width: 50%; /* Ajusta el ancho del contenedor según sea necesario */
        }
        .image-container img {
            width: 100%; /* La imagen ocupa el 100% del ancho del contenedor */
            max-width: 150%; /* La imagen puede crecer hasta un máximo del 150% del ancho del contenedor */
            height: auto; /* Mantiene la proporción original de la imagen */
        }
        .text-container {
            width: 50%;
            background-color: darkgrey;
            padding: 20px;
            color: #212529;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden; /* Soluciona problemas de overflow */
        }
        .text-container h5,
        .text-container p {
            color: white; /* Color del texto */
        }
        .section-container {
            border-radius: 8px;
            border: 6px solid #333333; /* Agrega un borde a las secciones */
            padding: 20px; /* Ajusta el relleno según sea necesario */
            margin-bottom: 20px; /* Espacio entre las secciones */
            margin-top: 20px; /* Espacio entre las secciones */
            width: 98%; /* Abarca todo el ancho */
        } 
        .section-container2 {
            border-radius: 8px;
            border: 6px solid #212529; /* Agrega un borde a las secciones */
            padding: 20px; /* Ajusta el relleno según sea necesario */
            margin-top: 20px; /* Espacio entre las secciones */
            width: 98%; /* Abarca todo el ancho */
        } 
        .image-container2 {
            float: right; /* Coloca la imagen a la derecha */
            margin-left: 20px; /* Espacio entre la imagen y el texto */
            max-width: 50%; /* Ajusta según sea necesario */
        }
        .text-container2 {
            width: 50%;
            background-color: #212529;
            padding: 20px;
            color: darkgrey;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden; /* Soluciona problemas de overflow */
        }
        .text-container3 {
            width: 50%;
            background-color: darkgrey;
            padding: 20px;
            color: #212529;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden; /* Soluciona problemas de overflow */
        }
        html, body {
            height: 70%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .main-container {
            display: flex;
            height: 100%;
        }
        .left-half {
            width: 33.33%;
            height: 100%;
            background-color: darkgrey;
            padding: 20px;
            text-align: center;
            border: 6px solid #212529;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .contact-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .center-half {
            width: 33.33%;
            height: 100%;
            background-color: darkgrey;
            padding: 20px;
            border: 6px solid #212529;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        /* Estilos del botón */
        .button {
            text-align: center;
            margin-top: 20px;
        }
        /* Estilos de los campos del formulario */
        .contact-form input {
            width: 100%;
            margin-bottom: 15px;
        }
        /* Estilo de la mitad derecha del contenedor */
        .right-half {
            width: 33.33%;
            height: 100%;
            background-color: darkgrey;
            padding: 20px;
            border: 6px solid #212529;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
                /* Estilos para la barra de navegación */
        .navbar {
            background-color: #343a40; /* Color de fondo */
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff; /* Color del texto en estado normal */
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #17a2b8; /* Color del texto al pasar el ratón */
        }

        .navbar-toggler-icon {
            background-color: #ffffff; /* Color del ícono del botón de alternar */
        }

        /* Estilo para el botón de alternar en estado normal */
        .navbar-toggler {
            border-color: #ffffff; /* Color del borde del botón de alternar en estado normal */
        }

        /* Estilo para el botón de alternar al pasar el ratón */
        .navbar-toggler:hover {
            border-color: #17a2b8; /* Color del borde del botón de alternar al pasar el ratón */
        }

        /* Estilo para el botón de alternar al hacer clic */
        .navbar-toggler:focus {
            border-color: #17a2b8; /* Color del borde del botón de alternar al hacer clic */
        }
    </style>

</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(actual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel de Imágenes -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">         
        <div class="carousel-inner">             
            <div class="carousel-item active">                
                <div class="d-flex justify-content-between">                     
                    <img src="{{ asset('image/img1.jpg') }}" class="custom-image" alt="Imagen 1">
                    <img src="{{ asset('image/img2.jpg') }}" class="custom-image" alt="Imagen 2">
                    <img src="{{ asset('image/img3.jpg') }}" class="custom-image" alt="Imagen 3">
                </div>            
            </div>             
            <div class="carousel-item">                 
                <div class="d-flex justify-content-between">                     
                    <img src="{{ asset('image/img1.jpg') }}" class="custom-image" alt="Imagen 4">
                    <img src="{{ asset('image/img2.jpg') }}" class="custom-image" alt="Imagen 5">
                    <img src="{{ asset('image/img3.jpg') }}" class="custom-image" alt="Imagen 6"> 
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Encabezado con Jumbotron -->
    <header class="jumbotron text-center">
        <h1 class="display-4">Esports</h1>
        <p class="lead">no se aun no tengo un buen nombre :/</p>
        <h6>solo me dio tiempo para hacer esto, luego lo voy a hacer mejor profe</h6>
    </header>

    <!-- Secciones Promocionales -->
    <section id="servicios" class="container-fluid section-container">
        <!-- Sección 1 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image-container2">
                    <img src="{{ asset('image/img3.jpg') }}" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="text-container2">
                    <h5>Teams</h5>
                    <p>• Faze Clan</p>
                    <p>• Cloud9</p>
                    <p>• Vitality</p>
                    <p>• Invictus</p>
                    <p>• SpaceStation</p>
                </div>
            </div>
        </div>
    </section>
    <section id="modificaciones" class="container-fluid section-container">
        <!-- Sección 3 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image-container2">
                    <img src="{{ asset('image/img1.jpg') }}" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="text-container2">
                    <h5>Games</h5>
                    <p>• Halo Infinite.</p>
                    <p>• Overwatch 2.</p>          
                    <p>• Rocket League</p>           
                    <p>• Counter Strike</p>
                    <p>• Apex Legends</p>
                </div>
            </div>
        </div>
    </section> 

    <!-- Enlace al CDN de Bootstrap 5 y scripts necesarios -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

</body>
</html>
