<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Proprietaire filter form base class.
 *
 * @package    garage.inc
 * @subpackage filter
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseProprietaireFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'               => new sfWidgetFormFilterInput(),
      'prenom'            => new sfWidgetFormFilterInput(),
      'raison_sociale'    => new sfWidgetFormFilterInput(),
      'code_tva'          => new sfWidgetFormFilterInput(),
      'personne_physique' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'nom'               => new sfValidatorPass(array('required' => false)),
      'prenom'            => new sfValidatorPass(array('required' => false)),
      'raison_sociale'    => new sfValidatorPass(array('required' => false)),
      'code_tva'          => new sfValidatorPass(array('required' => false)),
      'personne_physique' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('proprietaire_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proprietaire';
  }

  public function getFields()
  {
    return array(
      'nom'               => 'Text',
      'prenom'            => 'Text',
      'raison_sociale'    => 'Text',
      'code_tva'          => 'Text',
      'personne_physique' => 'Boolean',
      'id'                => 'Number',
    );
  }
}
