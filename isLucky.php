function isLucky($n) {
    $arr = str_split($n);
    $arr = array_chunk($arr, count($arr)/2);
    return (array_sum ($arr[0]) === array_sum ($arr[1])) ? true : false ;
}
