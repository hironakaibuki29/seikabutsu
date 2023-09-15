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
        <h1 class="shopname">編集画面</h1>
        <div class="content">
            <form action="/shops/{{ $shop->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__shopname'>
                    <h2>店舗名</h2>
                    <input type='text' name='shop[shopname]' value="{{ $shop->shopname}}">
                </div>
                <div class='content__information'>
                    <h2>店舗詳細</h2>
                    <input type='text' name='shop[information]' value="{{ $shop->information}}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>