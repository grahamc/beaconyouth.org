<?php if ($forms->count() == 0): ?>
<h2>We don't seem to have any upcoming events quite yet. Check back later :)</h2>
<?php else: ?>
<h2>Con forms</h2>
<?php endif; ?>
<?php foreach ($forms as $con): ?>
	<?php echo get_partial('conference/list', array('conference' => $con)); ?>
<div class="clear_all"></div>
<?php endforeach;?>
