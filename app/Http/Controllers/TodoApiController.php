<?php

namespace App\Http\Controllers;

use App\Todo;
use http\Env\Response;
use Illuminate\Http\Request;

class TodoApiController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return response($todos,200);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return response($todo,200);
    }
}
