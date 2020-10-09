<?php
$merk = [
    ["Nike", "39", 500000,"nike.jpg"],
    ["Nike", "40", 502000,"nike.jpg"],
    ["Nike", "41", 503000,"nike.jpg"],
    ["Adidas", "41", 603000,"adidas.jpg"],
    ["Adidas", "42", 604000,"adidas.jpg"],
    ["Adidas", "43", 605000,"adidas.jpg"],
    ["Specs", "42", 706000,"specs.jpg"],
    ["Specs", "43", 707000,"specs.jpg"],
    ["Specs", "44", 708000,"specs.jpg"],
];

$temp_arr=[];
foreach($merk as $key) {
    $temp_arr[]="Sepatu"." ".$key[0];
}
$pilihan=array_unique($temp_arr);

foreach($pilihan as $key_x) {
    echo $key_x."\n";

}
