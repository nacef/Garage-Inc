<?php

/**
 * Intervention form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseInterventionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'vehicule_id'       => new sfWidgetFormPropelChoice(array('model' => 'Vehicule', 'add_empty' => true)),
      'type_operation'    => new sfWidgetFormTextarea(),
      'date_intervention' => new sfWidgetFormDate(),
      'employe_id'        => new sfWidgetFormPropelChoice(array('model' => 'Employe', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorPropelChoice(array('model' => 'Intervention', 'column' => 'id', 'required' => false)),
      'vehicule_id'       => new sfValidatorPropelChoice(array('model' => 'Vehicule', 'column' => 'id', 'required' => false)),
      'type_operation'    => new sfValidatorString(array('required' => false)),
      'date_intervention' => new sfValidatorDate(array('required' => false)),
      'employe_id'        => new sfValidatorPropelChoice(array('model' => 'Employe', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('intervention[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intervention';
  }


}
