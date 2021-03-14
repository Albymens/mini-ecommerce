<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class ecommerce extends Controller
{
    public function index(){
        $items = Item::all();
        $categories = Category::all();

        return view('items', [
            'items' => $items,
            'categories' => $categories
        ]);
    }

    public function create(){

        return view('create-items');
    }

    public function show(){

    }

    public function store(){
        
        $items = new Item;
        $items->title = request('title');
        $items->price = request('price');
        $items->description = request('description');
        $items->category = request('category');
        $items->save();

        return response()->json($items, 201);
    }

    public function update(){

    }

    public function destroy(){

    }
}
