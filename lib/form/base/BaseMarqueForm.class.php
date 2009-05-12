<?php

/**
 * Marque form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseMarqueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'  => new sfWidgetFormInputHidden(),
      'nom' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'  => new sfValidatorPropelChoice(array('model' => 'Marque', 'column' => 'id', 'required' => false)),
      'nom' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('marque[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Marque';
  }


}
