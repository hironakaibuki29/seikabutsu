<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>meshitero</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="shopname">
            {{ $shop->shopname }}
        </h1>
        <div class="information">
            <div class="information">
                <h3>店舗詳細</h3>
                <p>{{ $shop->information }}</p>    
            </div>
        </div>
        <div class="edit">
            <a href="/shops/{{ $shop->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>