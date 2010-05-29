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
	  $this->setHint('name', 'conference name');
	  $this->setHint('location', 'church name');
	  $this->setDefault('type', 'all-age');
	  $this->setDefault('start_date', time());

  }

  /**
   * Set the hint on a validator
   * @param string $field The field to add to
   * @param string $hint The text for the hint
   */
  public function setHint($field, $hint) {
	  $this->setDefault($field, $hint);

	  // Get any existing validator
	  $old_validator = $this->getValidator($field);

	  // Create a new validator to prevent this string from being saved
	  $new_validator = new sfValidatorString(array('empty_value' => $hint));

	  // If the old one is an And validator, just add an additional one
	  if ($old_validator instanceof sfValidatorAnd) {
		  $validator = $old_validator;
		  $validator->addValidator($new_validator);
	  } else {
		  // Otherwise put the old one into an And
		  $validator = new sfValidatorAnd(array($old_validator, $new_validator));
	  }

	  // Overwrite the old validator
	  $this->setValidator($field, $validator);
  }
}
