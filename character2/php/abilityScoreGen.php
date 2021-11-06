<?php

function roll3D6()
{
    
    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $die3 = rand(1, 6);

    return $die1 + $die2 + $die3;
}


function roll4D6()
{
    $abilityScores = 0;

    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $die3 = rand(1, 6);
    $die4 = rand(1, 6);

    $dieRollArray = array($die1, $die2, $die3, $die4);

    rsort($dieRollArray);

    for($i = 0; $i < 3; ++$i)
    {
        $abilityScores += $dieRollArray[$i];
    }

    return $abilityScores;

}



function roll2D6Plus6()
{
    
    $die1 = rand(1, 6);
    $die2 = rand(1, 6);

    return $die1 + $die2 + 6;
}



function rollAbilityScores($input)
{
    $abilityScores = 0;

    //Roll 3d6
    if($input == 1)
    {
        $abilityScores = roll3D6();
    }
    
    //Roll 4d6, drop the lowest
    if($input == 2)
    {
        $abilityScores = roll4D6();
    }

    
    //Roll 2d6 + 6
    if($input == 3)
    {
        $abilityScores = roll2D6Plus6();
    }


    return $abilityScores;
}

function generationMethod ($abilityScore)
{
    $dice = array(0, 0, 0, 0);
    
    if($abilityScore == 1)
    {
        $dice = array(6, 3, 0, 0);
    }
    
    if($abilityScore == 2)
    {
        $dice = array(6, 4, 1, 0);
    }
    
    if($abilityScore == 3)
    {
        $dice = array(6, 2, 0, 6);
    }
    
    return $dice;
}

function generationMesssage ($abilityScore)
{
    $message = "";
    
    if($abilityScore == 1)
    {
        $message = "Ability Score Generation: 3d6";
    }
    
    if($abilityScore == 2)
    {
        $message = "Ability Score Generation: 4d6, drop the lowest.";
    }
    
    if($abilityScore == 3)
    {
        $message = "Ability Score Generation: 2d6+6";
    }
    

    return $message;
}


function getAbilityModifier($score)
{

    if($score >=3 && $score <=6)
        {
            $modifier = -1;
        }
    else if($score >=7 && $score <=14)
        {
            $modifier = 0;
        }
    else
    {
        $modifier = 1;
    }

    return $modifier;
}

function getModSign($mod)
{
    if($mod >= 0)
    {
        return '+' . $mod;
    }
    else
    {
        return $mod;
    }
}


?>