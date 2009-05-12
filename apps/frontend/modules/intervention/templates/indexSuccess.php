<h1>Intervention List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Vehicule</th>
      <th>Type operation</th>
      <th>Date intervention</th>
      <th>Employe</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($intervention_list as $intervention): ?>
    <tr>
      <td><a href="<?php echo url_for('intervention/edit?id='.$intervention->getId()) ?>"><?php echo $intervention->getId() ?></a></td>
      <td><?php echo $intervention->getVehiculeId() ?></td>
      <td><?php echo $intervention->getTypeOperation() ?></td>
      <td><?php echo $intervention->getDateIntervention() ?></td>
      <td><?php echo $intervention->getEmployeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('intervention/new') ?>">New</a>
