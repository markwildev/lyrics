<?php

namespace App\Listeners;
use App\Laravel\Models\AuditTrail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon,Auth,DB,Str,Helper;
class AuditTrailListener
{
    

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        
        $audit = new AuditTrail;
        $audit->task_initiator = auth::user()->name;;
        $audit->description = "Create New Transaction " . $event->header->transaction_type;
        $audit->save();

    }
}
