<?php

class Vehicule extends BaseVehicule
{
  public function __toString() {
    return $this->getImmatricule();
  }
}
