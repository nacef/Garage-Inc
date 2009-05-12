<?php

/**
 * garage module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage garage
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12831 2008-11-09 14:33:38Z fabien $
 */
class BaseGarageGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%raison_sociale%% - %%adresse%% - %%tel%% - %%fax%% - %%email%% - %%web%% - %%code_tva%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Garage List';
  }

  public function getEditTitle()
  {
    return 'Edit Garage';
  }

  public function getNewTitle()
  {
    return 'New Garage';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'raison_sociale',  2 => 'adresse',  3 => 'tel',  4 => 'fax',  5 => 'email',  6 => 'web',  7 => 'code_tva',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'raison_sociale' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'adresse' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tel' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'web' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'code_tva' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'raison_sociale' => array(),
      'adresse' => array(),
      'tel' => array(),
      'fax' => array(),
      'email' => array(),
      'web' => array(),
      'code_tva' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'raison_sociale' => array(),
      'adresse' => array(),
      'tel' => array(),
      'fax' => array(),
      'email' => array(),
      'web' => array(),
      'code_tva' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'raison_sociale' => array(),
      'adresse' => array(),
      'tel' => array(),
      'fax' => array(),
      'email' => array(),
      'web' => array(),
      'code_tva' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'raison_sociale' => array(),
      'adresse' => array(),
      'tel' => array(),
      'fax' => array(),
      'email' => array(),
      'web' => array(),
      'code_tva' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'raison_sociale' => array(),
      'adresse' => array(),
      'tel' => array(),
      'fax' => array(),
      'email' => array(),
      'web' => array(),
      'code_tva' => array(),
    );
  }


  public function getForm($object = null)
  {
    $class = $this->getFormClass();

    return new $class($object, $this->getFormOptions());
  }

  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'GarageForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'GarageFormFilter';
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }

  public function getConnection()
  {
    return null;
  }
}
