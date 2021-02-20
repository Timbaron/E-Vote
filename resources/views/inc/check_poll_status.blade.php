<?php
    $poll['status'] = '';

    if ($today->toDateTimeString() < $poll->start_date .' ' .$poll->start_time ) {
        $poll['status'] = 'pending';
    }
    elseif ($today->toDateTimeString() >= $poll->start_date .' ' .$poll->start_time && $today->toDateTimeString() <= $poll->end_date .' ' .$poll->end_time) {
        $poll['status'] = "running";
    }
    elseif($today->toDateTimeString() >= $poll->end_date .' ' .$poll->end_time)
    {
        $poll['status'] = "ended";
    }

?>

