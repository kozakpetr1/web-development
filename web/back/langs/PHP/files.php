<?php
    $foo = fopen("werich.txt", "r") or die("Nemůžu otevřít soubor!");
    echo fread($foo,filesize("werich.txt"));
    fclose($foo);

    # zápis do souboru
    $fow = fopen("werich2.txt", "w") or die("Nemůžu otevřít soubor!");
    $txt = "Kde blb, tam nebezpečno!\n\nJan Werich";
    fwrite($fow, $txt);
    fclose($fow);

    # otevření a výpis souboru
    $fow = fopen("werich2.txt", "r") or die("Nemůžu otevřít soubor!");
    echo fread($fow,filesize("werich2.txt"));
    fclose($fow);

    $foo = fopen("werich.txt", "r") or die("Nemůžu otevřít soubor!");
    echo "\n<p>\n";
    while(!feof($foo)) {
        echo "\t" . fgets($foo);
    }
    echo "\n</p>";
    fclose($foo);