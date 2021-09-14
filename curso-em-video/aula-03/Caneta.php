<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar() {
    if ($this->tampada == true) {
      echo "ERRO! Não posso rabiscar!";
    }

    echo "Estou rabiscando!";
  }

  public function tampar() {
    $this->tampada = true;
  }

  public function destampar() {
    $this->tampada = false;
  }
}