<?php

/*Fighter*/

function thaco($level)
{
    $toHit = 19;
    
    if($level == 2)
    {
        $toHit = 18;
    }
    else if($level >= 3 && $level <=4)
    {
        $toHit = 17;
    }
    else if($level == 5)
    {
        $toHit = 16;
    }
    else if($level >= 6 && $level <=7)
    {
        $toHit = 15;
    }
    else if($level == 8)
    {
        $toHit = 14;
    }
    else if($level >= 9 && $level <=10)
    {
        $toHit = 13;
    }
    
    return $toHit;
}



?>