<?php
echo('Vul een getal in.'. PHP_EOL);
$nummer = readline('') . PHP_EOL;
$check = $nummer % 2;

if($check == 0){
    echo('Dit is een even getal.');
}
else{
    echo('Dit is een oneven getal.');
}
