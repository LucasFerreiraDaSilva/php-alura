<?php

$peso = 30;
$altura = 1.50;
$imc = $peso / $altura ** 2;

echo " Seu Imc é  $imc. Voce esta com IMC " ."<br>";

if ($imc <18) {
    echo "Está Abaixo" . "<br>";
} elseif ($imc <25) {
    echo "esta medio " ."<br>";
}elseif ($imc <30) {
    echo "vai morrer" . "<br>";
}else {
    echo "Isso ai" . "<br>";
}

echo "TMJ";
