<?php
function render_madlibs_formfield(sfFormField $field) {
	$error = array('class' => 'madlibs_error madlibs_unclicked', 'value' => $field->getError());
	$standard = array('class' => 'madlibs madlibs_unclicked');

	// Javascript replacement magic
	$error['onclick'] = 'javascript:if (this.value=="' . $field->getError() . '") {this.value="";}';

	$standard['onclick'] = 'javascript:if (this.value=="' . $field->getValue() . '") {this.value="";this.setAttribute("class", "madlibs_clicked");}';

	if ($field->hasError()) {
		$options = array_merge($standard, $error);
	} else {
		$options = $standard;
	}

	echo $field->render($options);
}