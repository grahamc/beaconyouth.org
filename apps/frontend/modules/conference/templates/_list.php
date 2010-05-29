<?php use_helper('calendar'); ?>
<?php if ($conference->getRawValue() instanceof Conference): ?>
<div class="conference_surround">
	<div class="conference_date">
		<?php echo calendar($conference->getStartDate('F'), $conference->getStartDate('j')); ?>
	</div>
	<div class="conference_description">
		<h2><?php echo $conference->getName(); ?></h2>
		<p>A <?php echo $conference->getType(); ?> hosted at <?php echo $conference->getLocation(); ?></p>
	</div>
	<div class="conference_download">
		Download
	</div>
</div>
<?php else: ?>
	<!-- Invalid $conference object. -->
<?php endif; ?>