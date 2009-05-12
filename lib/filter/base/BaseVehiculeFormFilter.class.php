<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Vehicule filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseVehiculeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'immatricule'     => new sfWidgetFormFilterInput(),
      'modele_id'       => new sfWidgetFormPropelChoice(array('model' => 'Modele', 'add_empty' => true)),
      'proprietaire_id' => new sfWidgetFormPropelChoice(array('model' => 'Proprietaire', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'immatricule'     => new sfValidatorPass(array('required' => false)),
      'modele_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Modele', 'column' => 'id')),
      'proprietaire_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proprietaire', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('vehicule_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehicule';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'immatricule'     => 'Text',
      'modele_id'       => 'ForeignKey',
      'proprietaire_id' => 'ForeignKey',
    );
  }
}
