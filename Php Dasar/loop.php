<?php

// Latihan 1
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i \n";
}

// Latihan 2
for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan ke-$i \n";
}

// Latihan 3
for ($i = 2; $i <= 10; $i += 2) {
    echo "Perulangan ke-$i \n";
}


// latihan 4
for ($i = 1; $i <= 10; $i++) {
    if($i == 7) {
        break;
    } else {
    
    echo "Perulangan ke-$i \n";
    }
}


// latihan 5
for ($i = 1; $i <= 10; $i++) {
    if($i == 5) {
        continue;
    } else {
    echo "Perulangan ke-$i \n";
    }
}


// latihan 6
for ($i = 1; $i <= 20; $i++) {
    if($i == 7){
        continue;
    }
    echo "Perulangan ke-$i \n";

    if($i == 15){
        break;
    }
}


// latihan 7 loop bersarang
for ($i = 1; $i <= 3; $i++) {
    echo "Baris $i \n";
    for ($j = 1; $j <= 2; $j++) {
        echo "Kolom $j \n";
    }
}


// latihan 8 loop dalam kolom
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "Baris $i Kolom $j \n";
    }
}   