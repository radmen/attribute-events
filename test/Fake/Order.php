<?php

namespace Kleemans\Test\Fake;

use Illuminate\Database\Eloquent\Model;
use Kleemans\AttributeEvents;
use Kleemans\Test\Fake\Events;

class Order extends Model
{
    use AttributeEvents;

    protected $attributes = [
        'status' => 'processing',
    ];

    protected $dispatchesEvents = [
        'created' => Events\OrderPlaced::class,
        'updated' => Events\OrderUpdated::class,
        'deleted' => Events\OrderDeleted::class,
    ];
}