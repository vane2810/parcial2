<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/welcome.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav id= "barra"class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">Biblioteca Nacional</a>
        </nav>
    </header>

    <section> 
        <h3>¿Qué somos?</h3>
        <p>La Biblioteca Nacional es el epicentro del conocimiento y la cultura de un país. Alberga una extensa 
            colección de libros, documentos históricos y recursos que ofrecen una ventana al pasado y el presente. 
            Además de ser un tesoro invaluable para investigadores y amantes de la lectura, es un centro activo de 
            actividades culturales y académicas que enriquecen la vida intelectual de la sociedad.
        </p>
    </section>

    <div class="d-flex justify-content-between">
        <div class="card">
            <img src="{{ asset('img/home/img1.jpg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Júpiter es una obra del escritor salvadoreño Francisco Gavidia, 
                    ambientada en la época en que se gestó el Grito de Independencia de 1811
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/home/img2.jpg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">La Divina Comedia es un poema épico escrito por Dante Alighieri entre 1304 
                    y 1321. Es una obra maestra de la literatura italiana y una de las obras más importantes de 
                    la literatura universal.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/home/img3.jpeg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Luz negra es una obra teatral perteneciente al teatro existencial.
                  Dividida en un acto y este dividido en dos cuadros.​​ Fue publicada en 1962 por el autor
                 salvadoreño Álvaro Menéndez Leal.
                </p>
            </div>
        </div>
    </div>

    <h4>Echa un vistazo a lo que puedes encontrar</h4>

    <div id="carrusel1-container">
        <div id="carrusel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/home/img4.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/img5.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/img6.jpg') }}" class="d-block w-100">
                </div>
            </div>
        </div>
        <p id="txt1">Explora nuestra galería de imágenes literarias y déjate llevar por la creatividad y 
            la imaginación hacia nuevos universos de la palabra escrita.
        </p> 
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
    <footer>
    </footer>
</html>