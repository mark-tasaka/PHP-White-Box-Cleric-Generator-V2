<?php

/*Cleric*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "1,500";
            break;
            
        case 2:
            $xp = "3,000";
            break;
            
        case 3:
            $xp = "6,000";
            break;
            
        case 4:
            $xp = "12,000";
            break;
            
        case 5:
            $xp = "24,000";
            break;
            
        case 6:
            $xp = "48,000";
            break;
            
        case 7:
            $xp = "96,000";
            break;
            
        case 8:
            $xp = "192,000";
            break;
            
        case 9:
            $xp = "384,000";
            break;
            
        case 10:
            $xp = "---";
            break;
                  
        default:
            $xp = "___";
            
    }
    
    return $xp;
}



function singleSave ($level)
{
    
    $save = 0;

    switch($level)
    {
        case 1:
            $save = 15;
            break;
            
        case 2:
            $save = 14;
            break;
            
        case 3:
            $save = 13;
            break;
            
        case 4:
            $save = 12;
            break;
            
        case 5:
            $save = 11;
            break;
            
        case 6:
            $save = 10;
            break;
            
        case 7:
            $save = 9;
            break;
            
        case 8:
            $save = 8;
            break;
            
        case 9:
            $save = 7;
            break;
            
        case 10:
            $save = 6;
            break;
                  
        default:
            $save = 20;
            
    }
    
    return $save;
}

/*0=death
1=wands
2=paraluze
3=breath
4=spells*/
function savingThrowMatrix ($level)
{
    $savingThrows = array(11, 12, 14, 16, 15);
    
    if($level >=2 && $level <=3)
    {
        $savingThrows = array(10, 11, 13, 15, 14);
    }
    else if($level >=4 && $level <=5)
    {
        $savingThrows = array(9, 10, 12, 14, 13);
    }
    else if($level >=6 && $level <=7)
    {
        $savingThrows = array(8, 9, 11, 13, 12);
    }
    else if($level >=8 && $level <=9)
    {
        $savingThrows = array(7, 8, 10, 12, 11);
    }
    else if($level ==10)
    {
        $savingThrows = array(6, 7, 9, 11, 10);
    }
    
    return $savingThrows;
    
}



?>