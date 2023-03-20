<?php

namespace App\Http\Controllers;

use App\Models\EventTest;
use Illuminate\Http\Request;

use App\Events\Viewers;

class TipsController extends Controller
{

    public function tips()
    {
        // add 1 to item in DB
        EventTest::find(1)->increment('viewers');
        // add 1 to item in DB
        
        ########// EventTest::find(1)->decrement('viewers');#######3#

        $viewer = EventTest::find(1);

        
        // 
        abort(404);

        return view('tips.tips',['viewers'=>$viewer]);
    }
}