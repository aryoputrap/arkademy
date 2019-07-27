<?php
function count_vowels($word)
{
    $hasil = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] == "a" || $word[$i] == "i" || $word[$i] == "u" || $word[$i] == "e" || $word[$i] == "o"||
            $word[$i] == "A" || $word[$i] == "I" || $word[$i] == "U" || $word[$i] == "E" || $word[$i] == "O") {
            $hasil += 1;
        }
    }
    return $hasil;
}
$word = "PRUGRAmOr";
echo count_vowels($word);
