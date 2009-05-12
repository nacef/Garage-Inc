<?php

class Employe extends BaseEmploye
{
  public function __toString() {
    return $this->getPrenom()." ".$this->getNom();
  }
}
