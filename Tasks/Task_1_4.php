<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 16.08.14
 */

namespace Tasks;


class Task_1_4 {

    public function searchPeriod($start_hour, $start_minutes, $start_seconds, $end_hour, $end_minutes, $end_seconds)
    {
        if($start_hour > 24 || $start_minutes > 24 || $start_seconds > 24 || $end_hour > 24 || $end_minutes > 24 || $end_seconds > 24)
        {
            throw new \Exception("Period > 24");
        }elseif($start_hour == 0 && $start_minutes == 0 && $start_seconds == 0 && $end_hour == 0 && $end_minutes == 0 && $end_seconds == 0)
        {
            throw new \Exception("Period == 0");
        }elseif($start_hour > $end_hour ){
            throw new \Exception("Period start < period end");
        }

       // $end_minutes = $end_hour * 60 + $end_minutes - $start_hour * 60 + $start_minutes + $start_seconds / 60;
        $end_seconds = ($end_hour - $start_hour) * 3600 + ($end_minutes - $start_minutes) * 60 + ($end_seconds - $start_seconds);

        $end_hour = round($end_seconds / 3600);

        $end_minutes = round(($end_seconds - $end_hour * 3600)/60);

        $end_seconds = $end_seconds - $end_hour * 3600 - $end_minutes * 60;

        return [round($end_hour), round($end_minutes), $end_seconds];

    }
}