<!doctype html>
<html lang="en">

<head>

<!--layout pardrão da aplicação-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">


    <title>@yield('titulo')</title>
</head>

<body>



    <div class="container">
        <!-- menssagem flash para confirmar o sucesso ou erro de operação com banco de dados-->
        @include('flash::message')
        @yield('conteudo')



    </div>


   
    <script src="/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    @stack('js')
</body>

</html>