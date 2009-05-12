<?php

class Proprietaire extends BaseProprietaire
{
  public function __toString() {
    if ($this->getPersonnePhysique() == true) {
      return $this->getNom()." ".$this->getPrenom();
    }
    else {
      return $this->getRaisonSociale();
    }
  }
}
