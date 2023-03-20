<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Post;
class ajaxFunctionController  extends Controller
{
    public function getAll()
    {
        $post = Post::all();
        return view('ajax-function.index', ['post' => $post]);

    }
    
    public function createItem(Request $request)
    {
        $request->validate([
                "title"=>"required",
                "content"=>"required",
            ]);
// 
        $post = new Post;
        $post->title    = $request->input('title');
        $post->content  = $request->input('content') ;
        $post->save();
        $allData = Post::all();

        return response()->json($allData);

    }
    public function deleteItem($id)
    {

        $deleteItem = Post::find($id);
        $deleteItem->delete();
        
        $allData = Post::all();

        return response()->json($allData);

    }
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
// // 
//         $request->validate([
//                 "title"=>"required",
//                 "content"=>"required",
//             ]);
// // 
//         $post = new Post;
//         $post->title    = $request->input('title');
//         $post->content  = $request->input('content') ;
//         $post->save();

//         return redirect()->back();
//         // return redirect()->route('ajax.index');

//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Form  $form
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Form $form)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Form  $form
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Form $form)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Form  $form
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Form $form)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Form  $form
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Form $form)
//     {
//         //
//     }
}
