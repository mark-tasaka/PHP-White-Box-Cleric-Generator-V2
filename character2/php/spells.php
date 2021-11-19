<?php
/*Cleric Spells*/


function spellLevels ($level)
{
    
    $spells = array("1", "2", "3", "4", "5");
    
    return $spells;
}

function spellLine ($level)
{
    
    $line = "-";

    if($level >= 2 && $level <=3)
    {
        $line = "_____";
    }
    else if($level ==4)
    {
        $line = "_____________";
    }
    else if($level ==5)
    {
        $line = "___________________";
    }
    else if($level ==6)
    {
        $line = "___________________________";
    }
    
    else if($level >= 7)
    {
        $line = "_______________________________";
    }
    return $line;
    
}


function spellsEachLevel ($level)
{
    $spells = array("-", "-", "-", "-", "-");
  
    if($level == 2)
    {
            $spells = array("1", "-", "-", "-", "-");   
    }
    else if($level == 3)
    {
            $spells = array("2", "-", "-", "-", "-");   
    }
    else if($level == 4)
    {
            $spells = array("2", "1", "-", "-", "-");   
    }
    else if($level == 5)
    {
            $spells = array("2", "2", "1", "-", "-");   
    }
    else if($level == 6)
    {
            $spells = array("2", "2", "1", "1", "-");   
    }
    else if($level == 7)
    {
            $spells = array("2", "2", "2", "1", "1");   
    }
    else if($level == 8)
    {
            $spells = array("2", "2", "2", "2", "2");   
    }
    else if($level == 9)
    {
            $spells = array("3", "3", "3", "2", "2");  
    }
    else if($level == 10)
    {
            $spells = array("3", "3", "3", "3", "3");  
    }

    return $spells;
}

function spellHeader1 ($level)
{
    $header = "-";
    
    if($level > 1)
    {
        $header = "Spell Lv:";
    }
    
    return $header;
}

function spellHeader2 ($level)
{
    $header = "-";
    
    if($level > 1)
    {
        $header = "Spells:";
    }
    
    return $header;
}



?>