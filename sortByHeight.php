function sortByHeight($array) {
    foreach ($array as $key => $value) {
        ($value > -1)? : $trees[] = $key;
    }
    sort($array);
    array_splice($array, 0, count($trees));
    foreach ($trees as $key => $value) {
        array_splice($array,$value,0,-1);
    }
    return $array;
}
