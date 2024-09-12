<?php 

use Carbon\Carbon;


if (!function_exists('convertTimeToHoursAndMinutes')) {
    function convertTimeToHoursAndMinutes($time)
    {
        list($hours, $minutes) = explode(':', $time);
        return "{$hours}h {$minutes}m";
    }
}

if (!function_exists('getTimeInterval')) {
    function getTimeInterval($start, $end)
    {
        $start = Carbon::parse($start);
        $end = Carbon::parse($end);

        $diffInMinutes = $start->diffInMinutes($end);

        $hours = intdiv($diffInMinutes, 60);
        $minutes = $diffInMinutes % 60;

        return "{$hours}h {$minutes}m";
    }
}

if (!function_exists('formatDateToDayMonth')) {
    function formatDateToDayMonth($date)
    {
        // return Carbon::parse($date)->format('j M Y'); // 2 Sep 2024
        return Carbon::parse($date)->format('D, M d'); //Wed, Nov 27
    }
}

if (!function_exists('formatDateToDayMonthYear')) {
    function formatDateToDayMonthYear($date)
    {
        // return Carbon::parse($date)->format('j M Y'); // 2 Sep 2024
        return Carbon::parse($date)->format('D M d, Y'); //Wed, Nov 27
    }
}

if (!function_exists('formatDateToDayMonthYearTime')) {
    function formatDateToDayMonthYearTime($date)
    {
        return Carbon::parse($date)->format('D M d, Y g:i A'); //Wed Jul 24, 2024 6:16 PM
    }
}

if (!function_exists('formatTime')) {
    function formatTime($time)
    {
        return  Carbon::createFromFormat('H:i:s', $time)->format('H:i');
    }
}

if (!function_exists('formatDateMonthDay')) {
    function formatDateMonthDay($date)
    {
        return  Carbon::parse($date)->format('d M Y');
    }
}

if (!function_exists('convertTimeDuration')) {
    function convertTimeDuration($time)
    {
        $interval = new DateInterval($time);
        // Extract hours and minutes
        $hours = $interval->h;
        $minutes = $interval->i;

        return sprintf('%dh %dm', $hours, $minutes);
    }
}

if (!function_exists('getTimeFromDate')) {
    function getTimeFromDate($date)
    {
        $dateTime = Carbon::parse($date);

        $time = $dateTime->format('g:i A');

        return $time;
    }
}

if (!function_exists('formatTimeDuration')) {
    function formatTimeDuration($isoDuration)
    {
        // Create a DateInterval object from the ISO 8601 duration
        $interval = new DateInterval($isoDuration);

        // Format the interval to '1H 20M'
        $formattedDuration = '';
        if ($interval->h > 0) {
            $formattedDuration .= $interval->h . 'H ';
        }
        if ($interval->i > 0) {
            $formattedDuration .= $interval->i . 'M';
        }

        // Trim any trailing spaces
        $formattedDuration = trim($formattedDuration);

        return $formattedDuration;
    }
}


?>