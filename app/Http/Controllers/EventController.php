<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceivingDataRequest;
use App\Jobs\ProcessEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function receivingData(ReceivingDataRequest $request)
    {
        ProcessEvent::dispatch($request->validated());

        return response()->json([
            'message' => 'Event sent to queue'
        ]);
    }
}
