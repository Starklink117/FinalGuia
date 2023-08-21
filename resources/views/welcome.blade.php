<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/img/utpp.png" type="image/x-icon">
    @yield('css')
</head>
<body>
    <div class="container-fluid" style="height: 93vh;">
        <div class="row" style="height: 93vh;">
            <!-- Menú lateral -->
            <div class="col-md-2 bg-dark">
                <div class="menus">
                    <img src="/img/utpp.png" id="logo" alt="">
                </div>
                <ul class="list-group list-group-flush" >
                    <li class="list-group-item">
                        <a href="/maestros" class="linknav"><i class="fa-solid fa-user-tie"></i> MAESTRO</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/estudiantes" class="linknav"><i class="fa-solid fa-user-graduate"></i> ESTUDIANTE</a>
                    </li>
                </ul>
            </div>
            
            <!-- Sección al lado del menú -->
            <div class="col-md-10 bg-light">
                <div class="container mt-3">
                    <h1>@yield('titulopagina')</h1>
                    <div>
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd6126367b.js" crossorigin="anonymous"></script>
    @yield('js')
    <footer class="text-center py-3 pie">
        <h5><b>Proyecto Final &copy; Curso Laravel UTP {{ date('Y') }}</b></h5>
    </footer>
    
</body>
</html>

