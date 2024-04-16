<!DOCTYPE html>
<html>
<head>
    <title>Lista de Años</title>
</head>
<body>
    <h1>Lista de Años</h1>
    </p>
    <ul>
        @foreach($anios as $anio)
            <li>{{ $anio->Anio }}</li>
        @endforeach
    </ul>
</body>
</html>