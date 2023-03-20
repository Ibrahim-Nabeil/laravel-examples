<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Post;

class SearchWitheLivewireController extends Controller
{

    public function livewireSearche($id = null)
    {

            $post = Post::paginate(10);
            return view('pagination.index', ['post'=>$post]);
        
        


    }
}