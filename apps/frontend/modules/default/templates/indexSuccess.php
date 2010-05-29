<?php foreach ($forms as $con): ?>
	<?php echo get_partial('conference/list', array('conference' => $con)); ?>
<?php endforeach; ?>