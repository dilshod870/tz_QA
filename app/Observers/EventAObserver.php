<?php

namespace App\Observers;

use App\EventA;

class EventAObserver
{
    /**
     * Handle the event a "created" event.
     *
     * @param  \App\EventA  $eventA
     * @return void
     */
    public function created(EventA $eventA)
    {
        //
    }

    /**
     * Handle the event a "updated" event.
     *
     * @param  \App\EventA  $eventA
     * @return void
     */
    public function updated(EventA $eventA)
    {
        //
    }

    /**
     * Handle the event a "deleted" event.
     *
     * @param  \App\EventA  $eventA
     * @return void
     */
    public function deleted(EventA $eventA)
    {
        //
    }

    /**
     * Handle the event a "restored" event.
     *
     * @param  \App\EventA  $eventA
     * @return void
     */
    public function restored(EventA $eventA)
    {
        //
    }

    /**
     * Handle the event a "force deleted" event.
     *
     * @param  \App\EventA  $eventA
     * @return void
     */
    public function forceDeleted(EventA $eventA)
    {
        //
    }
}
