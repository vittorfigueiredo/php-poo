<?php

class Caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar() {
    if ($this->tampada == true) {
      echo json_encode([
        "success" => false,
        "message" => "ERRO! Não posso rabiscar!"
      ]);
      die;
    }

    echo json_encode([
      "success" => true,
      "message" => "Estou rabiscando!"
    ]);
    die;
  }

  function tampar() {
    $this->tampada = true;
  }

  function destampar() {
    $this->tampada = false;
  }
}