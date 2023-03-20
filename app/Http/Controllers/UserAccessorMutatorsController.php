<?php

namespace App\Http\Controllers;

use App\Models\UserAccessorMutators;
use Illuminate\Http\Request;

class UserAccessorMutatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserAccessorMutators::all() ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAccessorMutators  $userAccessorMutators
     * @return \Illuminate\Http\Response
     */
    public function show(UserAccessorMutators $userAccessorMutators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAccessorMutators  $userAccessorMutators
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAccessorMutators $userAccessorMutators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAccessorMutators  $userAccessorMutators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAccessorMutators $userAccessorMutators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAccessorMutators  $userAccessorMutators
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAccessorMutators $userAccessorMutators)
    {
        //
    }
}
