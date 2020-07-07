<?php

namespace Enflow\Component\Laravel\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class DatabaseExported
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
