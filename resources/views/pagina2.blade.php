<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>

@section('sidebar')
    <p>Esta es la pagina 2.</p>
@endsection

section('content')
<p>Presione aqui para volver al menu principal</p>
<input type="button" onclick="location='layout.blade.php'" />
<br>
<br>
<p>Presione aqui para ir a la pagina 1</p>
<input type="button" onclick="location='pagina1.blade.php'" />
@endsection
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
