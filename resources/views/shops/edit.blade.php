<x-app-layout>
    <x-slot name="header">
    </x-slot>
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
</x-app-layout>