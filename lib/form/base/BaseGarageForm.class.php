<?php

/**
 * Garage form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseGarageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'raison_sociale' => new sfWidgetFormInput(),
      'adresse'        => new sfWidgetFormTextarea(),
      'tel'            => new sfWidgetFormInput(),
      'fax'            => new sfWidgetFormInput(),
      'email'          => new sfWidgetFormInput(),
      'web'            => new sfWidgetFormInput(),
      'code_tva'       => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'Garage', 'column' => 'id', 'required' => false)),
      'raison_sociale' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'adresse'        => new sfValidatorString(array('required' => false)),
      'tel'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fax'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'web'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'code_tva'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('garage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Garage';
  }


}
