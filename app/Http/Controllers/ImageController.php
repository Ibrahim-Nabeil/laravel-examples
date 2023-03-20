<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Image;

class ImageController extends Controller
{

    public function index()
    {
        $Image = Image::all();
        return view('save_image.index', ['image' => $Image]);

    }

    public function create()
    {
        return view('save_image.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $request->validate([
            "file" => "required",
        ]);
        // 
        $file_name = time() . $request->file('file')->getClientOriginalName();
        $path = $request->file->move('image', $file_name);


        $Image = new Image;
        $Image->image = $path;
        $Image->save();

        return redirect()->route('save_image.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form,$id)
    {
        //
        $Image = Image::find($id);

        return view('save_image.show', ['image' => $Image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        
        return view('save_image.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
// get image id of user
        $Image = Image::find($id);
// get image of data DB
        $xx    = $Image->image;
// delete image of public path
        File::delete(public_path($xx));
// delete image of DB
        $Image->delete();
// return back to index page withe message
        return redirect()->back()->with('status', 'Profile updated!');

    }
}