<?php

$url = "https://www.google.com";

$arrayURL = parse_url($url);

print_r($arrayURL);

echo"<br>";


echo $arrayURL["host"];
echo "<br>";

echo "<br>";

$url2 = "http://www.horadecodar.com.br/?busca=php";

$arraURL2 = parse_url($url2);

print_r($arraURL2);
echo "<br>";


?>