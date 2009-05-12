<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Garage filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseGarageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'raison_sociale' => new sfWidgetFormFilterInput(),
      'adresse'        => new sfWidgetFormFilterInput(),
      'tel'            => new sfWidgetFormFilterInput(),
      'fax'            => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'web'            => new sfWidgetFormFilterInput(),
      'code_tva'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'raison_sociale' => new sfValidatorPass(array('required' => false)),
      'adresse'        => new sfValidatorPass(array('required' => false)),
      'tel'            => new sfValidatorPass(array('required' => false)),
      'fax'            => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'web'            => new sfValidatorPass(array('required' => false)),
      'code_tva'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('garage_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Garage';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'raison_sociale' => 'Text',
      'adresse'        => 'Text',
      'tel'            => 'Text',
      'fax'            => 'Text',
      'email'          => 'Text',
      'web'            => 'Text',
      'code_tva'       => 'Text',
    );
  }
}
