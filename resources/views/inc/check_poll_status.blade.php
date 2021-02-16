<?php
    $today = Carbon::now();
    if ($today->toDateTimeString() <= $polls->start_date .' ' .$polls->start_time) {
        $poll['status'] = 'pending';
    }
    elseif ($today->toDateTimeString() >= $polls->start_date .' ' .$polls->start_time && $today->toDateTimeString() <= $polls->end_date .' ' .$polls->end_time) {
        $poll['status'] = "running";
    }
    elseif($today->toDateTimeString() >= $polls->end_date .' ' .$polls->end_time)
    {
        $poll['status'] = "ended";
    }

?>
