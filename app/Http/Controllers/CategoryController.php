<?php

namespace App\Http\Controllers;

use App\Category;
use Faker\Provider\Image;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
        public function create()
        {
            return view('create.category');
        }


        public function store(Request $request)
        {
            $this->validate($request, array(
                'name' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ));

            $category = new Category();
            $category->name = $request->name;
            $category->save();

            return view('home');
        }



}
