<?php

/**
 * Proprietaire form base class.
 *
 * @package    garage.inc
 * @subpackage form
 * @author     nacef.labidi
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseProprietaireForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'               => new sfWidgetFormInput(),
      'prenom'            => new sfWidgetFormInput(),
      'raison_sociale'    => new sfWidgetFormInput(),
      'code_tva'          => new sfWidgetFormInput(),
      'personne_physique' => new sfWidgetFormInputCheckbox(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nom'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'prenom'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'raison_sociale'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'code_tva'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'personne_physique' => new sfValidatorBoolean(array('required' => false)),
      'id'                => new sfValidatorPropelChoice(array('model' => 'Proprietaire', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proprietaire[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proprietaire';
  }


}
