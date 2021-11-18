<?php
/*HitPoints randomly generate hit points*/

function getHitPoints ($level, $conMod)
{
    $hitPoints = 1;

    if($level == 1)
    {
        $hitDice = 1;
    }
    else if($level == 2)
    {
        $hitDice = 2;
    }
    else if($level == 3 || $level == 4)
    {
        $hitDice = 3;
    }
    else if($level == 5)
    {
        $hitDice = 4;
    }
    else if($level == 6)
    {
        $hitDice = 5;
    }
    else if($level == 7 || $level == 8)
    {
        $hitDice = 6;
    }
    else if($level == 9)
    {
        $hitDice = 7;
    }
    else
    {
        $hitDice = 8;
    }
    
    
    $counter = 0;
            
    for(;$counter < $hitDice; $counter++)
            {

                $hpEachLevel = 0;
                $hpEachLevel = rand(2, 7) + $conMod;

                if($hpEachLevel < 3)
                    {
                        $hpEachLevel = 3;
                    }

                $hitPoints += $hpEachLevel;
            }

    if($level == 4)
    {
        $hitPoints += 1;
    }
    
    if($level == 8)
    {
        $hitPoints += 1;
    }

    return $hitPoints;
    
}

function getHitDiceAmount ($level)
{
    $hd = "-";
    
    if($level == 1)
        {
            $hd = "1";
        }
    else if($level == 2)
        {
            $hd = "2";
        }
    else if($level == 3)
        {
            $hd = "3";
        }
    else if($level == 4)
        {
            $hd = "3+1";
        }
    else if($level == 5)
        {
            $hd = "4";
        }
    else if($level == 6)
        {
            $hd = "5";
        }
    else if($level == 7)
        {
            $hd = "6";
        }
    else if($level == 8)
        {
            $hd = "6+1";
        }
    else if($level == 9)
        {
            $hd = "7";
        }
    else if($level == 10)
        {
            $hd = "8";
        }
    
    return $hd;
                
}

?>