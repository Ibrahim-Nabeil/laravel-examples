<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
// 
        \Session::put('item',44);
// 
        if (\Session::has('item')) {
// 
            \Session::remove('item');
// 
            echo \Session::get('item');

        }

    }

}
