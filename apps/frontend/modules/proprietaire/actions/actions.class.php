<?php

/**
 * proprietaire actions.
 *
 * @package    garage.inc
 * @subpackage proprietaire
 * @author     nacef.labidi
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class proprietaireActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->proprietaire_list = ProprietairePeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProprietaireForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ProprietaireForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($proprietaire = ProprietairePeer::retrieveByPk($request->getParameter('id')), sprintf('Object proprietaire does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProprietaireForm($proprietaire);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($proprietaire = ProprietairePeer::retrieveByPk($request->getParameter('id')), sprintf('Object proprietaire does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProprietaireForm($proprietaire);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($proprietaire = ProprietairePeer::retrieveByPk($request->getParameter('id')), sprintf('Object proprietaire does not exist (%s).', $request->getParameter('id')));
    $proprietaire->delete();

    $this->redirect('proprietaire/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $proprietaire = $form->save();

      $this->redirect('proprietaire/edit?id='.$proprietaire->getId());
    }
  }
}
