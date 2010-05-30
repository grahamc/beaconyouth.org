<?php

/**
 * conference actions.
 *
 * @package    Beacon
 * @subpackage conference
 * @author     Graham Christensen
 */
class conferenceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	 $c = new Criteria;
	 $c->add(ConferencePeer::DELETED_AT, null, Criteria::ISNULL);
    $this->conferences = ConferencePeer::doSelect($c);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new conferenceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new conferenceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
	  $this->setTemplate('new');
    $this->forward404Unless($conference = ConferencePeer::retrieveByPk($request->getParameter('id')), sprintf('Object conference does not exist (%s).', $request->getParameter('id')));
    $this->form = new conferenceForm($conference);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($conference = ConferencePeer::retrieveByPk($request->getParameter('id')), sprintf('Object conference does not exist (%s).', $request->getParameter('id')));
    $this->form = new conferenceForm($conference);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($conference = ConferencePeer::retrieveByPk($request->getParameter('id')), sprintf('Object conference does not exist (%s).', $request->getParameter('id')));
    $conference->delete();

    $this->redirect('conference/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $conference = $form->save();

      $this->redirect('conference/index');
    }
  }
}
