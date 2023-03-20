<?php

namespace App\Http\Controllers;

use App\Models\EventTest;
use Illuminate\Http\Request;

use App\Events\Viewers;

class EventTestController extends Controller
{

    public function event()
    {
        $viewer = EventTest::first();
        
        event(new Viewers($viewer));

        $viewers = $viewer->viewers;
        return view('event.event',['viewers'=>$viewers]);
    }
}