<?php

class TypeOperation extends BaseTypeOperation
{
  public function __toString() {
    return $this->getDesignation();
  }
}
