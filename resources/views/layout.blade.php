<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    Pagina principal, ahora esta en el layout
    <br>
    <br>

    @section('sidebar')
        Presione aqui para ir a la pagina 1
        <input type="button" onclick="location='pagina1.blade.php'" />
        <br>
        <br>
        @section('sidebar')
            Presione aqui para ir a la pagina 2
            <input type="button" onclick="location='pagina2.blade.php'" />
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>

