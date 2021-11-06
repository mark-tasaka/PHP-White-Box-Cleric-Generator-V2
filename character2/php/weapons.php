<?php


    function getWeapon($input)
    {
        $a00 = array("Battle Axe", "", 15);
        $a01 = array("Hand-Axe", "", 5);
        $a02 = array("Club", "", 10);
        $a03 = array("Dagger", "", 2);
        $a04 = array("Flail", "", 15);
        $a05 = array("Mace", "", 10);
        $a06 = array("Morning Star", "", 15);
        $a07 = array("Polearm", "", 15);
        $a08 = array("Spear", "", 10);
        $a09 = array("Staff", "", 10);
        $a10 = array("Longsword", "", 10);
        $a11 = array("Short Sword", "", 5);
        $a12 = array("Two-Handed Sword", "", 15);
        $a13 = array("Warhammer", "", 10);
        $a14 = array("Longbow", "", 5);
        $a15 = array("Short Bow", "", 5);
        $a16 = array("Heavy Crossbow", "", 5);
        $a17 = array("Light Crossbow", "", 5);
        $a18 = array("Sling", "", 1);


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18);
        
        return $array1[$input];
        
    }


    
function getRandomWeapons()
{
    $weaponsArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);


    //shuffle $weaponsArray
    shuffle($weaponsArray); 

    $numberOfWeapons = rand (2, 6);

    $weaponsHas = array();

    for($j = 0; $j < $numberOfWeapons; ++$j)
    {
        $weapon = $weaponsArray[$j];
        
        array_push($weaponsHas, $weapon);
        
    }

    $rangedWeapon = rand(14, 18);

    array_push($weaponsHas, $rangedWeapon);

    return $weaponsHas;
}



function isWeaponTwoHanded($input, $value)
{
    if($input === "Axe, battle+")
    {
        $value += 1;
    }
    else if($input === "Flail, heavy+")
    {
        $value += 1;
    }
    else if($input === "Hammer, war+")
    {
        $value += 1;
    }
    else if($input === "Morningstar+")
    {
        $value += 1;
    }
    else if($input === "Pick, heavy+")
    {
        $value += 1;
    }
    else if($input === "Pole Arm+")
    {
        $value += 1;
    }
    else if($input === "Quarterstaff+")
    {
        $value += 1;
    }
    else if($input === "Sword, two-handed+")
    {
        $value += 1;
    }
    else if($input === "Trident+")
    {
        $value += 1;
    }
    
    return $value;
    
}

function isWeaponBastardSword($input, $value)
{
    if($input === "Sword, bastard^")
    {
        $value = 100;
    }
    return $value;
}

function weaponNotes($value)
{
    $comments = "";
    
    if($value >= 1 && $value <= 20)
    {
        $comments = "+ Two-handed weapon";
    }
    else if($value === 100)
    {
        $comments = "^ Can be used one-handed or two-handed";
    }
    else if($value > 100)
    {
        $comments = "+ Two-handed weapon<br/>^ Can be used one-handed or two-handed";
    }
    
    return $comments;
    
}




?>