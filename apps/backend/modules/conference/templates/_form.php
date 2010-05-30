<p />
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_helper('madlibs_form'); ?>

<form action="<?php echo url_for('conference/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div>
	<div class="con_form_about">
		<?php echo $form->renderHiddenFields(false) ?>
		<p class="madlibs_form">We're planning a <?php render_madlibs_formfield($form['type']) ?> con named
		<?php render_madlibs_formfield($form['name']); ?>. It'll be hosted by
		<?php render_madlibs_formfield($form['location']); ?> <br />at
		<?php render_madlibs_formfield($form['start_date']); ?>.</p>

		<?php if ($form['start_date']->hasError()) { echo '<p style="margin-right: 0px; text-align: center;"><small>Oops! ' . $form['start_date']->getError() . '</small></p>'; }?>
		<?php echo $form->renderGlobalErrors() ?>
	</div>

	<div class="con_form_upload">
		<p style="margin-left: -10px" class="madlibs_form">Conference Form</p>
		<?php echo $form['form_filename']->renderError() ?>
						<?php echo $form['form_filename'] ?>
		<p style="margin-left: 0px; text-indent: 0px; text-align: left;"><small>(This has to be a PDF.)</small></p>
		<?php if ($form->getObject()->getFormFilename() != '') { ?><p style="text-indent: 0px;">Note: You don't have to upload another form, there is <a target="_blank" href="/uploads/forms/<?php echo $form->getObject()->getFormFilename(); ?>">already one.</a></p><?php } ?>

		<p style="text-indent: 0px; margin-left: auto; margin-right: auto;">
			<img src="/images/icons/adobe_pdf.png" alt="Adobe PDFs" />
		</p>
	</div>
</div>
<div class="clear_all"></div>

<p />
<p>
	<?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'conference/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
</p>


<p>
	<a href="<?php echo url_for('conference/index') ?>">Back to list</a>
</p>
</form>



          
