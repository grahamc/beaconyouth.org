<?php

/**
 * Conference form base class.
 *
 * @method Conference getObject() Returns the current form's model object
 *
 * @package    Beacon
 * @subpackage form
 * @author     Graham Christensen
 */
abstract class BaseConferenceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'type'          => new sfWidgetFormInputText(),
      'location'      => new sfWidgetFormInputText(),
      'start_date'    => new sfWidgetFormDateTime(),
      'form_filename' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'deleted_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'Conference', 'column' => 'id', 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'type'          => new sfValidatorString(array('max_length' => 255)),
      'location'      => new sfValidatorString(array('max_length' => 255)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'form_filename' => new sfValidatorString(array('max_length' => 255)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('conference[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Conference';
  }


}
