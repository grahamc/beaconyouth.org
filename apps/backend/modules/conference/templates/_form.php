<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_helper('madlibs_form'); ?>

<form action="<?php echo url_for('conference/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div>
<?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('conference/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'conference/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
<?php echo $form->renderGlobalErrors() ?>
		  <p class="madlibs_form">We're planning a <?php render_madlibs_formfield($form['type']) ?> con named
	<?php render_madlibs_formfield($form['name']); ?>. It'll be hosted by
	<?php render_madlibs_formfield($form['location']); ?> at
	<?php echo $form['start_date']; ?>.</p>
	
</div>
          <?php echo $form['start_date']->renderError() ?>
          
        </td>
      </tr>
      <tr>
        <th><?php echo $form['form_filename']->renderLabel() ?></th>
        <td>
			<table>
				<tr>
					<td><?php echo $form['form_filename']->renderError() ?>
						<?php echo $form['form_filename'] ?></td>
					<td>Note, you can only upload a PDF.</td>
				</tr>
			</table>
          
        </td>
      </tr>
    </tbody>
  </table>
</form>
