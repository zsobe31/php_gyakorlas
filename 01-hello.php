<?php

$elso = "Ez a kis szöveg";
$masodik = " össze lett fűzve. ";

print "Hello világ! " . "<br><br>";
print "Ez a szöveg" . " össze lett fűzve. " . "<br><br>";
print "Ez a szöveg is" . $masodik . "<br><br>";
print $elso . $masodik . "<br><br>";

$kozepe = "ez a szöveg közepe, ";
// 1 lehetséges megoldás
print "Ez a szöveg eleje, $kozepe ez pedig a szöveg vége. " . "<br><br>";
// 2 lehetséges megoldás
print "Ez a szöveg eleje, " . $kozepe . " ez pedig a szöveg vége. " . "<br><br>";

$nev = "habókos elemér ";
print $nev . "<br><br>";
// minden szó első betű nagybetű
print ucwords($nev) . "<br><br>"; // minden szó első betű nagybetű
print ucfirst($nev) . "<br><br>"; // csak az első szó első betű nagybetű
print strtoupper($nev) . "<br><br>"; // csupa nagybetű
print strtolower($nev) . "<br><br>"; // csupa kisbetű
print ucwords(strtolower($nev)) . "<br><br>"; // csupa kisbetűs, majd a szavak első betűje nagy

print strlen($nev) . "<br><br>"; // szöveg hossza

print substr($nev,2,5) . "<br><br>";
print substr($nev,-8,5) . "<br><br>";
print substr($nev,3,-7) . "<br><br>";


?>