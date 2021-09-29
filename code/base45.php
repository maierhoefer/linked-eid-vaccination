<?php
/*
Base45 endocing/decoding

Specification: https://datatracker.ietf.org/doc/draft-faltstrom-base45/

30.3.2021
Chris Baumann - c.baumann@baumann.at
*/

$charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ $%*+-./:";

function divmod($x, $y) {
    $resX = floor($x / $y);
    $resY = $x % $y;
    return(array($resX, $resY));
}

function str2buffer($s) {
    $res = array();
    for ($i=0; $i<strlen($s); $i++) {
        $res[] = ord($s[$i]);
    }
    return($res);
}

function b45str2buffer($s) {
    global $charset;
    $res = array();
    for ($i=0; $i<strlen($s); $i++) {
        $p = strpos($charset, $s[$i]);
        if ($p === false) {
            throw new Exception('Invalid base45 value');
        } else {
            $res[] = $p;
        }
    }
    return($res);
}

function base45_encode($input) {
    global $charset;
    $buffer = str2buffer($input);
    $res = '';
    for ($i=0; $i<count($buffer); $i+=2) {
        if (count($buffer) - $i > 1) {
            $x = ($buffer[$i] << 8) + $buffer[$i+1];
            list($e, $rest) = divmod($x, 45 * 45);
            list($d, $c) = divmod($rest, 45);
            $res .= @$charset[$c] . @$charset[$d] . @$charset[$e];
        } else {
            list($d, $c) = divmod($buffer[$i], 45);
            $res .= @$charset[$c] . @$charset[$d];
        }
    }
    return($res);
}

function base45_decode($input) {
    $buffer = b45str2buffer($input);
    $res = '';
    for ($i=0; $i<count($buffer); $i+=3) {
        if (count($buffer) - $i >= 3) {
            $x = $buffer[$i] + $buffer[$i+1] * 45 + $buffer[$i+2] * 45 * 45;
            list($a, $b) = divmod($x, 256);
            $res .= chr($a) . chr($b);
        } else {
            $x = $buffer[$i] + $buffer[$i+1] * 45;
            $res .= chr($x);
        }
    }
    return($res);
}

?>