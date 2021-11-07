<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function c($aa): string
    {
        return "this is from controller $aa";
    }
    public function detail($id): string
    {
        $name ="zinminnhtun";
        $age = 23;
        return view("detail",compact('id','name','age'));
    }
}
