<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Employe filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseEmployeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'    => new sfWidgetFormFilterInput(),
      'prenom' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nom'    => new sfValidatorPass(array('required' => false)),
      'prenom' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('employe_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Employe';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'nom'    => 'Text',
      'prenom' => 'Text',
    );
  }
}
