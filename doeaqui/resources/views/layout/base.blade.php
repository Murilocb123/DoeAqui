<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('viewName')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('css/table.css')}}" rel="stylesheet">
    <style>
        body, html {
            height: 100%; /* Faz o HTML e o BODY ocuparem toda a altura da tela */
            margin: 0; /* Remove as margens padrão */
        }
        #main-content {
            flex-grow: 1; /* Faz com que o conteúdo expanda para ocupar o espaço disponível */
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <x-navbar/>
    <div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout container flex-grow-1">
      @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<footer class="bg-dark text-white mt-auto py-3 ">
    <div class="container d-flex justify-content-between">
        <div class="footer-logo">
            <img src="{{asset('app-files/logo.953e34b3.png')}}" alt="Logo UNIDAVI" style="width: 50px;">
        </div>
        <div class="text-center flex-grow-1">
            UNIDAVI - Centro Universitário para o Desenvolvimento do Alto Vale do Itajaí.
            <br>
            Desenvolvido por Emerson Okopnik, Iago Trentini Etur, Murilo Costa Bittencourt
        </div>
    </div>
</footer>
</body>
</html>

