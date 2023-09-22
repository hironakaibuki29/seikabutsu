<x-app-layout>
    <x-slot name="header">
    </x-slot>
        <h1>店舗詳細</h1>
        <form action="/shops" method="POST">
            @csrf
            <div class="shopname">
                <h2>店舗名</h2>
                <input type="text" name="shop[shopname]" placeholder="店名" value="{{ old('shop.shopname') }}"/>
                <p class="shopname__error" style="color:red">{{ $errors->first('shop.shopname') }}</p>
            </div>
            <div class="information">
                <h2>紹介文</h2>
                <textarea name="shop[information]" placeholder="紹介文">{{ old('shop.information')}}</textarea>
                <p class="information__error" style="color:red">{{ $errors->first('shop.information') }}</p>
            </div>
            <div class="latitude">
                <h4>緯度</h4>
                <input type="namber" name="shop[latitude]" placeholder="緯度" value="{{ old('shop.latitude') }}">
                <p class="latitude__error" style="color:red">{{ $errors->first('shop.latitude') }}</p>
            </div>
            <div class="longitude">
                <h4>経度</h4>
                <input type="namber" name="shop[longitude]" placeholder="経度" value="{{ old('shop.longitude' )}}">
                <p class="longitude__error" style="color:red">{{ $errors->first('shop.longitude') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>