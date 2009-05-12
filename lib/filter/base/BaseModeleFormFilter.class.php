<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Modele filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseModeleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'       => new sfWidgetFormFilterInput(),
      'marque_id' => new sfWidgetFormPropelChoice(array('model' => 'Marque', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nom'       => new sfValidatorPass(array('required' => false)),
      'marque_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Marque', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('modele_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Modele';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'nom'       => 'Text',
      'marque_id' => 'ForeignKey',
    );
  }
}
