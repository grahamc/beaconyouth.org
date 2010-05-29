<h1>Conferences List</h1>

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
	  <td><a href="<?php echo url_for('conference/edit?id='.$conference->getId()) ?>">Edit</a></td>
	  <td><?php echo link_to('Delete', 'conference/delete?id='.$conference->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('conference/new') ?>">New</a>
