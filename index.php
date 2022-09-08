<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>LABORATORIO 3</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="./recursos/logo.png" class="img-fluid" alt="...">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sala</a></li>
                            <li><a class="dropdown-item" href="#">Habitación</a></li>
                            <li><a class="dropdown-item" href="#">Comedor</a></li>
                            <li><a class="dropdown-item" href="#">Niños</a></li>
                            <li><a class="dropdown-item" href="#">Baños</a></li>
                            <li><a class="dropdown-item" href="#">Cocina</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Texto Buscado" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./recursos/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./recursos/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./recursos/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <p></p>
                <div class="card border-ligth mb-3" >
                <img src="./recursos/top.png" class="img-fluid" style="width:150px" alt="...">
                    <div class="card-body text-primary">
                        <h3 class="card-title">Nosotros</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver Detalle</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <p></p>
            <div class="card border-ligth mb-3">
            <img src="./recursos/top.png" class="img-fluid" style="width:150px" alt="...">
                <div class="card-body text-primary">
                <h3 class="card-title">Nuestra Mision</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver Detalle</button>
                </div>
            </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <p></p>
                <div class="card border-ligth mb-3">
                <img src="./recursos/top.png" class="img-fluid" style="width:150px" alt="...">
                    <div class="card-body text-primary">
                    <h3 class="card-title">Nuestra Vision</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver Detalle</button>
                    </div>
                </div>
                </div>
        </div>

        <b></b>
    <div>
        <h1 class="text-center">Catalogo</h1>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>
        <p></p>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                    <hr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                        <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

<ul class="nav    ">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Siguenos en las redes sociales</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
    
    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>