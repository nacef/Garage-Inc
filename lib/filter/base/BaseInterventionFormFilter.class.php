<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Intervention filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseInterventionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'vehicule_id'       => new sfWidgetFormPropelChoice(array('model' => 'Vehicule', 'add_empty' => true)),
      'type_operation'    => new sfWidgetFormFilterInput(),
      'date_intervention' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'employe_id'        => new sfWidgetFormPropelChoice(array('model' => 'Employe', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'vehicule_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Vehicule', 'column' => 'id')),
      'type_operation'    => new sfValidatorPass(array('required' => false)),
      'date_intervention' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'employe_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Employe', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('intervention_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intervention';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'vehicule_id'       => 'ForeignKey',
      'type_operation'    => 'Text',
      'date_intervention' => 'Date',
      'employe_id'        => 'ForeignKey',
    );
  }
}
