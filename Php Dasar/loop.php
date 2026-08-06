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
for ($i = 1; $i <= 1; $i++) {
    for ($j = 2; $j <= 2; $j++) {
        for ($k = 3; $k <= 3; $k++) {
            echo "$i,$j,$k \n";
            echo "$i,$j,$k \n";
            echo "$i,$j,$k \n";
        }
    }
}   


// latihan 9 loop bersarang bintang
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}


// latihan 10 loop menggunakan while
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i \n";
    $i++;
}


// latihan 11 loop menggunakan while datanya mulai dari 10
$i = 10;
while ($i >= 1) {
    echo "ke-$i \n";
    $i--;
}


// latihan 12 loop menggunakan while dengan increment 2
$i = 2;
while ($i <= 10) {
    echo "pilihan ganda ke-$i \n";
    $i += 2;
}


// berikan contoh loop while dengan decrement 10

$i = 100;

while ($i > 0) {

    echo $i . "\n";

    $i -= 10;

}



// latihan 13 loop menggunakan do while
$i = 1;
do {
    echo "Perulangan ke-$i \n";
    $i++;
} while ($i <= 5);  


// latihan 14 loop menggunakan do while dengan decrement

$i = 10;
do{
    echo "ke-$i \n";
    $i--;
}while ($i >= 1);


// latihan 15 loop menggunakan do while dengan increment 2


$i = 50;

do {

    echo $i . "\n";

    $i += 10;

} while ($i <= 40);