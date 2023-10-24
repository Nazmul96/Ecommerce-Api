<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function getSubCategory(){
        $data = SubCategory::all();

        return response()->json([
            'success'=>true,
            'data'=>$data,
        ]);
    }
}
