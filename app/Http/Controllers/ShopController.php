<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\ShopRequest;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
     public function index(Shop $shop)
    {
        return view('shops.index')->with(['shops' => $shop->getByLimit()]);
    }
    
    public function show(Shop $shop)
    {
        return view('shops/show')->with(['shop' => $shop]);
    }
    
    public function create()
    {
        return view('shops/create');
    }
    
    public function store(Shop $shop, ShopRequest $request)
    {
        $input = $request['shop'];
        $input['user_id'] = Auth::id();
        $shop->fill($input)->save();
        return redirect('/shops/' . $shop->id);
    }
    
    public function edit(Shop $shop)
    {
        return view('shops.edit')->with(['shop' => $shop]);
    }
    
    public function update(ShopRequest $request, Shop $shop)
    {
       $input_shop = $request['shop'];
       
        $shop->fill($input_shop)->save();

        return redirect('/shops/' . $shop->id);
    }
    
    public function delete(Shop $shop)
    {
        $shop->delete();
        return redirect('/');
    }
}
