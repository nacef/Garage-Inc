<?php

/**
 * Vehicule form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseVehiculeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'immatricule'     => new sfWidgetFormInput(),
      'modele_id'       => new sfWidgetFormPropelChoice(array('model' => 'Modele', 'add_empty' => true)),
      'proprietaire_id' => new sfWidgetFormPropelChoice(array('model' => 'Proprietaire', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Vehicule', 'column' => 'id', 'required' => false)),
      'immatricule'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'modele_id'       => new sfValidatorPropelChoice(array('model' => 'Modele', 'column' => 'id', 'required' => false)),
      'proprietaire_id' => new sfValidatorPropelChoice(array('model' => 'Proprietaire', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicule[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehicule';
  }


}
