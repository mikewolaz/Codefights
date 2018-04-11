<?php
function commonCharacterCount($s1, $s2) {
    $a1 = str_split($s1);
    sort($a1);
    $a2 = str_split($s2);
    sort($a2);
    $counter = 0;
    for ($i = 0; $i < count($a1); ++$i) {
        for ($j = 0; $j < count($a2); ++$j) {
            if ($a1[$i] === $a2[$j]) {
                ++$counter;
                array_splice($a1, $i, 1);
            }
        }
    }
    return $counter;
}
