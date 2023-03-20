<?php

namespace App\Listeners;

use App\Events\Viewers;
use App\Models\EventTest;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreseViewers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Viewers $Viewers)
    {
        //
        $this->increseViewers($Viewers->EventTest);

    }


public function increseViewers($events)
{
    $events->viewers = $events->viewers + 1;
    $events->save();
}




}
