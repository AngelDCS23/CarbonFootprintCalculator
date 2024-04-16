<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .espanol{
            background-color: lightblue;
        }
        .ingles{
            background-color: brown;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Cuerpo</th>
                <th>Botón</th>
                <th>Idioma</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr class="{{ $dato->idiomaRelacion->idioma == 'español' ? 'espanol' : ($dato->idiomaRelacion->idioma == 'ingles 2' ? 'ingles' : '') }}">                
                <td>{{ $dato->titulos }}</td>
                <td>{{ $dato->subtitulos }}</td>
                <td>{{ $dato->cuerpo }}</td>
                <td>{{ $dato->boton }}</td>
                <td>{{ $dato->idiomaRelacion->idioma }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>