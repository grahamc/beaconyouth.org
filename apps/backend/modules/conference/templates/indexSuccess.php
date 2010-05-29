<h1>Conferences List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Type</th>
      <th>Location</th>
      <th>Start date</th>
      <th>Form</th>
      <th>First Created</th>
      <th>Last Update</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($conferences as $conference): ?>
    <tr>
      <td><a href="<?php echo url_for('conference/edit?id='.$conference->getId()) ?>"><?php echo $conference->getId() ?></a></td>
      <td><?php echo $conference->getName() ?></td>
      <td><?php echo $conference->getType() ?></td>
      <td><?php echo $conference->getLocation() ?></td>
      <td><?php echo $conference->getStartDate() ?></td>
      <td><?php echo $conference->getFormFilename() ?></td>
      <td><?php echo $conference->getCreatedAt() ?></td>
      <td><?php echo $conference->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('conference/new') ?>">New</a>
