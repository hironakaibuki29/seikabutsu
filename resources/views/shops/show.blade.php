<x-app-layout>
    <x-slot name="header">
    </x-slot>
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
</x-app-layout>