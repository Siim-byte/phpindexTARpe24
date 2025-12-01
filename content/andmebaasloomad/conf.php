<?php
$serverinimi='localhost';
$kasutajanimi='siimbeloi';
$parool='siim24';
$andmebaasinimi='siimbeloi';
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset('UTF8');
