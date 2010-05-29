<?php

/**
 * Conference filter form.
 *
 * @package    Beacon
 * @subpackage filter
 * @author     Graham Christensen
 */
class ConferenceFormFilter extends BaseConferenceFormFilter
{
  public function configure()
  {
	  unset($this['form_filename']);
	  unset($this['updated_at']);
	  unset($this['deleted_at']);
  }
}
