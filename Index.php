<?php

$Bateau = array(
    "Manureva"=>array(
        "Membre"=>8,
            "Passager"=>4),
    "Sirius"=>array(
        "Membre"=>4,
            "Passager"=>6),
    "Surcouf"=>array(
        "Membre"=>8,
            "Passager"=>15)

    );

foreach ($Bateau as $key => $value) 
{
    if ($value["Passager"]>10) 
    {
        echo $key;
    }
}



?>