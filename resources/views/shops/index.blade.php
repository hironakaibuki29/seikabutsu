<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>meshitero</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>店舗一覧</h1>
        <a href='/shops/create'>create</a>
        <div class='shops'>
            @foreach ($shops as $shop)
                <div class='shop'>
                    <a href="/shops/{{ $shop->id }}"><h2 class='title'>{{ $shop->shopname }}</h2></a>
                    <p class='shop'>{{ $shop->information }}</p>
                    <form action="/shops/{{ $shop->id }}" id="form_{{ $shop->id }}" method="post">
                       @csrf
                       @method('DELETE')
                      <button type="button" onclick="deleteShop({{ $shop->id }})">delete</button> 
                    </form>
                    
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $shops->links() }}
        </div>
        <script>
            function deleteShop(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
         </script>
    </body>