<?php

/**
 * Modele form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseModeleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'nom'       => new sfWidgetFormInput(),
      'marque_id' => new sfWidgetFormPropelChoice(array('model' => 'Marque', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorPropelChoice(array('model' => 'Modele', 'column' => 'id', 'required' => false)),
      'nom'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'marque_id' => new sfValidatorPropelChoice(array('model' => 'Marque', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('modele[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Modele';
  }


}
