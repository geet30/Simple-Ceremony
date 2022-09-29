<?php

namespace App\Observers;

use App\Models\Invoices;

class InvoicesObserver
{
    /**
     * Handle the Invoices "created" event.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return void
     */
    public function created(Invoices $invoices)
    {
        $invoices->update([
            'invoice_number' =>  '0000'.$invoices->id
        ]);
    }

    /**
     * Handle the Invoices "updated" event.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return void
     */
    public function updated(Invoices $invoices)
    {
        //
    }

    /**
     * Handle the Invoices "deleted" event.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return void
     */
    public function deleted(Invoices $invoices)
    {
        
    }

    /**
     * Handle the Invoices "restored" event.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return void
     */
    public function restored(Invoices $invoices)
    {
        //
    }

    /**
     * Handle the Invoices "force deleted" event.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return void
     */
    public function forceDeleted(Invoices $invoices)
    {
        //
    }
}
