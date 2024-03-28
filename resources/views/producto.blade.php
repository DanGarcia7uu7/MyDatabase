<!doctype html>
<html lang="en">
    <head>
        <title>Tablas</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    </head>
    <header>
        <h1 style="text-align: center;">Daniel Garcia Reyes</h1>
    </header>
    <body>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="background-color: #f2f2f2; border-bottom: 1px solid #ddd;">
                <th style="padding: 8px; text-align: left;">ID</th>
                <th style="padding: 8px; text-align: left;">Nombre</th>
                <th style="padding: 8px; text-align: left;">Precio</th>
                <th style="padding: 8px; text-align: left;">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dat)
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 8px;">{{ $dat->_id }}</td>
                <td style="padding: 8px;">{{ $dat->nombre }}</td>
                <td style="padding: 8px;">{{ $dat->precio }}</td>
                <td style="padding: 8px;">{{ $dat->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
