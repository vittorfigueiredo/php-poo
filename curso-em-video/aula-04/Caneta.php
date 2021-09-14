<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Caneta {
  private $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  public function __construct($m, $c, $p, $t) {
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar = $t;
  }

  // public function __construct() {
  //   $this->cor = "Azul";
  //   $this->tampar();
  // }

  /**
   * Forma alternativa de criar metodo contrutor:
   *
   * public function Caneta() { -> Com o nome da classe
   *  $this->cor = "Azul";
   *  $this->tampar();
   * }
  */

  public function tampar() {
    $this->tampada = true;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($m) {
    $this->modelo = $m;
  }

  public function getPonta() {
    return $this->ponta;
  }

  public function setPonta($p) {
    $this->ponta = $p;
  }
}