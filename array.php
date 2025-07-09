<?php

function temizleVeRastgeleSec($dizi, $adet) {

    $yeniDizi = array_filter($dizi, function($eleman) {
        return !empty($eleman);
    });
    $yeniDizi = array_values($yeniDizi);

    $adet = min($adet, count($yeniDizi));

    $rastgeleIndexler = array_rand($yeniDizi, $adet);

    if (is_array($rastgeleIndexler)) {
        return array_map(function($i) use ($yeniDizi) {
            return $yeniDizi[$i];
        }, $rastgeleIndexler);
    } else {
        return [$yeniDizi[$rastgeleIndexler]];
    }
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(temizleVeRastgeleSec($planets, 2));
print_r(temizleVeRastgeleSec($planets, 3));
print_r(temizleVeRastgeleSec($planets, 2));
print_r(temizleVeRastgeleSec($planets, 4));
print_r(temizleVeRastgeleSec($planets, 5));

?>