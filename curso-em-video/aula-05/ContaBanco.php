<?php

class Account {
  public $number;
  protected $type;
  private $owner;
  private $balance;
  private $status;

  public function Account() {
    $this->saldo = 0;
    $this->status = false;
  }

  public function openAccount($type, $owner) {
    if ($type === "CC" || $type === "CP") {
      if ($type === "CC") {
        $this->type = "CC";
        $this->owner = $owner;
        $this->balance = 50.00;
        $this->status = true;

        return "Sr. $owner, sua conta foi aberta com sucesso!";
      }

      if ($type === "CP") {
        $this->type = "CP";
        $this->owner = $owner;
        $this->balance = 150.00;
        $this->status = true;

        return "Sr. $owner, sua conta foi aberta com sucesso!";
      }
      return "Tipo de conta não permitido!";
    }
  }

  public function closeAccount($number) {
    if ($this->number === $number) {
      if ($this->balance === 0) {
        $this->status = false;

        return "Sua conta foi encerrada com sucesso!";
      }
      return "Essa conta não pode ser fechada, pois o saldo está acima de R$ 0,00";
    }
    return "Essa conta não existe ou não te pertence!";
  }

  public function deposit($number, $amount) {
    if ($this->number === $number) {
      $this->balance += $amount;

      return "Depositado R$ $amount,00 feito para a conta $number";
    }
    return "Essa conta não existe ou não te pertence!";
  }

  public function withdraw($number, $amount) {
    if ($this->number === $number) {
      $this->balance -= $amount;

      return "Sacado R$ $amount,00 da conta $number";
    }
    return "Essa conta não existe ou não te pertence!";
  }

  public function monthlyPayment($number) {
    if ($this->number === $number) {
      if ($this->balance !== 0) {
        $this->withdraw($this->number, $this->amount);
      }
      return "Sua conta está zerada, não é possivel efetuar o pagamento da mensalidade!";
    }
    return "Essa conta não existe ou não te pertence!";
  }

  public function getAccountNumber($owner) {
    if ($this->owner === $owner) {
      return $this->number;
    }
    return "Não foi encontrada nehuma conta com esse dono!";
  }
}