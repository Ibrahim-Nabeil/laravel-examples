<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Post;

class FormValidationController  extends Controller
{
    public function formValidationCreate()
    {
        return view('formValidation.create');

    }
    
    public function formValidation(Request $request)
    {
        $request->validate([
                "title"=>"required|alpha:ascii'",
                "content"=>"required|date",
            ]);


        return 'good';

    }
}
