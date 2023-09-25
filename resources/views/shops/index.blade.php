<x-app-layout>
    <x-slot name="header">
        index
    </x-slot>
        <div>
            <form action="{{ route('index') }}" method="GET">
                <input type="text" name="keyword" value="{{ $keyword }}">
                <input type="submit" value="検索">
            </form>
        </div>
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
                    
                </div><br>
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
    </x-app-layout>