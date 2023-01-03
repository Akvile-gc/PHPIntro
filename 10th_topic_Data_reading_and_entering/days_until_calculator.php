<?php
function exercise4(): void
{
    $eventName = readline('Event name: ');
    $eventDate = readline('Event date (YYYY-MM-DD): ');
    $curDate = new DateTime();
    $evDate = new DateTime($eventDate) ;

    $days = $curDate ->diff($evDate) -> format('%a');
    echo "Event $eventName is $days days away";
}

exercise4();