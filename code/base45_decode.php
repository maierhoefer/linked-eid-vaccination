<?php
/*
Testing the base45 library ...

Test cases from https://datatracker.ietf.org/doc/draft-faltstrom-base45/

30.3.2021
Chris Baumann - c.baumann@baumann.at
*/

require('base45.php');
$qrcode = $_GET['qrcode'];

//echo "qr-code: <br>" . $qrcode;


$res = base45_decode('6BF080290T9WJWG.FKY*4GO0D-BN-AF*KR9FFBB2G2*70HS8FN0/LC X0WY0BBC8RQD97TK0F90KECTHGWJC0FD/46AIA%G7X+AQB9746HS8$/5U477469L6B46O/5R1BSIBRL66+8RIBJM8ZM95H8WNAJ1B3B9R1AUPC1JCWY8FVC*70LVC6JD846Y96C465W50S6+EDXVET3E5$CSUE6O9NPCSW5F/DBWENWE4WEB$D% D3IA4W5646646-96:96.JCP9EJY8L/5M/5546.96SF63KC-SC4KCD3DX47B46IL6646H*6Z/E5JD%96IA7B46646WX6GVC*JC1A6J%63W5$Q6WF6TPCBEC7ZKW.CXJD7EC5$C59DN.CWKEI3DL2DQEDFWEGECLPCG/DXJDIB8GY8G69Y*8VIAI3D9WELS8IY8MY9VIAO/EZKEZ96446156S68WX9AADH*TPJLWFS:OD%N68SV.-TBDA7IO$2V0A10.2I.K7J2*6428UONAI2R3PP$ GTJQP*RF TREOE7SZWT2L4E5V5CV9H0E4325');

//echo "<br><br> Decoded qr-code:<br> " . $res;


$res2 = zlib_decode($res);

//echo "<br><br> Decompressed qr-code:<br> " . $res2;
echo $res2;

/*
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
*/

?>