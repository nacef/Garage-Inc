<?php

class Marque extends BaseMarque
{
	public function __toString() {
		return $this->getNom();
	}
}
