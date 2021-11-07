<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemApiController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return response($items,200);
    }

    public function show($id)
    {
        $item = Item::find($id);
        return response($item,200);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            "name" => "required|min:3|max:50",
            "price" => "required|integer|min:1|max:100000",
            "stock" => "required|integer|min:1|max:10",
        ]);

        if($validate->fails()){
            return response($validate->errors(),400);
        }

        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;

        $item->save();
        return response($request,200);
    }
}
