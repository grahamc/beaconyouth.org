<?php use_helper('calendar'); ?>
<?php if ($conference->getRawValue() instanceof Conference): ?>
<div class="conference_surround">
	<div class="conference_date">
		<?php echo calendar($conference->getStartDate('F'), $conference->getStartDate('j')); ?>
	</div>
	<div class="conference_description">
		<h3><?php echo $conference->getName(); ?></h3>
		<p>A <?php echo $conference->getType(); ?> conference hosted at <?php echo $conference->getLocation(); ?>.</p>
	</div>
	<div class="conference_download">
		<a href="/uploads/forms/<?php echo $conference->getFormFilename(); ?>" target="_blank"><img src="/images/icons/Arrow Down.png" alt="Download" /></a>
		<br />
		<span class="smalltext" style="margin-left: 20px"><a href="/uploads/forms/<?php echo $conference->getFormFilename(); ?>" target="_blank">download</a></span>
	</div>
</div>
<?php else: ?>
	<!-- Invalid $conference object. -->
<?php endif; ?>