<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * TypeOperation filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseTypeOperationFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'designation' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'designation' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('type_operation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TypeOperation';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'designation' => 'Text',
    );
  }
}
