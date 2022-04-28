<?php

namespace Luis\CepApi;

class Search {

  private $url = 'https://viacep.com.br/ws/';

  public function getAdressFromZipcode(string $zipcode): array {
    $zipCode = preg_replace('/[^0-9]/im', '', $zipcode);

    $get = file_get_contents($this->url . $zipCode . '/json/');

    return (array) json_decode($get);
  }
}