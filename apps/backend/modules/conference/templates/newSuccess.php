<?php
$headers = array();
$headers[] = 'What&rsquo;s up?';
$headers[] = 'New con? Tell me about it.';
$headers[] = 'Wazzup?';

shuffle($headers);

$header = $headers[0];
?>
<h2><?php echo $header; ?></h2>

<?php include_partial('form', array('form' => $form)) ?>
