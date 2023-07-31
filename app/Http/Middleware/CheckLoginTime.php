<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckLoginTime
{
    public function handle($request, Closure $next)
    {
        $allowedDate = '2023-07-31';   // Set the allowed date in 'Y-m-d' format (e.g., '2023-08-01' for August 1, 2023)
        $allowedStartTime = '13:00';      // Set the start time in 24-hour format (e.g., '02:30' for 2:30 AM)
        $allowedEndTime = '24:00';     // Set the end time in 24-hour format (e.g., '18:00' for 6:00 PM)

        $now = Carbon::now();
        // dd($now);
        $allowedDateTime = Carbon::createFromFormat('Y-m-d H:i', $allowedDate . ' ' . $allowedStartTime);
        $endDateTime = Carbon::createFromFormat('Y-m-d H:i', $allowedDate . ' ' . $allowedEndTime);

        if (!$now->between($allowedDateTime, $endDateTime)) {
            return redirect()->back()
                             ->with('error', 'Please login during the specified date and time frame.');
        }

        return $next($request);
    }
}
