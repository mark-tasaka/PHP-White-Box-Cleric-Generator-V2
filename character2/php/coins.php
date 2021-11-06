<?php

function getCoins ($input)
{
        $a00 = array(0, " gold pieces", 0, " gold pieces");
        $a01 = array(rand(1, 6), " silver pieces", rand(1, 6) + rand(1, 6), " copper pieces");
        $a02 = array(rand(1, 6) + rand(1, 6), " gold pieces", rand(1, 6) + rand(1, 6), " silver pieces");
        $a03 = array(rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6), " gold pieces", rand(1, 6), " silver pieces");

        $array1= array($a00, $a01, $a02, $a03);
        
        return $array1[$input];
}


function getGold($input)
{
        $coins = 0;
        $numberOfDice = 0;
        $dieType = 0;

        if($input == 1 || $input == 2)
        {
                $dieType = 6;
        }
        else
        {
                $dieType = 20;
        }

        
        if($input == 1)
        {
                $numberOfDice = 6;
        }
        else if($input == 2)
        {
                $numberOfDice = 12;
        }
        else
        {
                $numberOfDice = 10;
        }

        for($i = 0; $i < $numberOfDice; ++$i)
        {
                $gold = rand(1, $dieType);
                $coins += $gold;
        }

        return $coins;
}

function getSilver($input)
{
        $coins = 0;
        $numberOfDice = 0;
        $dieType = 6;
        
        if($input == 1)
        {
                $numberOfDice = 6;
        }
        else
        {
                $numberOfDice = 3;
        }

        for($i = 0; $i < $numberOfDice; ++$i)
        {
                $silver = rand(1, $dieType);
                $coins += $silver;
        }

        return $coins;
}

?>