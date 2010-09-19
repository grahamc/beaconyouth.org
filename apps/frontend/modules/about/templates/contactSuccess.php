<h2>Let&rsquo;s chat.</h2>
<p>Need to talk to us? Feel free; we would love to hear from you.</p>
<?php foreach ($people as $person) { ?>
<p>
    <strong><?php echo $person->getPosition(); ?>:</strong>
    <?php echo $person->getName(); ?>
    (<?php echo $person->getEscapedEmail(); ?>)
</p>
<?php } ?>