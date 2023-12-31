<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        $categories = Category::all();

        return response()->json([
            'success'=>true,
            'data'=>$categories,
        ]);
    }
}
