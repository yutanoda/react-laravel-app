<?php

namespace App\Listeners;

use App\Events\ProductUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductUpdatedListener
{
    
    public function handle(ProductUpdatedEvent $event)
    {
        \Cache::forget('products_fronted');
        \Cache::forget('products_backend');
    }
}
