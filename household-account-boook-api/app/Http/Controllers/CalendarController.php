<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalendarController extends Controller
{
    /**
     * @param String $date
     * @return json
     */
    public function show($date)
    {

        Log::info('===============');
        Log::info($date);
        return response()->json(["date" => ''], 200);
    }
}
