<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Post;

class PaginationController extends Controller
{

    public function pagination()
    {
        $post = Post::paginate(10);
        return view('pagination.index', ['post'=>$post]);

    }
}