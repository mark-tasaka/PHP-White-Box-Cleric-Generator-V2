<?php

/*Fighter*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "2,000";
            break;
            
        case 2:
            $xp = "4,000";
            break;
            
        case 3:
            $xp = "8,000";
            break;
            
        case 4:
            $xp = "16,000";
            break;
            
        case 5:
            $xp = "32,000";
            break;
            
        case 6:
            $xp = "64,000";
            break;
            
        case 7:
            $xp = "128,000";
            break;
            
        case 8:
            $xp = "256,000";
            break;
            
        case 9:
            $xp = "512,000";
            break;
            
        case 10:
            $xp = "---";
            break;
                  
        default:
            $xp = "___";
            
    }
    
    return $xp;
}

/*
function savingThrowOption ($option)
{
    if(option == 1)
    {
        return 
    }
}*/


function singleSave ($level)
{
    
    $save = 0;

    switch($level)
    {
        case 1:
            $save = 14;
            break;
            
        case 2:
            $save = 13;
            break;
            
        case 3:
            $save = 12;
            break;
            
        case 4:
            $save = 11;
            break;
            
        case 5:
            $save = 10;
            break;
            
        case 6:
            $save = 9;
            break;
            
        case 7:
            $save = 8;
            break;
            
        case 8:
            $save = 7;
            break;
            
        case 9:
            $save = 6;
            break;
            
        case 10:
            $save = 5;
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
    $savingThrows = array(12, 13, 14, 15, 16);
    
    if($level ==3)
    {
        $savingThrows = array(10, 11, 12, 15, 14);
    }
    else if($level >=4 && $level <=5)
    {
        $savingThrows = array(10, 11, 12, 12, 14);
    }
    else if($level >=6 && $level <=7)
    {
        $savingThrows = array(8, 9, 10, 12, 12);
    }
    else if($level==8)
    {
        $savingThrows = array(8, 9, 10, 9, 12);
    }
    else if($level >=9)
    {
        $savingThrows = array(6, 7, 8, 9, 10);
    }
    
    return $savingThrows;
    
}



?>