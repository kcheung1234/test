<?php

class Calculator {

  private $total;

  public function getTotal() {
    return $this->total;
  }

  public function setTotal($amt) {
    $this->total = $amt;
  }

  public function addOne() {
    $this->setTotal($this->getTotal() + 1);
  }

}
