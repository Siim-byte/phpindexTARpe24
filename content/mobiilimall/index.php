<?php

// Millisel lehel oled?
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Anekdootide massiiv (võid hiljem teha iga lehe jaoks eraldi)
$anekdoodid = [
    "nadal" => "Miks programmeerijad loodust ei armasta? Sest seal on liiga palju bugisid.",
    "pildi_all" => "Arst ütles, et mul on kujuteldav haigus… vastasin: 'Pole hullu, teen näo, et ravin end.'",
    "kolm" => [
        "<strong>Mis on optimism?</strong><br>Parasiidi hüüd: “Näeme homme!”",
        "<strong>Miks kana teed ületas?</strong><br>Et pääseda kehvast naljast eemale.",
        "<strong>Mis on arvuti lemmikpäev?</strong><br>Bytes-day."
    ],
    "lopp" => "Mu WiFi on nagu mu ideed — ilmub ja kaob."
];

// Lae HTML
include "layout.html";
