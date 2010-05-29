<?php

/**
 * Conference form.
 *
 * @package    Beacon
 * @subpackage form
 * @author     Graham Christensen
 */
class ConferenceForm extends BaseConferenceForm
{
  public function configure()
  {
	  $this->setDefault('name', 'conference name');
	  $this->setDefault('type', 'all-age');
	  $this->setDefault('start_date', time());
	  $this->setDefault('location', 'church name');
  }
}
