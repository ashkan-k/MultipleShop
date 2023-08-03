<?php

namespace Modules\Guide\Observers;

use Illuminate\Support\Facades\Cache;
use Modules\Guide\Entities\Guide;

class GuideObserver
{
    /**
     * Handle the Guide "created" event.
     */
    public function created(Guide $guide): void
    {
        Cache::delete('index_guides');
    }

    /**
     * Handle the Guide "updated" event.
     */
    public function updated(Guide $guide): void
    {
        Cache::delete('index_guides');
    }

    /**
     * Handle the Guide "deleted" event.
     */
    public function deleted(Guide $guide): void
    {
        Cache::delete('index_guides');
    }

    /**
     * Handle the Guide "restored" event.
     */
    public function restored(Guide $guide): void
    {
        //
    }

    /**
     * Handle the Guide "force deleted" event.
     */
    public function forceDeleted(Guide $guide): void
    {
        //
    }
}
