<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

    </head>
    <body>
        <div class="container">
            <h1 class="mt-4">Factura</h1>
            <table class="table table-inverse">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Camiseta</td>
                        <td>2</td>
                        <td>$80</td>
                    </tr>
                    <tr>
                        <td scope="row">Pantalón</td>
                        <td>1</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td scope="row">Zapatos</td>
                        <td>1</td>
                        <td>$100</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('download') }}">Descargar PDF</a>
        </div>
    </body>
</html>
