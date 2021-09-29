<?php
/*
Testing the base45 library ...

Test cases from https://datatracker.ietf.org/doc/draft-faltstrom-base45/

30.3.2021
Chris Baumann - c.baumann@baumann.at
*/

require('base45.php');

$res = base45_encode('AB');
echo("$res\r\n"); // BB8

$res = base45_encode('Hello!!');
echo("$res\r\n"); // %69 VD92EX0

$res = base45_encode('base-45');
echo("$res\r\n"); // UJCLQE7W581


$res = base45_decode('BB8');
echo("$res\r\n"); // AB

$res = base45_decode('%69 VD92EX0');
echo("$res\r\n"); // Hello!!

$res = base45_decode('UJCLQE7W581');
echo("$res\r\n"); // base-45

$res = base45_decode('QED8WEX0');
echo("$res\r\n"); // ietf!


$res = base45_decode('x'); // raises exception
echo("$res\r\n"); 

?>