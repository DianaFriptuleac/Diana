<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./style.css">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div class="container mt-4">

        <h1 class="mb-4 text-light text-center">Admin system</h1>

        <!--Carousel-->
        <div id="carouselExample" class="carousel slide shadow rounded overflow-hidden mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf3F0FLFQdWj9F_KE7N7kOZLyzL7cTQ_z1V3ZrOv_fUlAfUF9wZKcwf4U&s=10"
                        class="d-block w-100"
                        alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/OIP.XGK0h9rTT153vNVeYnmpVAHaEO?w=285&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                        class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/OIP.Dc6hwXrt8tMBlQBVrNHh2QHaEO?w=299&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                        class="d-block w-100" alt="Slide 3">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <!--Cards-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">>With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--caricare il codice JavaScript di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>