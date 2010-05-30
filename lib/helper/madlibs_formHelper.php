<?php
function render_madlibs_formfield(sfFormField $field, $new = true) {
	$error = array('class' => 'madlibs_error madlibs_unclicked', 'value' => $field->getError());
	$standard = array();

	if ($new) {
		$js = 'this.value="";this.setAttribute("class", "madlibs_clicked");';
		$standard['class'] = 'madlibs madlibs_unclicked';
	} else {
		$js ='';
	}

	// Javascript replacement magic
	$error['onfocus'] = '';
	$standard['onselect'] = 'javascript:if (this.value=="' . $field->getValue() . '") {' .$js. '}';
	$error['onfocus'] = 'javascript:if (this.value=="' . $field->getError() . '") {' .$js. '}';
	$standard['onclick'] = 'javascript:if (this.value=="' . $field->getValue() . '") {' .$js. '}';

	if ($field->hasError()) {
		$options = array_merge($standard, $error);
	} else {
		$options = $standard;
	}

	echo $field->render($options);
}