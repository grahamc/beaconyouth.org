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
	  
	  $this->getValidator('start_date')->setMessage('required', 'You forgot to fill in the starting date.');

	  $this->setHint('name', 'conference name');
	  $this->setHint('location', 'church name');
	  $this->setDefault('type', 'all-age');
	  $this->setDefault('start_date', time());

	  if ($this->getObject()->getFormFilename() !== '') {
		  $options = array('file_src' => sfConfig::get('sf_upload_path') . $this->getObject()->getFormFilename(),
							'is_image' => false,
							'with_delete' => false,
							'template' => '%input%<br />%delete% %delete_label%'
						  );
		  $this->setWidget('form_filename', new sfWidgetFormInputFileEditable($options));
	  } else {
		  $this->setWidget('form_filename', new sfWidgetFormInputFile());
	  }
	  

	  $this->getWidget('form_filename')->setLabel('file');

	  $options = array();
	  $options['path'] = sfConfig::get('sf_upload_dir').'/forms';
	  $options['mime_types'] = array('application/pdf');

	  if ($this->getObject()->getFormFilename() !== '') {
		  $options['required'] = false;
	  } else {
		  $options['required'] = true;
	  }

	  $this->validatorSchema['form_filename'] = new sfValidatorFile($options);

	  unset($this['created_at']);
	  unset($this['updated_at']);
	  unset($this['deleted_at']);
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
