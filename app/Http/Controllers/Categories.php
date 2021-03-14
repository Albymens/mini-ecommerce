<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Categories extends Controller
{
    public function index(){
        $categories = Category::all();


        return view('categories', [
            'categories'=>$categories
        ]);
    }

    public function create(){

        return view('create-items');
    }

    public function show(){

    }

    public function store(){
        

    }

    public function update(){

    }

    public function destroy(){

    }
}
