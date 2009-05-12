<?php

class Modele extends BaseModele
{
  public function __toString() {
    return $this->getNom();
  }
}
