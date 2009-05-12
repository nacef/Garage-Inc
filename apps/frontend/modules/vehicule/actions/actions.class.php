<?php

/**
 * vehicule actions.
 *
 * @package    garage.inc
 * @subpackage vehicule
 * @author     nacef.labidi
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class vehiculeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->vehicule_list = VehiculePeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new VehiculeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new VehiculeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vehicule = VehiculePeer::retrieveByPk($request->getParameter('id')), sprintf('Object vehicule does not exist (%s).', $request->getParameter('id')));
    $this->form = new VehiculeForm($vehicule);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($vehicule = VehiculePeer::retrieveByPk($request->getParameter('id')), sprintf('Object vehicule does not exist (%s).', $request->getParameter('id')));
    $this->form = new VehiculeForm($vehicule);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vehicule = VehiculePeer::retrieveByPk($request->getParameter('id')), sprintf('Object vehicule does not exist (%s).', $request->getParameter('id')));
    $vehicule->delete();

    $this->redirect('vehicule/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vehicule = $form->save();

      $this->redirect('vehicule/edit?id='.$vehicule->getId());
    }
  }
}
