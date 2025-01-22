<?php

    # Křovina ja bůh.
    // Macků je chábr největší.
    /*
        Kozák je stejně nejlepší.
    */

    define("PAVEL", "Neustále mě štve.");
    define("PI", 3.14159265358979);
    
    $jmeno = "Jan z Vysočan";
    $jmeno = True;
    echo PAVEL . "\n";
    echo PI;

    $poleA = array(2, 3, 5, 7, 11, 13);
    $poleB = [2, 3, 5, 7, 11, 13];
    $pole_poliA = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    $pole_poliB = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

    echo "\n{$poleA[2]}\n";
    echo "{$pole_poliA[1][2]}\n";

    $pole_zaku = array(
        array("Pavel Janouch", 18, False),
        array("Adam Křovina", 17, True),
        array("Alois Kaňák", 16, False)
    );

    print_r($pole_zaku);

    $ass_pole = array(
        "jmeno" => "Petr Kozák",
        "status" => "chábr největší",
        "vek" => 51,
        "pohlavi" => "má",
        "gender" => "binárnní hetero sugar daddy"
    );

    $klasifikace = array(
        "jmeno" => "Pavel Janouch",
        "matika" => [5, 4, 5, 4.5, 1],
        "prg" => [[3, 10],[2, 7],[4, 3]]
    );

    echo "{$ass_pole['jmeno']}\n";

    # zobrazení hodnot $poleA = array(2, 3, 5, 7, 11, 13);
    foreach ($poleA as $value) {
        echo "{$value}:";
    }

    /* zobrazení klíčů a hodnot pole:
    $ass_pole = array(
        "jmeno" => "Petr Kozák",
        "status" => "chábr největší",
        "vek" => 51,
        "pohlavi" => "má",
        "gender" => "binárnní hetero sugar daddy"
    );
    */
    echo "\n";
    foreach ($ass_pole as $key => $value) {
        echo "{$key}: {$value}\n";
    }

    $pole_cisel = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($pole_cisel as $value) {
        if ($value % 2 != 0)
            echo "{$value}:";
    }

    echo "\n";
    for ($i = 7; $i < 60; $i++) {
        if ($i % 2 != 0)
            echo "{$i}:";
    }

    echo "\n";
    for ($i = 7; $i < 60; $i += 2) {
        echo "{$i}:";
    }

    echo "\n";
    $i = 7;
    while ($i < 60) {
        echo "{$i}:";
        $i += 2;
    }

    echo "\n";
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $n[$i][$j] = $i * $j;
            echo "{$n[$i][$j]} ";
        }
        echo "\n";
    }