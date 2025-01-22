<?php
    $foo = fopen("werich.txt", "r") or die("Soubor nelze otevřít!");
    echo fread($foo, filesize("werich.txt"));
    fclose($foo);

    $foo = fopen("werich.txt", "r") or die("Soubor nelze otevřít!");
    $html = "\n<div>\n";
    while(!feof($foo)) {
        $html .= "\t" . rtrim(fgets($foo)) . "<br>\n";
    }
    $html .= "</div>\n";
    fclose($foo);

    $fow = fopen("werich.html", "w") or die("soubor nelze otevřít!");
    fwrite($fow, $html);
    fclose($fow);