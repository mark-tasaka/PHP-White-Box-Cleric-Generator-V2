<?php

/*Cleric*/

function thaco($level)
{
    $toHit = 19;
    
    if($level >= 4 && $level <=5)
    {
        $toHit = 18;
    }
    else if($level >= 6 && $level <=7)
    {
        $toHit = 17;
    }
    else if($level == 8)
    {
        $toHit = 16;
    }
    else if($level == 9)
    {
        $toHit = 15;
    }
    else if($level == 10)
    {
        $toHit = 14;
    }
    
    return $toHit;
}




?>