<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bartoncss.css')}}">
</head>
<body>

    <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{asset('img/h_a.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/nn.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/thor.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    @yield('ListaQualidade')
    @yield('listaColaboradores')


</body>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>