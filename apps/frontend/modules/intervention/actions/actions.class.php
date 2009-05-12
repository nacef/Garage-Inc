<?php

/**
 * intervention actions.
 *
 * @package    garage.inc
 * @subpackage intervention
 * @author     nacef.labidi
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class interventionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->intervention_list = InterventionPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InterventionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new InterventionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($intervention = InterventionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object intervention does not exist (%s).', $request->getParameter('id')));
    $this->form = new InterventionForm($intervention);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($intervention = InterventionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object intervention does not exist (%s).', $request->getParameter('id')));
    $this->form = new InterventionForm($intervention);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($intervention = InterventionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object intervention does not exist (%s).', $request->getParameter('id')));
    $intervention->delete();

    $this->redirect('intervention/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $intervention = $form->save();

      $this->redirect('intervention/edit?id='.$intervention->getId());
    }
  }
}
