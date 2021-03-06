<h2>Conferences List</h2	>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Type</th>
			<th>Date</th>
		</tr>
	</thead>
  <tbody>
    <?php foreach ($conferences as $conference): ?>
    <tr>
      <td><?php echo $conference->getName() ?> at <?php echo $conference->getLocation() ?></td>
	<td><?php echo $conference->getType() ?></td>
      <td><?php echo $conference->getStartDate() ?></td>
	  <td><a href="<?php echo url_for('conference/edit?id='.$conference->getId()) ?>"><img src="/images/icons/Knob Search.png" alt="Edit" /></a><br />
	  <span class="smalltext"><a href="<?php echo url_for('conference/edit?id='.$conference->getId()) ?>">edit</a></span></td>
	  <td><?php echo link_to('<img src="/images/icons/Knob Cancel.png" alt="Delete" />', 'conference/delete?id='.$conference->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?><br />
<span class="smalltext" style="margin-left: 2px;"><?php echo link_to('delete', 'conference/delete?id='.$conference->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></span></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br />
<br />


<a href="<?php echo url_for('conference/new') ?>"><img src="/images/icons/Knob Add.png" alt="New Conference" /></a>
<br />
<span class="smalltext"><a href="<?php echo url_for('conference/new') ?>">add</span></a>

<br />