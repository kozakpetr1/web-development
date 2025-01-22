## Základní příručka syntaxe jazyka PHP

| **Koncept**            | **Syntaxe / Příklad**                                                                 |
|-------------------------|---------------------------------------------------------------------------------------------|
| **Otevření PHP kódu**  | `<?php ... ?>`                                                                                |
| **Komentáře**           | Jednořádkový: `// Komentář` nebo `# Komentář`  <br> Víceřádkový: `/* Komentář */`                   |
| **Proměnné**          | Deklarace: `$nazev = hodnota;` <br> Např.: `$jmeno = "Jan";`                                   |
| **Datové typy**        | `int`, `float`, `string`, `bool`, `array`, `object`, `null`                                    |
| **Pole**               | Jednoduché: `$pole = [1, 2, 3];` <br> Asociativní: `$pole = ["klic" => "hodnota"];`               |
| **Podmínky**          | ```php
if (podmínka) {
  // kód
} elseif (jiná_podmínka) {
  // kód
} else {
  // kód
}
``` |
| **Cyklus – for**       | ```php
for ($i = 0; $i < 10; $i++) {
  echo $i;
}
```                         |
| **Cyklus – while**     | ```php
while (podmínka) {
  // kód
}
```                         |
| **Funkce**             | ```php
function nazev($parametr) {
  return $parametr;
}
```                         |
| **Třídy a objekty**  | ```php
class Trida {
  public $vlastnost;

  public function metoda() {
    return "Ahoj";
  }
}
$objekt = new Trida();
$objekt->vlastnost = "Hodnota";
```|
| **Superglobální proměnné** | `$_GET`, `$_POST`, `$_SESSION`, `$_COOKIE`, `$_SERVER`, `$_FILES`                                |
| **Práce se soubory**   | Otevření: `$soubor = fopen("soubor.txt", "r");` <br> Čtení: `fread($soubor, delka);` <br> Zavření: `fclose($soubor);` |
| **Práce s databíí**    | ```php
$pdo = new PDO("mysql:host=localhost;dbname=test", "uzivatel", "heslo");
$stmt = $pdo->query("SELECT * FROM tabulka");
foreach ($stmt as $radek) {
  echo $radek["sloupec"];
}
``` |
| **Inkluze souborů**    | `include "soubor.php";` nebo `require "soubor.php";`                                            |
| **Řetězce**           | Spojování: `$vysledek = "Ahoj" . " světe";` <br> Interpolace: `$vysledek = "Ahoj $jmeno";`            |

### Poznámky
- PHP kód je interpretován na serveru a jeho výsledek je odesílán klientovi (např. jako HTML).
- Proměnné v PHP jsou dynamicky typované, tj. jejich datový typ je určen automaticky podle hodnoty.

