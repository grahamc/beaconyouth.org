<?php

/**
 * about actions.
 *
 * @package    Beacon
 * @subpackage about
 * @author     Graham Christensen
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aboutActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeBeacon(sfWebRequest $request)
  {

  }

  public function executeConferences(sfWebRequest $request)
  {

  }

  public function executeContact(sfWebRequest $request)
  {
      $this->people = PersonPeer::retrieveAll();
  }
}
