<?php

require_once 'vendor/autoload.php';

use Luis\CepApi\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipcode('01001000');

print_r($resultado);